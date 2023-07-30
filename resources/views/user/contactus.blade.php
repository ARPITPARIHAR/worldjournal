<html ng-app="application">
<head>
    <base href="/representative/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Add the Bootstrap CSS file -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Add the Bootstrap JavaScript file (including the required dependencies) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- Add the Bootstrap Datepicker CSS and JavaScript files -->
<link href="https://cdn.jsdelivr.net/npm/datepicker@0.6.5/dist/datepicker.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/datepicker@0.6.5/dist/datepicker.min.js"></script>

<link rel="stylesheet" href="/path/to/styles.css">
   
 <div class="wrapper d-flex">
        <div class="sidebar">
            <div class="user-info">
                @if(Auth::check())
                    <span>Welcome, {{ Auth::user()->name }}</span>
                @endif
            </div>
      <ul>
        <li><a href="#"><i class="fas fa-home"></i>Journal pannel</a></li>
        <li><a href="/"><i class="fas fa-users"></i>Go to home</a></li>
        <li><a href="/contactus"><i class="fas fa-users"></i>Contact</a></li>
        <li><a href="/data"><i class="fas fa-users"></i>Add My Journal</a></li>
        {{-- <li class="notification1"><a href="#"><i class="fas fa-calendar-week"></i>Calendar</a><span class="number1">4</span></li> --}}
        {{-- <li class="notification2"><a href="#"><i class="far fa-envelope"></i>Documents</a><span class="number2">5</span></li> --}}
        {{-- <li><a href="#"><i class="fas fa-signal"></i>Reports</a></li> --}}
      </ul>
    </div>
    <!-- Rest of your content here -->
  </div>

  <div class="container-home">
    <div class="logo-home">
        <img src="{{asset('user/img/101.jpg')}}" alt="Logo" class="logo"width="150px">
    </div>
    <div class="links-home">
        <!--<a href="/" class="home-button" id="home-link">Go to Home</a>-->
    
        <a href="/logout" class="btn btn-info">Logout</a>
    </div>
    
</div>
</div>
<style>



.wrapper{
	position: relative;
} 
 .user-info {
            padding: 20px;
            text-align: center;
            font-size: 14px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
             font-family: 'Poppins', sans-serif;
            
        }

        .logo-home {
    margin-left:210px;
}
        .user-info span {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        .btn.btn-info {
        color: black;
    }
        .user-info span.name {
            font-size: 24px;
        }

   
        .user-info .welcome-icon {
            font-size: 32px;
            margin-bottom: 10px;
        }

.sidebar{
	position: fixed;
	width: 200px;
	height: 100%;
	background: #676a6c;
	left: 0; 

}
.sidebar li {
        list-style: none;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 8px;
        background-color: #f9f9f9;
    }

    .sidebar li a {
        text-decoration: none;
        color: #333;
    }

    .sidebar li a:hover {
        background-color: #336699;
        color: white;
    }
    h3 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #333;
    }

    p {
        font-size: 16px;
        margin-bottom: 15px;
        color:white;
    }

    .address-container {
        max-width: 400px;
        margin: 0 auto;
        text-align: center;
        color: white;
    }
    .contact-container{
        background-color: cornflowerblue;
    }
    .contact-info {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        background-color: palevioletred;
        
    }
    .container-home {
    display: flex;
    align-items: center;
    background-color: midnightblue;
    border: 2px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    width:auto;
    margin-left: px;
    border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
   border-bottom-left-radius: 15px;
   align-items: center;
   
    justify-content: flex-start;

}
.body {
        background-color: #a4b729;
    }


.links-home {
    display: flex;
    gap: 400px;
    align-items: center;
    color: #999;
    margin-left: 1050px;
}
.links-home a {
    color: white;
    margin-top: 20px;
    
}
</style>
<body>
<div class="contact container">
<div class="address-container">
    <div class="contact-info">
        <h3>Our Address</h3>
        <p>Y-18-A, Sudarshana Nagar<br>
            Bikaner (Rajasthan) 334003<br>INDIA</p>
    </div>

    <div class="contact-info">
        <h3>Email Us</h3>
        <p></p>
    </div>

    <div class="contact-info">
        <h3>Call Us</h3>
        <p></p>
    </div>
</div>
</div>
</body>