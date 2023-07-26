<?php
namespace App\Http\Controllers;
use App\Models\JournalData;
use Illuminate\Http\Request;

class SearchcfpController extends Controller
{
 
    public function index(Request $request)
    {
        $query = $request->input('issn','journal');
    
        $data = JournalData::where('issn', 'like', '%' . $query . '%')
                           ->orWhere('journal_title', 'like', '%' . $query . '%')
                           ->get();

        return view('user.mycfp', compact('data'));
    }
}    