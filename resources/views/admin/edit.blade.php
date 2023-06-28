@extends('admin.layouts.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
              @if (session('success'))
                  <h3 class="card-title test-success"> {{session('success')}}</h3>
              @elseif(session('error'))
                  <h3 class="card-title test-info">{{session('error')}}</h3>
              @else
                  <h3 class="card-title">Setting update</h3>
              @endif     
          </div> 
          <div class="card-body">
              <form action="{{route('admin.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="" class="form-label">Sitename</label>
                        <input type="text" name="site_name" class="form-control" value="{{old('site_name') ?? $setting->site_name}}" placeholder="Enter Site Name">
                        @error('site_name')
                          <div  class="tex-danger">{{$message}}</div>
                        @enderror
                      </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="" class="form-label">Email</label>
                      <input type="text" name="email" class="form-control" value="{{old('email') ?? $setting->email}}" placeholder="Enter email">
                      @error('email')
                        <div  class="tex-danger">{{$message}}</div>
                      @enderror
                    </div>
                  </div>
                  
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="" class="form-label">Phone</label>
                      <input type="text" name="phone" class="form-control" value="{{old('phone') ?? $setting->phone}}" placeholder="Enter mobile nu">
                      @error('phone')
                        <div  class="tex-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="col-md-12 col-12">
                      <div class="form-group">
                        <label for="" class="form-label">Address</label>
                        <textarea name="address" id=""  rows="5" class="form-control" placeholder="Enter Addres">{{old('address') ?? $setting->address}}</textarea>
                      </div>
                    </div>
                  <div class="col-md-6 col-12">
                    <img src="{{asset('uploads/business/'.$setting->logo)}}" alt="" width="100">
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="" class="form-label">logo</label>
                      <input type="file" name="logo" class="form-control" value="{{old('logo') ?? $setting->lpgo}}" placeholder="Enter email">
                      @error('logo')
                        <div  class="tex-danger">{{$message}}</div>
                      @enderror                      
                    </div>
                  </div>
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </form>
           </div>
        </div>
    </div>
  </div>
@endsection