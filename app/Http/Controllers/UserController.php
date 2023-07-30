<?php

namespace App\Http\Controllers;

// use App\Models\Service;
// use App\Models\Slider;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
         
        return view('user.home');
 
    }
    public function login()
    {
       return view('user.login');
    }
public function promote()
{
    return view('user.promote'); 
}

public function add()
{
    return view('user.adds'); 
}
public function search()
{
    return view('user.search'); 

}
public function contact()
{
    return view('user.contact'); 
}
public function about()
{
    return view('user.about'); 
}
public function dash()
{
    return view('user.journaldashboard'); 
}
public function contactus()
{
    return view('user.contactus'); 
}
}