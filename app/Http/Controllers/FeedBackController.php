<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedback;



class FeedBackController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $data=new Feedback;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->subject=$request->subject;
    $data->message=$request->message;
    $data->save();
    return redirect('/');
}
}