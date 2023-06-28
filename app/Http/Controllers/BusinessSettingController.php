<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BusinessSetting;
use str;
// use App\Http\Controllers\BusinessSettingController;

class BusinessSettingController extends Controller
{
    public function edit(Request $request)
    {
        $setting=BusinessSetting::find(1);
       return view('admin.edit',compact('setting'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'logo' => 'nullable|mimes:png,jpg,jprg,svg',
            'address' => 'required|string',
        ]);
        $setting=BusinessSetting::find(1);
        $setting->site_name=$request->site_name;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file_name = Str::random(5).time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/business');
            $file->move($destinationPath, $file_name);
            $setting->logo = $file_name;
        }
        $setting->address=$request->address;
        $setting->update();
        return back()->with('success','Sucessfully updated');
    }
}



