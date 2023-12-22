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
        $categoryQuery = $request->input('category', ''); 

        $data = Callforpaper::where(function ($query) use ($issnQuery, $journalQuery, $categoryQuery) {
            if (!empty($issnQuery) && empty($journalQuery)) {
                $query->where('issn', 'like', '%' . $issnQuery . '%');
            }
            elseif (empty($issnQuery) && !empty($journalQuery)) {
                $query->where('journal_title', 'like', '%' . $journalQuery . '%');
            }
            elseif (!empty($issnQuery) && !empty($journalQuery)) {
                $query->where('issn', 'like', '%' . $issnQuery . '%')
                      ->orWhere('journal_title', 'like', '%' . $journalQuery . '%');
            }
            
      
            if (!empty($categoryQuery)) {
                $query->orWhere('category', 'like', '%' . $categoryQuery . '%');
            }
        })->get();

        return view('user.mycfp', compact('data'));
    }
}
