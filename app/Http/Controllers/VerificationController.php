<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function sendEmailVerification()
    {
        // Logic to generate the verification token
        $verificationToken = generateVerificationToken();

        // Generate the verification URL
      
        $verificationUrl = route('verify.email', ['token' => $verificationToken]);
        // Other code to send the verification email with the URL
        // ...

        return view('verification.email_sent', compact('url'));
    }
}
