<?php

namespace App\Http\Controllers;
use App\Models\Callforpaper;
use Illuminate\Http\Request;

class CallForPaperController extends Controller
{
    public function create()
    {
        return view('user.callforpaper.create');
    }

    public function store(Request $request)
    {
    $data=new Callforpaper;
    $data->journal_title=$request->journalTitle;
    $data->issn=$request->issnNumber;
    $data->submission_date=$request->Submissiondeadline;
    $data->notification_date=$request->Notificationdue;
    $data->final_version=$request->FinalVersiondue;
 
    $data->save();
    $request->session()->flash('centerSuccess', 'User detail has been submitted successfully!');

    return redirect()->back();
     }
     
    }