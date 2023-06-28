<?php

namespace App\Http\Controllers;

class RestrictedController extends Controller
{
    public function index()
    {
        $loginStatus = session('login_status');
    
        if ($loginStatus) {
            // User is logged in
            // Display the restricted page content
            return view('restricted.page');
        } else {
            // User is not logged in
            // Set the flash message
            $message = 'Please log in to access this page';
            return view('auth.login')->with('error', $message);
        }
    }
}    
