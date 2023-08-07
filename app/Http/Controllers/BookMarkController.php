<?php

namespace App\Http\Controllers;
use App\Models\BookMark;
use Illuminate\Http\Request;
use Carbon\Carbon; 

class BookMarkController extends Controller
{
    public function store(Request $request)
    {
        $data = new BookMark;
        
        $data->journal_title = $request->journal_title;
        $data->issn = $request->issn;
        $data->doi = $request->doi;
        $data->web = $request->web;
        $data->count = $request->count;
        $data->publication_language = $request->pul;
        $data->bookmark_date = Carbon::now(); 
        $data->save();

        $request->session()->flash('centerSuccess', 'Journal data has been submitted successfully!');

        return redirect()->back()->with('showSuccessModal', true);
    }

    public function show(){

    return view('user.myfavorite');
}
     
}
