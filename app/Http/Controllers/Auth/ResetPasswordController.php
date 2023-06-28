<?php

namespace App\Http\Controllers\Auth;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use ResetsPasswords;


class ResetPasswordController extends Controller
{
    public function showResetForm()
    {
        return view('auth.passwords.reset');
    }

 
   
 


   

    protected function reset(Request $request)
    {
        $user = Register::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        // Flash success message
        session()->flash('success', 'Your password has been reset successfully.');

        Auth::login($user);

        return redirect()->route('login');
    }
}
