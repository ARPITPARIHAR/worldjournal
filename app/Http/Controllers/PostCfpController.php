<?php

namespace App\Http\Controllers;

use App\Models\JournalData;
use Illuminate\Http\Request;


class PostCfpController extends Controller
{
   

    public function index(Request $request)
    {
        $query = $request->input('fullname', 'shortname');

        // Perform the search query on your model
        $data = JournalData::where('full_title', 'like', '%' . $query . '%')
                           ->orWhere('short_title', 'like', '%' . $query . '%')
                           ->get();

        return view('user.index', compact('data'));
    }

    public function create()
    {
        return view('user.postcfp');
    }

    public function mycfp()
    {
        return view('user.mycfp');
    }
}
