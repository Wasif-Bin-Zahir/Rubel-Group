<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\PageService;

class PageController extends Controller
{
    private $pageService;

    public function __construct(
        PageService $pageService
    )
    {
        $this->pageService = $pageService;
    }


    public function show($slug)
    {
        // data object
        $data = new \stdClass();

        // get page
        $data->page = $this->pageService->findBy('slug', $slug);

        // check if data is available
        if (empty($data->page)) {
            abort(404);
        }

        return view('front::' . config('core.theme') . '.page.show', compact('data'));
    }
}
