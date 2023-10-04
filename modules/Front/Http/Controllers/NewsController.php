<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\ContentService;

class NewsController extends Controller
{
    private $contentService;

    public function __construct(
        ContentService $contentService
    )
    {
        $this->contentService = $contentService;
    }

    public function index()
    {
        // data object
        $data = new \stdClass();

        // get newses
        $data->newses = $this->contentService->allNews(12);

        return view('front::' . config('core.theme') . '.news.index', compact('data'));
    }

    public function show($slug)
    {
        // data object
        $data = new \stdClass();

        // get news
        $data->news = $this->contentService->findBy('slug', $slug);

        // check if data is available
        if (empty($data->news)) {
            abort(404);
        }

        return view('front::' . config('core.theme') . '.news.show', compact('data'));
    }
}
