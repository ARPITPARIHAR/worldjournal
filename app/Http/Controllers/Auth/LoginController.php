<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // Check if the user is attempting a social login
        if ($request->has('provider')) {
            // Redirect the user to the social media platform's authentication page
            return $this->redirectToProvider($request->input('provider'));
        }

        // Existing email/password login logic
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Successful login
            Session::flash('success', 'You have successfully logged in.');
            $intendedUrl = Session::pull('url.intended', '/postcfp');

            return redirect()->to($intendedUrl);
        } else {
            // Failed login
            return redirect("login")->with('error', 'Oops! You have entered invalid credentials.');
        }
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        // Perform actions with the retrieved user data
        // For example, create a new user or log in an existing user

        // Redirect the user to the desired location
        return redirect('/home');
    }
}
