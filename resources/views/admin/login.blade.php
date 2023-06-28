<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: journal :: Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Core css -->
<link rel="stylesheet" href="{{asset('/admin/css/theme1.css')}}"/>
<link rel="stylesheet" href="{{asset('/admin/css/main.css')}}"/>

</head>
<body class="font-montserrat">

<div class="auth">
    <div class="auth_left">
        <form action="{{route('dashboard')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    @if(session('error'))
                       <span class="text-danger">{{session('error')}}</span> 
                    @endif
                </div>
                <div class="text-center mb-2">
                    <a class="header-brand" href="index-2.html"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
                </div>
                <div class="card-body">
                    <div class="card-title">Login to your account</div>               
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" />
                        <span class="custom-control-label">Remember me</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                </div>
                <div class="text-center text-muted">
                    Don't have account yet? <a href="register.html">Sign up</a>
                </div>
            </div>  
        </form>      
    </div>
    <div class="auth_right full_img"></div>
</div>

<script src="{{asset('journal/admin/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('journal/admin/js/core.js')}}"></script>
</body>


</html>
