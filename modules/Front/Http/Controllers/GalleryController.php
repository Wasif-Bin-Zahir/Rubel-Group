<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\ContentService;

class GalleryController extends Controller
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

        // get gallery photos
        $data->galleryPhotos = $this->contentService->allGalleryPhoto(12);

        return view('front::' . config('core.theme') . '.gallery.index', compact('data'));
    }
}
