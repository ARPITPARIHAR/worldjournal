<?php
namespace App\Http\Controllers;


use App\Models\AddJournal;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

class AddJournalController extends Controller
{
    
        // public function countryList()
        // {
        //     $data = AddJournal::all();
        //     $data = AddJournal::count();
        //     return view('user.includes.count', compact('data');
        // }
        // public function countryList()
        // {
        //     $countries = Country::all();
        //     $count = Country::count();
        //     return view('country-list', compact('countries', 'count'));
        // }
        
      public function create()
    {
        return view('user.addjournal.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data=new AddJournal;
    $data->email=$request->email;
    $data->password=$request->password;
    $data->repeat_password=$request->password2;
    $data->name=$request->name;
    $data->surname=$request->surname;
    $data->address=$request->address;
    $data->postal_code=$request->postalCode;
    $data->country=$request->country;
    $data->company=$request->company;
    $data->publisher_name=$request->publishername;
    $data->category=$request->category;
    $data->mobilenu=$request->mobilenu;
    $data->save();
    return back()->with('success',' Form Saved Successfully');
     }
     



};


