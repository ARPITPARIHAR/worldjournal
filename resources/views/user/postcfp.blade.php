@extends('user.layouts.app')
@section('meta_title', 'login')
@section('content')

@include('user.includes.nav')
<div class="container my-5">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="contsec my-5">
        <form action="{{route('user.index')}}" method="post" class="needs-validation" novalidate>
          @csrf
          <div class="form-group">
            <label for="fullname">Full Title:</label>
            <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Enter Full Title" required>
            <div class="invalid-feedback">Please enter the Full Title.</div>
          </div>
          <div class="form-group">
            <label for="shortname">Short Title - Year:</label>
            <div class="input-group">
              <input name="shortname" type="text" class="form-control" id="shortname" placeholder="Enter Short Title" required>
              <div class="input-group-append">
                <span class="input-group-text">-</span>
              </div>
              <input name="year" type="text" class="form-control" id="year" placeholder="Enter Year" value="2023" required>
            </div>
            <div class="invalid-feedback">Please enter the Short Title and Year.</div>
            <small class="text-muted">For example: SIGIR - 2009</small>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Next</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@include('user.includes.footer')
@endsection
