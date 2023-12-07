<?php

namespace App\Http\Controllers;

use Aloha\Twilio\Twilio;

class TwilioController extends Controller
{
    public function sendSms()
    {
        $twilio = app(Twilio::class);

        $twilio->message('+59167241644', 'Hello, this is a test message from Twilio!');

        return 'SMS sent successfully.';
    }
}
