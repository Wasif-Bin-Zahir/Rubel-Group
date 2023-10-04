<?php

namespace Modules\Ums\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Entities\CommitteeMember;
use Modules\Cms\Entities\Content;
use Modules\Cms\Entities\Faq;
use Modules\Cms\Entities\Page;
use Modules\Cms\Entities\Slider;
use Modules\Cms\Entities\Testimonial;
use Modules\Ums\Entities\User;
use Modules\Ums\Entities\Registration;

class DashboardController extends Controller
{
    public function index()
    {
        if (!auth()->user()->is_alumni) {
            $data = $this->getDashboardData();

            return view('ums::dashboard.index', compact('data'));
        } else {
            $data = $this->getProfileData();

            return view('ums::dashboard.profile', compact('data'));
        }
    }

    private function getProfileData() {
        return User::with([
            'personalInfo',
            'residentialInfo',
            'workInfos',
            'skillInfos',
            'educationalInfos',
            'languages',
            'interests'
        ])->find(auth()->user()->id);
    }

    private function getDashboardData()
    {
        return [
            [
                "id" => 1,
                "title" => "Users",
                "count" => User::where(['is_alumni' => 0])->count(),
                "icon" => "fa-star",
                "url" => "/backend/user",
            ],
            [
                "id" => 2,
                "title" => "Registrations",
                "count" => Registration::count(),
                "icon" => "fa-star",
                "url" => "/backend/registration",
            ],
            [
                "id" => 3,
                "title" => "Sliders",
                "count" => Slider::count(),
                "icon" => "fa-star",
                "url" => "/backend/slider",
            ],
            [
                "id" => 4,
                "title" => "Pages",
                "count" => Page::count(),
                "icon" => "fa-star",
                "url" => "/backend/page",
            ],
            [
                "id" => 5,
                "title" => "Committee Members",
                "count" => CommitteeMember::count(),
                "icon" => "fa-star",
                "url" => "/backend/committee-member",
            ],
            [
                "id" => 6,
                "title" => "Events",
                "count" => Content::where(['content_category_id' => 1])->count(),
                "icon" => "fa-star",
                "url" => "/backend/content?category_id=1",
            ],
            [
                "id" => 8,
                "title" => "News",
                "count" => Content::where(['content_category_id' => 2])->count(),
                "icon" => "fa-star",
                "url" => "backend/content?category_id=2",
            ],
            [
                "id" => 9,
                "title" => "Notices",
                "count" => Content::where(['content_category_id' => 3])->count(),
                "icon" => "fa-star",
                "url" => "backend/content?category_id=3",
            ],
            [
                "id" => 10,
                "title" => "FAQs",
                "count" => Faq::count(),
                "icon" => "fa-star",
                "url" => "/backend/faq",
            ],
            [
                "id" => 11,
                "title" => "Testimonials",
                "count" => Testimonial::count(),
                "icon" => "fa-star",
                "url" => "/backend/testimonial",
            ]
        ];
    }
}
