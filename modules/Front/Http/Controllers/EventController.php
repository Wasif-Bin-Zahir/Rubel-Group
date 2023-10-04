<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\ContentService;

class EventController extends Controller
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

        // get events
        $data->events = $this->contentService->allEvents(12);

        return view('front::' . config('core.theme') . '.event.index', compact('data'));
    }

    public function show($slug)
    {
        // data object
        $data = new \stdClass();

        // get event
        $data->event = $this->contentService->findBy('slug', $slug);

        // check if data is available
        if (empty($data->event)) {
            abort(404);
        }

        return view('front::' . config('core.theme') . '.event.show', compact('data'));
    }
}
