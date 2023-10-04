<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cms\Entities\Form;
use Modules\Ums\Entities\Registration;
use Illuminate\Support\Facades\Mail;
use Browser;
use Illuminate\Support\Facades\DB;
use App\Mail\RegistrationSuccess;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('front::' . config('core.theme') . '.registration.index');
    }

    public function store(Request $request)
    {
        //    return $request->all();
        $request->validate([
            'first_name' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'company' => 'required',
            'country' => 'required',
            // 'interest_on' => 'required',
        ]);
        // return 1;

        try {
            DB::beginTransaction();

            Registration::create([
                'first_name' => $request->first_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'designation' => $request->designation,
                'company' => $request->company,
                'country' => $request->country,
                'interest_on' => json_encode($request->interest_on),
            ]);
            $email = $request->email;
            $phone = $request->phone;
            $user = 'Name : ' . $request->first_name . ' Email: ' . $request->email . ' Phone:' . $request->phone . ' Designation:' . $request->designation . ' Company:' . $request->company . ' Country:' . $request->country;
            $url = 'https://expo.ahcab.net/registration/' . $phone;
            $text = 'Congratulations! Your registration was successful. Welcome to 5th ahcab expo 2023. ' . $user;
            $textsms = 'Congratulations! Your registration was successful. Welcome to 5th ahcab expo 2023. Click the link below to get the QR Code ' . $url;
            $this->sendSms($phone, $textsms);


            Mail::to($email)->send(new RegistrationSuccess($text, $email));

            notifier()->success('Congratulations! Your registration was successful. Welcome to 5th ahcab expo 2023');

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();

            notifier()->error('Error occurred! Registration cannot be completed.');
        }

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

    public function show($id)
    {
        $registration = Registration::where('phone', $id)->first();
        if ($registration) {
            $text = 'Name : ' . $registration->first_name . ' Email: ' . $registration->email . ' Phone:' . $registration->phone . ' Designation:' . $registration->designation . ' Company:' . $registration->company . ' Country:' . $registration->country;
            return view('front::' . config('core.theme') . '.registration.show', compact('text'));
        } else {
            return "User not found";
        }
    }


    protected function sendSms($number, $text)
    {


        $url = "https://bulksmsbd.net/api/smsapi";
        $api_key = "akQDHrnAU9CQvcppkCBV";
        $senderid = "8809617611082";
        $number = $number;
        $message = $text;

        $data = [
            "type" => "text",
            "api_key" => $api_key,
            "senderid" => $senderid,
            "number" => $number,
            "message" => $message
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;





        //   $url = "http://sms.esmsbd.com/smsapi";
        //   $data = [
        //     "api_key" => "C20065725ef75a65d9ae29.08255518",
        //     "type" => "text",
        //     "contacts" =>$number,
        //     "senderid" => "8809612446650",
        //     "msg" =>$text,
        //   ];
        //   $ch = curl_init();
        //   curl_setopt($ch, CURLOPT_URL, $url);
        //   curl_setopt($ch, CURLOPT_POST, 1);
        //   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //   $response = curl_exec($ch);
        //   curl_close($ch);
        //   return $response;

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'http://66.45.237.70/api.php?username=01515233939&password=D53Y2G8T&number='.$number.'&message='.$text,
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'POST',
        // ));

        // $response = curl_exec($curl);
        // curl_close($curl);

        // return json_decode($response,true);
    }
}
