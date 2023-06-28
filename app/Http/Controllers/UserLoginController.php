<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Register;
use Illuminate\Support\Facades\Session;

class UserLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        

        $credentials = $request->only('email', 'password');
        // $remember = $request->filled('remember');

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
}
