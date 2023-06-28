<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {
       $request->validate([
        'email' => ['required','email'],
        'password' => 'required|min:6'
       ]);

       if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            $user=Auth::user();
            if($user->user_type=='Admin'){
                return redirect()->route('admin.dashboard');
            } elseif ($user->user_type=='Student') {
                return redirect()->route('home');
            }            
        } else {
            return back()->with('error','Invalid Login');
        }

    }
}
