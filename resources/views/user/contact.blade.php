@extends('user.layouts.app')
@section('meta_title', 'login')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>World Journals Alert</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome.css">
  <!-- Custom CSS -->
  
  
  

</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <style>
      #header {
        height: 80px;
        z-index: 997;
        transition: all 0.5s;
        background: #001180;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
      }
      #header {
    background-color: #001180;
  }
      .logo {
    margin: 0px;
    padding: 0;
  }
    </style>
    <div class="container d-flex justify-content-between">
      <a href="/" class="logo">
        <img src="{{ asset('user/img/101.jpg') }}" alt="Logo" class="img-fluid" id="logo">
      </a>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="nav-link scrollto">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="#team">Promote Event</a></li>
          <li><a class="nav-link scrollto" href="#team">FAQs</a></li>
          <li class="dropdown">
            <a href="#"><span>Call for paper</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Journal</a></li>
              <li><a href="#">Conference</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>Manage CFP</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/postcfp">Post a CFP</a></li>
              <li><a href="#">My CFP List</a></li>
              <li><a href="#">My Favourite List</a></li>
              <li><a href="#">News Alert List</a></li>
              <li><a href="#">CFPs Alert List</a></li>
              <li><a href="#">Promote Event</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="logins">Login</a></li>
          <li><a class="nav-link scrollto" href="registration">Register</a></li>
          <li><a class="nav-link scrollto" href="logout">LogOut</a></li>
        </ul>
        <div class="mobile-menu-toggle">
          <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
        </div>
      </nav><!-- .navbar -->
    </div>
  </header>
@section('content')


<section id="contact" class="contact" style="margin-top: 35px; background-color: white;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body" style="background-color: #001180; color: white; border-radius: 10px;text-align:center;">
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
 