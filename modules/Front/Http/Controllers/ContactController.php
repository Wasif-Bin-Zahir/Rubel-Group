<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cms\Entities\Form;
use Browser;

class ContactController extends Controller
{
    public function index()
    {
        return view('front::' . config('core.theme') . '.contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required_without:phone',
            'phone' => 'required_without:email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Get all data
        $data = $request->all();
        unset($data['_token']);

        // Get agent info
        $agentInfo = $this->getVisitorLog();

        // Create form data
        Form::create([
            'title' => "[$request->first_name $request->last_name] $request->subject",
            'data' => json_encode($data),
            'agent_info' => json_encode($agentInfo)
        ]);

        // flash notification
        notifier()->success('Message sent successfully!');

        // redirect back
        return redirect()->back();
    }

    // get visitor log data
    private function getVisitorLog($array = false)
    {
        $visitor_log = new \stdClass();
        $visitor_log->ip_address = \Illuminate\Support\Facades\Request::ip();
        $visitor_log->request_url = \Illuminate\Support\Facades\Request::url();
        $visitor_log->browser_name = Browser::browserName();
        $visitor_log->browser_family = Browser::browserFamily();
        $visitor_log->browser_version = Browser::browserVersion();
        $visitor_log->browser_engine = Browser::browserEngine();
        $visitor_log->os_name = Browser::platformName();
        $visitor_log->os_family = Browser::platformFamily();
        $visitor_log->os_version = Browser::platformVersion();
        $visitor_log->device_family = Browser::deviceFamily();
        $visitor_log->device_model = Browser::deviceModel();
        $visitor_log->device_grade = Browser::mobileGrade();

        // check if wants array
        if ($array) {
            return (array) $visitor_log;
        } else {
            return $visitor_log;
        }
    }
}
