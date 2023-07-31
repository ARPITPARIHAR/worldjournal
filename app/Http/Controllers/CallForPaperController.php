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
    $data->submission_date=$request->submissionDeadline;
    $data->notification_date=$request->notificationDue;
    $data->final_version=$request->finalVersionDue;
    $data->description=$request->description;
 
    $data->save();
    $request->session()->flash('centerSuccess', 'Details has been submitted successfully!');

    return redirect()->back();
     }
     
    }