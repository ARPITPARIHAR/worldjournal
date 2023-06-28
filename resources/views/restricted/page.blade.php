@extends('user.layouts.app')
@section('meta_title',' Registeration')
@section('content')

@include('user.includes.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Restricted Page</div>

                    <div class="card-body">
                        <p>This is a restricted page accessible only to authenticated users.</p>
                        <p>You can customize the content and layout of this page as per your requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.includes.footer')
@endsection
@section('style')
    
@endsection
@section('script')
    
@endsection 
