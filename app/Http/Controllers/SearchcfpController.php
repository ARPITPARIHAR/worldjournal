<?php

namespace App\Http\Controllers;
use App\Models\Callforpaper;
use Illuminate\Http\Request;
class SearchcfpController extends Controller
{

public function index(Request $request)
{
    $issnQuery = $request->input('issn', '');
    $journalQuery = $request->input('journal', '');

    $data = Callforpaper::where(function ($query) use ($issnQuery, $journalQuery) {
        if (empty($issnQuery) && empty($journalQuery)) {
            $query->where('issn', 'like', '%' . $issnQuery . '%');
        }
        elseif (empty($issnQuery) && !empty($journalQuery)) {
            $query->where('journal_title', 'like', '%' . $journalQuery . '%');
        } 
        elseif (!empty($issnQuery) && !empty($journalQuery)) {
            $query->where('issn', 'like', '%' . $issnQuery . '%')
                  ->orWhere('journal_title', 'like', '%' . $journalQuery . '%');
        }
    })->get();

    // dd($data, $request->all()); // Use dd() to display both $data and Request object.

    return view('user.mycfp', compact('data'));
}

}

