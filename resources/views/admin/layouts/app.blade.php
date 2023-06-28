<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <title>::journals :: Project Dashboard</title>
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/plugins/charts-c3/c3.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/css/theme1.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style')
</head>
<body class="font-montserrat">
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>
    <div id="main_content">
        @include('admin.includes.top-navbar')
        @include('admin.includes.right-sidebar')        
        @include('admin.includes.user-bar')
        @include('admin.includes.left-sidebar')
        <div class="page">
            @yield('content')
        </div>
    </div>
<script src="{{asset('admin/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/counterup.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/knobjs.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('admin/js/core.js')}}"></script>
<script src="{{asset('admin/js/page/project-index.js')}}"></script>
@yield('script')
</body>
</html>


  