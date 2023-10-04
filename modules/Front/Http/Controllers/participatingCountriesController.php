<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\ContentService;

class participatingCountriesController extends Controller
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

        // get notices
        $data->notices = $this->contentService->allParticipantCountries(12);

        return view('front::' . config('core.theme') . '.participantcountry.index', compact('data'));
    }

    public function show($slug)
    {
        // data object
        $data = new \stdClass();

        // get notice
        $data->notice = $this->contentService->findBy('slug', $slug);

        // check if data is available
        if (empty($data->notice)) {
            abort(404);
        }

        return view('front::' . config('core.theme') . '.participantcountry.show', compact('data'));
    }
}
