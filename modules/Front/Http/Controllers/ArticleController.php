<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\ArticleService;
use Modules\Cms\Services\ContentService;

class ArticleController extends Controller
{
    private $contentService;
    private $articleService;

    public function __construct(
        ContentService $contentService,
        ArticleService $articleService
    )
    {
        $this->contentService = $contentService;
        $this->articleService = $articleService;
    }

    public function index()
    {
        // data object
        $data = new \stdClass();

        // get articles
        $data->articles = $this->articleService->all(12);

        return view('front::' . config('core.theme') . '.article.index', compact('data'));
    }

    public function show($slug)
    {
        // data object
        $data = new \stdClass();

        // get article
        $data->article = $this->articleService->findBy('slug', $slug);

        // check if data is available
        if (empty($data->article)) {
            abort(404);
        }

        return view('front::' . config('core.theme') . '.article.show', compact('data'));
    }
}
