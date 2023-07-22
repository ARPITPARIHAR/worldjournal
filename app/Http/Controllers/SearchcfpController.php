<?php

namespace App\Http\Controllers;
use App\Models\JournalData;
use Illuminate\Http\Request;

class SearchcfpController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('category', 'journal','issn');

        // Perform the search query on your model
        $data = JournalData::where('issn', 'like', '%' . $query . '%')
                        //    ->orWhere('journal', 'like', '%' . $query . '%')
                        //    ->orWhere('category', 'like', '%' . $query . '%')
                           ->get();

        return view('user.mycfp', compact('data'));
    }
}
