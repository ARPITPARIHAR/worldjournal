<?php

namespace App\Http\Controllers;

use App\Models\CfpData;
use Illuminate\Http\Request;

class SearchController extends Controller
{
public function search(Request $request)
{
    $cfptype = $request->input('cfptype');
    $category = $request->input('category');
    $country = $request->input('country');
    $search = $request->input('query');
  
    $data = CfpData::query();

    if ($cfptype) {
        $data->where('cfp_type', $cfptype);
    }

    if ($category) {
        $data->where(function ($query) use ($category) {
            $query->where('category', $category);
        });
    }

    if ($country) {
        $data->where(function ($query) use ($country) {
            $query->where('country', $country);
        });
    }

    if ($search) {
        $data->where(function ($query) use ($search) {
            $query->where('publisher_name', 'like', "%{$search}%")
                ->orWhere('issn', 'like', "%{$search}%")
                ->orWhere('journal_title', 'like', "%{$search}%");
        });
    }

    // Debugging statement
    // dd($data->toSql(), $data->getBindings());

    $data = $data->paginate(5);

    return view('user.search')->with('data', $data);
}
}

    



            // if($request->has('country')){
            //     $country=$request->has('country');
            //     $data->where(function($query) use($country) {
            //         $query->where('publisher_address', 'LIKE', "%{$country}%" );
            //             //   ->Where ('country', 'LIKE', "%{$filter}%" );
            //     //         // ->orWhere ( 'show_focus_id', 'LIKE', "%{$request->search}%" )
            //     //         // ->orWhere ( 'show_name', 'LIKE', "%{$request->search}%" );
            //      });
            // } 
            // if($request->has('cfptype')){
            //     $cfptype=$request->has('cfptype');
            //     $data->where(function($query) use($cfptype) {
            //         $query->where('cfptype_id', 'LIKE', "%{$cfptype}%" );
            //             //   ->Where ('country', 'LIKE', "%{$filter}%" );
            //     //         // ->orWhere ( 'show_focus_id', 'LIKE', "%{$request->search}%" )
            //     //         // ->orWhere ( 'show_name', 'LIKE', "%{$request->search}%" );
            //      });
            // }
