<?php

namespace Modules\Setting\Providers;

use Illuminate\Support\ServiceProvider;

// services
use Modules\Cms\Entities\Page;
use Modules\Setting\Services\SeoService;
use Modules\Setting\Services\SiteService;
use Modules\Cms\Services\EventService;
use Modules\Setting\Services\ContactService;
use Modules\Setting\Entities\Site;

class GlobalDataServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * Boot the observers.
     *
     * @param SiteService $siteService
     * @param ContactService $contactService
     * @param SeoService $seoService
     */
    public function boot(
        SiteService $siteService,
        ContactService $contactService,
        SeoService $seoService,
        EventService $EventService
    ) {
        if (!app()->runningInConsole()) {
            // share site settings data
            $Site = Site::find(1);
            $visitor  = $Site->visitor + 1;
            $Site->visitor = $visitor;
            $Site->update();
            view()->share('global_site', $siteService->first());

            // share event data
            view()->share('event_data', $EventService->first());

            // share contact settings data
            view()->share('global_contact', $contactService->first());
            // share seo settings data
            view()->share('global_seo', $seoService->first());
            // global menu
            view()->share('global_menu', $this->populateMenu());
        }
    }

    private function populateMenu()
    {
        $menus = [];

        // about us menu
        array_push($menus, $this->getAboutMenu());



        // directory menu
        // array_push($menus, $this->getSingleMenu('Directory', 'ডিরেক্টরি', url('/directory')));

        // event menu
        // array_push($menus, $this->getSingleMenu('Event', 'ইভেন্ট', url('event')));

        // gallery menu
        // array_push($menus, $this->getGalleryMenu());

        array_push($menus, $this->getExhibitionMenu());


        // sponsor menu

        // array_push($menus, $this->getSingleMenu('Participants', 'অংশগ্রহণকারীরা', url('/participants')));
        // array_push($menus, $this->getSingleMenu('schedule', 'সময়সূচী', url('/schedule')));
        // array_push($menus, $this->getSingleMenu('Sponsor', 'স্পন্সর', url('/sponsors')));


        // contact menu
        // publication menu
        array_push($menus, $this->getPublicationMenu());

        // article menu
        array_push($menus, $this->getArticleMenu());
        array_push($menus, $this->getTravel_stayMenu());
        //registration menu
        array_push($menus, $this->getSingleMenu('Registration', 'রেজিস্ট্রেশন', url('/registration')));
        array_push($menus, $this->getContactMenu());

        return $menus;
    }

    private function getSingleMenu($title, $titleBn, $link = null)
    {
        $menu = new \stdClass();
        $menu->title = $title;
        $menu->title_bn = $titleBn;
        $menu->link = $link;
        $menu->children = [];

        return $menu;
    }

    private function getAboutMenu()
    {
        $menu = new \stdClass();
        $menu->title = 'About Us';
        $menu->title_bn = 'আমাদের সম্পর্কে';
        $menu->link = null;
        $menu->children = [];

        // dropdown
        $items = Page::where('page_category_id', 1)->get();
        foreach ($items as $item) {
            $dMenu = new \stdClass();
            $dMenu->title = $item->title;
            $dMenu->title_bn = $item->title_bn ?? $item->title;
            $dMenu->link = url('page/' . $item->slug);
            array_push($menu->children, $dMenu);
        }

        // dropdown
        $items = json_decode(json_encode([
            [
                "title" => "Our Committee",
                "title_bn" => "আমাদের কমিটি",
                "link" => url('committee'),
            ]
        ]));
        foreach ($items as $item) {
            $dMenu = new \stdClass();
            $dMenu->title = $item->title;
            $dMenu->title_bn = $item->title_bn ?? $item->title;
            $dMenu->link = $item->link;
            array_push($menu->children, $dMenu);
        }

        return $menu;
    }

    private function getExhibitionMenu()
    {
        $menu = new \stdClass();
        $menu->title = 'Exhibition';
        $menu->title_bn = 'এক্সিবিশন';
        $menu->link = null;
        $menu->children = [];


        // dropdown
        $items = json_decode(json_encode([
            [
                "title" => "Sponsor",
                "title_bn" => "স্পন্সর",
                "link" => url('sponsors'),
            ],
            // [
            //     "title" => "Exhibitors List",
            //     "title_bn" => "প্রদর্শকদের তালিকা",
            //     "link" => url('exhibitors-list'),
            // ],
            [
                "title" => "Participating Countries",
                "title_bn" => "অংশগ্রহণকারী দেশগুলো",
                "link" => url('participating-countries'),
            ],
            [
                "title" => "Floor plan",
                "title_bn" => "ফ্লোর প্ল্যান",
                "link" => url('floor-plan'),
            ],
            [
                "title" => "Brochure",
                "title_bn" => "পুস্তিকা",
                "link" => url('brochure'),
            ],
            [
                "title" => "Venue master plan",
                "title_bn" => "ভেন্যু মাস্টার প্ল্যান",
                "link" => url('venue-master-plan'),
            ]
        ]));
        foreach ($items as $item) {
            $dMenu = new \stdClass();
            $dMenu->title = $item->title;
            $dMenu->title_bn = $item->title_bn ?? $item->title;
            $dMenu->link = $item->link;
            array_push($menu->children, $dMenu);
        }


        // dropdown
        $items = Page::where('page_category_id', 2)->orderBy('sort_order')->get();
        foreach ($items as $item) {
            $dMenu = new \stdClass();
            $dMenu->title = $item->title;
            $dMenu->title_bn = $item->title_bn ?? $item->title;
            $dMenu->link = url('page/' . $item->slug);
            array_push($menu->children, $dMenu);
        }




        return $menu;
    }

    private function getGalleryMenu()
    {
        $menu = new \stdClass();
        $menu->title = 'Gallery';
        $menu->title_bn = 'গ্যালারী';
        $menu->link = url('gallery');
        $menu->children = [];

        return $menu;
    }

    private function getPublicationMenu()
    {
        $menu = new \stdClass();
        $menu->title = 'Publication';
        $menu->title_bn = 'পাবলিকেশন';
        $menu->link = null;
        $menu->children = [];

        // dropdown
        $items = json_decode(json_encode([
            [
                "title" => "News",
                "title_bn" => "নিউজ",
                "link" => url('news'),
            ],
            [
                "title" => "Notice",
                "title_bn" => "নোটিশ",
                "link" => url('notice'),
            ]
        ]));
        foreach ($items as $item) {
            $dMenu = new \stdClass();
            $dMenu->title = $item->title;
            $dMenu->title_bn = $item->title_bn ?? $item->title;
            $dMenu->link = $item->link;
            array_push($menu->children, $dMenu);
        }

        return $menu;
    }

    private function getArticleMenu()
    {
        $menu = new \stdClass();
        $menu->title = 'Article';
        $menu->title_bn = 'আর্টিকেল';
        $menu->link = url('article');
        $menu->children = [];

        return $menu;
    }


    private function getTravel_stayMenu()
    {
        $menu = new \stdClass();
        $menu->title = 'Travel & Stay';
        $menu->title_bn = 'ভ্রমণ এবং অবস্থান';
        $menu->link = null;
        $menu->children = [];






        // dropdown
        $items = Page::where('page_category_id', 3)->orderBy('sort_order')->get();
        foreach ($items as $item) {
            $dMenu = new \stdClass();
            $dMenu->title = $item->title;
            $dMenu->title_bn = $item->title_bn ?? $item->title;
            $dMenu->link = url('page/' . $item->slug);
            array_push($menu->children, $dMenu);
        }

        $items = json_decode(json_encode([
            [
                "title" => "Official Hotel Information",
                "title_bn" => "Official Hotel Information",
                "link" => url('hotel-information'),
            ]
        ]));

        foreach ($items as $item) {
            $dMenu = new \stdClass();
            $dMenu->title = $item->title;
            $dMenu->title_bn = $item->title_bn ?? $item->title;
            $dMenu->link = $item->link;
            array_push($menu->children, $dMenu);
        }


        return $menu;
    }









    private function getContactMenu()
    {
        $menu = new \stdClass();
        $menu->title = 'Contact';
        $menu->title_bn = 'যোগাযোগ';
        $menu->link = url('contact');
        $menu->children = [];

        return $menu;
    }
}
