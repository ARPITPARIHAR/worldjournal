<?php

namespace App\Services;

class SMSService
{
    public function sendSMS($mobile_no, $otp)
    {
        // Implement the logic to send the SMS using your preferred SMS service provider
        // For example, using the Twilio package:

        // use Twilio\Rest\Client;

        // $sid = 'YOUR_TWILIO_SID';
        // $token = 'YOUR_TWILIO_AUTH_TOKEN';
        // $twilio = new Client($sid, $token);

        // $twilio->messages->create(
        //     $mobile_no,
        //     [
        //         'from' => 'YOUR_TWILIO_PHONE_NUMBER',
        //         'body' => 'Your OTP: ' . $otp
        //     ]
        // );

        // Replace the above code with your own implementation using the desired SMS service provider

        // For testing purposes, you can simply log the SMS details
        \Illuminate\Support\Facades\Log::info("SMS sent to $mobile_no. OTP: $otp");
    }
}
