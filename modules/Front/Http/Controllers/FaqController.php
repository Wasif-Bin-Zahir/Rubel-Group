<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\FaqService;

class FaqController extends Controller
{
    private $faqService;

    public function __construct(
        FaqService $faqService
    )
    {
        $this->faqService = $faqService;
    }
    
    public function index()
    {
        // data object
        $data = new \stdClass();

        // get faqs
        $data->faqs = $this->faqService->all(10);

        return view('front::' . config('core.theme') . '.faq.index', compact('data'));
    }
}
