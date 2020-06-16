<?php

namespace App\Http\Controllers;

use App\Jobs\sendMail;
use App\Jobs\SendMails;
use App\Models\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }


    public function sendSMS($to, $message)
    {
        $accountSid = env('TWILIO_ACCOUNT_SID');
        $authToken = env('TWILIO_AUTH_TOKEN');
        $twilioNumber = env('TWILIO_NUMBER');
        try {
            $client = new Client($accountSid, $authToken);
            $client->messages->create(
                $to, [
                    "body" => $message,
                    "from" => $twilioNumber,
                ]
            );
            Log::info('Message sent to ' . $twilioNumber);
        } catch (TwilioException $e) {
            dd($e);
            Log::error(
                'Could not send SMS notification.' .
                ' Twilio replied with: ' . $e
            );
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function sendMails()
    {

        $emails = Data::chunk(50,function($data){
               dispatch(new SendMails($data));
        });


        return 'will send in back ground can do any other things';
    }
}
