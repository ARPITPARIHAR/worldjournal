@extends('user.layouts.app')
@section('meta_title','journal')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>World Journals Alert</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
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
    </style>
    <div class="container d-flex justify-content-between">
<a href="/" class="logo" style="margin-top: 22px; margin-left: -90px;">
  <img src="{{ asset('user/img/101.jpg') }}" alt="Logo" class="img-fluid" id="logo" style="max-width: 100px; max-height: 80px;">
</a>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="nav-link scrollto">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="#team">Promote Event</a></li>
          <li><a class="nav-link scrollto" href="#team">FAQs</a></li>
          <li class="dropdown" >
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
</body>

</html>
@section('content')

<div class="ind-cont">
<div class="col-md-1 text-center" style="margin-top: 25px; margin-left: 10px;">
    @foreach ($data as $key => $item)
    <img src="{{ asset('Image/'.$item->image) }}" width="120px" height="80px"class="image-gap">
    @endforeach
</div>
  <div class="col-lg-8 col-md-6 text-left ici-info-box"  style="margin-left: 1px;">
    <dl class="dl-horizontal xnomb" style="font-size: 13px";>
       
      @foreach ($data as $key => $item)
      <dt class="ng-binding journal-title">Journal title:</dt>
      <dd>{{ $item->journal_title }}</dd>
      <dt class="ng-binding">ISSN:</dt>
      <dd>{{ $item->issn }}</dd>
      <dt class="ng-binding">DOI:</dt>
      <dd>{{ $item->doi }}</dd>
      <dt class="ng-binding">Website:</dt>
      <dd>{{ $item->website }}</dd>
      <dt class="ng-binding">Country:</dt>
      <dd>{{ $item->country }}</dd>
      <dt class="ng-binding">Publisher:</dt>
      <dd>{{ $item->publication_language }}</dd>
      @endforeach
      
    </dl>
  </div>
</div>
<div class="col-lg-8 col-md-6 text-left ici-info-box">
  {{-- <div class="tab-container"> --}}
    <div class="tab-header">
      <button class="tab-button" data-tab="tab1">Description</button>
      <button class="tab-button" data-tab="tab2">Details</button>
      <button class="tab-button" data-tab="tab3">Scientific profile</button>
      <button class="tab-button" data-tab="tab4">Publisher</button>
    </div>
  
    <div class="tab-content">
      <div id="tab1" class="tab-pane">
        <!-- Content for Tab 1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        @foreach ($data as $item)
        <dd>{{ $item->journal_description }}</dd>
        @endforeach
      </div>
    </div>
  
    <div class="tab-content">
      <div id="tab2" class="tab-pane">
        <table class="table table-bordered table-striped attractive-table">
          <thead>
            <tr>
              <th class="text-center">English sstitle</th>
              <th class="text-center">Short title</th>
              <th class="text-center">Printed version</th>
              <th class="text-center">Electronic version</th>
              <th class="text-center">Publication frequency</th>
              <th class="text-center">Free full text</th>
              <th class="text-center">Journal character</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            @if (is_object($item))
            <tr>
              <td class="text-center">{{ $item->english_title }}</td>
              <td class="text-center">{{ $item->short_title }}</td>
              <td class="text-center">{{ $item->printed_version ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->electronic_version ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->published_frequency }}</td>
              <td class="text-center">{{ $item->free_full_texts ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->journal_character ? 'Yes' : 'No' }}</td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
    <div class="tab-content">
      <div id="tab3" class="tab-pane">
        <table class="table table-bordered table-striped attractive-table">
          <thead>
            <tr>
              <th class="text-center">Scimago category</th>
              <th class="text-center">Web of science category</th>
              <th class="text-center">Indexed In</th>
              <th class="text-center">Circulation</th>
              <th class="text-center">Journal Type</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            @if (is_object($item))
            <tr>
              <td class="text-center">{{ $item->scimago_category }}</td>
              <td class="text-center">{{ $item->webofscience }}</td>
              <td class="text-center">{{ $item->indexing ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->circulation ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->circulation ? 'Yes' : 'No' }}</td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
    <div id="tab4" class="tab-pane">
      <dl>
        @foreach ($data as $item)
        @if (is_object($item))
        <dt>Publication Language:</dt>
        <dd>{{ $item->publication_language }}</dd>
        @endif
        @endforeach
      </dl>
    </div>
  </div>

 
 
  <style>
      #header {
  background-color: #001180!important;
}



.fixed-top {
    background-color:black;
}
.navbar{
margin-left: 260px;
     margin-top: 15px;
     
}
    .footer-name {
  font-size: 16px; 
}
   
    .ind-cont{
      margin-top:100px;
    }
    .attractive-header {
      font-family: "Your Desired Font", sans-serif;
      color: lightblue; 
    }
  
    .table-responsive table {
      border-collapse: collapse;
    }
  
    .table-responsive th,
    .table-responsive td {
      border: none;
      padding: 5px;
    }
  
    .table-responsive th {
      text-align: right;
      width: 150px;
    }
  
    .table-responsive td {
      margin-top: -70px;
    }
  
    .table-responsive tr {
      margin-bottom: -160px;
    }
  
    .table-responsive .image-cell {
      display: grid;
      align-items: center;
      justify-content: flex-start;
      gap: 10px;
    }
  
    .table-responsive .image-cell img {
      max-width: 100%;
      height: auto;
    }
  
    .tab-pane {
      display: none;
      font-size:13px;
    }
 

  
    .attractive-table {
      border-collapse: collapse;
      width: 900px;
    }
  
    .attractive-table thead th {
      background-color: powderblue;
      padding: 10px;
      text-align: left;
      font-weight: bold;
      color: #333;
    }
  
    .attractive-table tbody td {
      padding: 10px;
    }
  
   
  
   /
    .tab-container {
      border: 1px solid #ddd;
      background-color: olivedrab;
      padding: 10px;
      font-size:13px;
    }
  
    .tab-header {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .tab-button {
    padding: 10px 20px;
    background-color: purple;
    border: none;
    border-radius: 50px;
    margin-right: 10px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: Arial, sans-serif;
    color: white;
    background: linear-gradient(to right,teal,	#8FBC8F);
    font-size: 13px;
  }

  .tab-button.active {
    background-color: purple;
    color: #333;
    background: darkkhaki;
  }
  body {
    display: flex;
    flex-direction: column;
    /* min-height: 100vh; */
  }

  .content-wrapper {
    flex: 1;
  }

  .footer {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
    margin-top: auto;
  }
  
   
    .journal-title {
    color: blue;
    
  }
 
    .image-gap {
    margin-bottom:60px; 
  }
  .table-spacing {
    margin-bottom: 40px; 
  }

  </style>
   
    @section('script')
    <script>
      const tabButtons = document.querySelectorAll('.tab-button');
      const tabPanes = document.querySelectorAll('.tab-pane');
    
      tabButtons.forEach(button => {
        button.addEventListener('click', () => {
          const tabId = button.getAttribute('data-tab');
          const tabPane = document.getElementById(tabId);
    
          // Toggle the visibility of the clicked tab content
          tabPanes.forEach(pane => {
            if (pane === tabPane) {
              pane.style.display = 'block';
            } else {
              pane.style.display = 'none';
            }
          });
    
          // Toggle the active class on the clicked tab button
          tabButtons.forEach(btn => {
            if (btn === button) {
              btn.classList.add('active');
            } else {
              btn.classList.remove('active');
            }
          });
        });
      });
    </script> 
   @include('user.includes.footer')
  
     @endsection 