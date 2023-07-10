<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Register;
use Illuminate\Support\Facades\Session;

use Laravel\Socialite\Facades\Socialite;


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
       dd($user);
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
    
        // Your Meta API credentials or access token
        $token = getenv('META_API_TOKEN');
        $metaPhoneNumber = getenv('META_PHONE_NUMBER');
    
        // The phone number to send the WhatsApp message to
        $toPhoneNumber = $validatedData['phone_number'];
    
        // Generate OTP (replace this with your OTP generation logic)
        $otp = mt_rand(1000, 9999);
    
        // Make a request to the Meta API to send the WhatsApp message with the OTP
        $response = Http::post('https://meta-api.com/send-whatsapp', [
            'token' => $token,
            'to' => $toPhoneNumber,
            'from' => $metaPhoneNumber,
            'body' => 'Your OTP: ' . $otp
        ]);
    
        // Check the response from the Meta API and handle success or failure accordingly
        if ($response->successful()) {
            // Store the OTP in the session for verification
            Session::put('otp', $otp);
    
            // Redirect to the enter-otp route
            return redirect()->route('enter-otp')->with('success', 'OTP sent successfully to your WhatsApp number.');
        } else {
            // Handle error cases
            return redirect()->back()->with('error', 'Failed to send OTP to your WhatsApp number.');
        }
    }
    
}    