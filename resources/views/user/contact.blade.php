
@extends('user.layouts.app')
@section('meta_title', 'login')
@section('content')

@include('user.includes.nav')
@section('content')
<section id="contact" class="contact" style="margin-top: 35px; background-color: #f2f2f2;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body" style="background-color: skyblue; color: white; border-radius: 10px;text-align:center;">
                        <h3>Our Address</h3>
                        <p>A108 Adam Street<br>New York, NY 535022<br>United States</p>
                        <h3>Email Us</h3>
                        <p>info@example.com</p>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



 @include('user.includes.footer')
                
 
@endsection
 