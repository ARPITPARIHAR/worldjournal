@extends('user.layouts.app')
@section('meta_title', 'contact')
@extends('user.includes.nav')
@section('content')
 <style>
      #header {
  background-color: #001180!important;
     height: 60px!important;
}
    </style>

<section id="contact" class="contact" style="margin-top: 35px; background-color: white;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body" style="background-color:purple; color: white; border-radius: 20px;text-align:center;">
                        <h3>Our Address</h3>
                        <p>Y-18-A,
                            Sudarshana Nagar<br>
                            Bikaner (Rajasthan)
                            334003<br>INDIA</p>
                        <h3>Email Us</h3>
                        <p>info@example.com</p>
                        <h3>Call Us</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



 @include('user.includes.footer')
                
 
@endsection
 