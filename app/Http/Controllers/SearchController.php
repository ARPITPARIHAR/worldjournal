<?php
namespace App\Http\Controllers;
use App\Models\CfpData;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(Request $request){
        
        $search = $request->input('query');
        $data=CfpData::query();

        if ($request->query) {
            $data=$data->where('publisher_name', 'like', "%{$search}%")
            ->orWhere('issn', 'like', "%{$search}%")
            ->orWhere('journal_title', 'like', "%{$search}%");
                
        }
              


            $data =$data ->paginate(5);
               echo $data;        
     return view('user.search', compact('data'));
       
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
