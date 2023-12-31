@extends('user.layouts.app')
@section('meta_title', 'Login & Registration')
@section('content')

@include('user.includes.nav')

<div class="container log" style="margin-top: 130px; margin-bottom: 70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Login Section -->
            <div class="card">
                <div class="card-header text-center" style="background-color: #f0f0f0; height: 40px;">Login</div>
                <div class="card-body">
                    @if(session('error') || session('social_error'))
                        <div class="alert alert-danger">
                            {{ session('error') ?: session('social_error') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @auth()
                        {{ auth()->user()->name }}
                    @endauth
                    <form method="POST" action="{{ route('log.post') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password"><br>
                            </div>
                        </div>

                        <!-- ... Remember Me checkbox ... -->

                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                <a class="btn btn-link" href="/re">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        </div>
                    </form>

                    <!-- ... Login with Facebook and Login with WhatsApp buttons ... -->
                </div>
            </div>

            <!-- Registration Section -->
            <div class="card mt-4">
                <div class="card-header text-center" style="background-color: #f0f0f0; height: 40px;">Registration</div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" style="width: 50%; margin: 0 auto;height:50px;font-size: 14px; padding: 8px; background-color: #dff0d8; border-color: #d6e9c6; color: #3c763d;">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <br>
                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="new-name">
                                <br>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email"><br>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ... Password and Confirm Password fields ... -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add these CDN links in your HTML file -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@include('user.includes.footer')
@endsection

@section('style')

@endsection

@section('script')

@endsection
