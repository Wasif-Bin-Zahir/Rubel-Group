<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\ContentService;

class ServiceController extends Controller
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

        // get services
        $data->services = $this->contentService->allService(12);

        return view('front::' . config('core.theme') . '.service.index', compact('data'));
    }

    public function show($slug)
    {
        // data object
        $data = new \stdClass();

        // get services
        $data->service = $this->contentService->findBy('slug', $slug);

        // check if data is available
        if (empty($data->service)) {
            abort(404);
        }

        return view('front::' . config('core.theme') . '.service.show', compact('data'));
    }
}
