<?php

namespace App\Http\Controllers;
use App\Models\JournalData;
use Illuminate\Http\Request;

class SearchcfpController extends Controller
{
    public function index(Request $request)
    {
        $issnQuery = $request->input('issn', '');
        $journalQuery = $request->input('journal', '');

        $data = JournalData::where(function ($query) use ($issnQuery, $journalQuery) {
            if (!empty($issnQuery)) {
                $query->where('issn', 'like', '%' . $issnQuery . '%');
            }
            
            if (!empty($journalQuery)) {
                $query->orWhere('journal_title', 'like', '%' . $journalQuery . '%');
            }
        })->get();

        return view('user.mycfp', compact('data'));
    }
}
