@extends('user.layouts.app')
@section('meta_title', 'Login')
@section('content')

@include('user.includes.nav')

<div class="container log" style="margin-top: 130px; margin-bottom: 70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header text-center" style="background-color: #f0f0f0; height:40px">Login</div>
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

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                               
                                <a class="btn btn-link" href="/re">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <p>Or login with:</p>
                        <a href="{{ route('login.provider', ['provider' => 'facebook']) }}" class="btn btn-primary">Login with Facebook</a>
                        <a href="{{ route('send.otp') }}" class="btn btn-success">Login with WhatsApp</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('user.includes.footer')
@endsection
