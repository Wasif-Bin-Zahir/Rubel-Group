<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\CommitteeCategoryService;
use Modules\Cms\Services\CommitteeMemberService;

class CommitteeController extends Controller
{
    private $committeeCategoryService;
    private $committeeMemberService;

    public function __construct(
        CommitteeCategoryService $committeeCategoryService,
        CommitteeMemberService $committeeMemberService
    )
    {
        $this->committeeCategoryService = $committeeCategoryService;
        $this->committeeMemberService = $committeeMemberService;
    }

    public function index()
    {
        // data object
        $data = new \stdClass();

        // get committee categories
        $data->committeeCategories = $this->committeeCategoryService->all();

        // get all committee members
        if (request()->has('category')) {
            $data->committeeMembers = $this->committeeMemberService->whereCategoryId(request()->get('category'));
        } else {
            $data->committeeMembers = $this->committeeMemberService->all();
        }

        return view('front::' . config('core.theme') . '.committee.index', compact('data'));
    }
}
