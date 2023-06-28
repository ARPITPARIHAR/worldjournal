<?php

namespace App\Http\Controllers;
use Str;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::latest()->paginate(10);
        return view('admin.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Slider;
    if($request->hasFile('photo')) {
        $file = $request->file('photo');
        $file_name = Str::random(5).time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/slider/photos');
        $file->move($destinationPath, $file_name);
        $data->photo = $file_name;
        $data->title=$request->title;
    }
    $data->save();
    return back()->with('success','slider Save Successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $slider=slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=Slider::find($id);
        $data->title=$request->title;
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = Str::random(5).time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/slider/photos');
            $file->move($destinationPath, $file_name);
            $data->photo= $file_name;            
        }
            $data->update();
      return back()->with('success','Slider updated successfully');
      
    } 
        public function destroy($id)
    {
        Slider::find($id)->delete();
        return back()->with('success','Slider Delete Successfully');
    }                   
}

