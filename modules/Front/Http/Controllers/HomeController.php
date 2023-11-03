<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Entities\Page;
use Modules\Cms\Services\SliderService;
use Modules\Cms\Services\ArticleService;
use Modules\Cms\Services\ContentService;
use Modules\Cms\Services\TestimonialService;
use Modules\Ums\Entities\Registration;
use Modules\Cms\Services\CommitteeCategoryService;
use Modules\Cms\Services\CommitteeMemberService;
class HomeController extends Controller
{
    private $sliderService;
    private $contentService;
    private $testimonialService;
    private $articleService;
    private $committeeMemberService;

    public function __construct(
        SliderService $sliderService,
        ContentService $contentService,
        TestimonialService $testimonialService,
        ArticleService $articleService,
        CommitteeMemberService $committeeMemberService
    ) {
        $this->sliderService = $sliderService;
        $this->contentService = $contentService;
        $this->testimonialService = $testimonialService;
        $this->articleService = $articleService;
        $this->committeeMemberService = $committeeMemberService;
    }

    public function index()
    {
        // data object
        $data = new \stdClass();

        // get all sliders
        $data->sliders = $this->sliderService->all();
        $data->committeeMembers = $this->committeeMemberService->whereCategoryId(1);
        // get welcome message
        $data->welcomeMessage = Page::where('slug', 'message')->first();

        // get about organiser
        $data->aboutorganiser = Page::where('slug', 'about-organiser')->first();

        // get the sponsors
        $data->sponsors = $this->contentService->allSponsors(12);

        // get participants
        $data->participants = $this->contentService->allParticipants(12);

        // get countries
        $data->countries = $this->contentService->allParticipantCountries(20);

        $data->register_user = Registration::count();

        // get articles
        $data->articles = $this->articleService->all(5);

        return view('front::' . config('core.theme') . '.home.index', compact('data'));
    }
}
