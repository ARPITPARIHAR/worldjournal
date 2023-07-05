<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Register;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Twilio\Rest\Client;

class UserLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.send-otp');
    }

    public function showOtpForm()
{
    return view('auth.enter-otp');
}


public function LoginForm()
     {
       return view ('auth.login');
     }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Session::flash('success', 'You have successfully logged in.');
            $intendedUrl = Session::pull('url.intended', '/postcfp');

            return redirect()->to($intendedUrl);
        } else {
            return redirect("login")->with('error', 'Oops! You have entered invalid credentials.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('logins')->with('success', 'You have been logged out.');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Failed to authenticate with ' . $provider);
        }

        if ($user) {
            $email = $user->getEmail();
            $name = $user->getName();
            $providerId = $user->getId();

            if (!empty($email) && !empty($name) && !empty($providerId)) {
                $existingUser = Register::where('email', $email)->first();

                if ($existingUser) {
                    Auth::login($existingUser);
                } else {
                    $newUser = new Register();
                    $newUser->name = $name;
                    $newUser->email = $email;
                    $newUser->provider = $provider;
                    $newUser->provider_id = $providerId;
                    $newUser->save();

                    Auth::login($newUser);
                }

                return redirect()->route('home');
            } else {
                return redirect()->route('login')->with('error', 'User information not available from ' . $provider);
            }
        } else {
            return redirect()->route('login')->with('error', 'Failed to retrieve user information from ' . $provider);
        }
    }

    public function loginWithWhatsApp(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'phone_number' => 'required|numeric'
        ]);
    
        // Your Twilio credentials from environment variables
        $accountSid = getenv('TWILIO_SID');
        $authToken = getenv('TWILIO_AUTH_TOKEN');
        $twilioPhoneNumber = getenv('TWILIO_PHONE_NUMBER');
    
        // Create a new Twilio client
        $client = new Client($accountSid, $authToken);
    
        // The phone number to send the WhatsApp message to
        $toPhoneNumber = $validatedData['phone_number'];
    
        // Generate OTP (replace this with your OTP generation logic)
        $otp = mt_rand(1000, 9999);
    
        try {
            // Send a WhatsApp message with the OTP
            $message = $client->messages->create(
                "whatsapp:" . $toPhoneNumber,
                [
                    "from" => "whatsapp:" . $twilioPhoneNumber,
                    "body" => "Your OTP: " . $otp
                ]
            );
    
            // Store the OTP in the session for verification
            Session::put('otp', $otp);
    
            // Redirect to the enter-otp route
            return redirect()->route('enter-otp')->with('success', 'OTP sent successfully to your WhatsApp number.');
        } catch (\Exception $e) {
            // Handle error cases
            return redirect()->back()->with('error', 'Failed to send OTP to your WhatsApp number.');
        }
    }
}


