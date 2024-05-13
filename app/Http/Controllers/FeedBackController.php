<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Session;


class FeedBackController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $data=new Feedback;
    $data->name=$request->name;
    $data->email=$request->email;
  
    $data->message=$request->message;
    $data->save();
    Session::flash( 'Thanks for your feedback!');
    return redirect('/');
}
}