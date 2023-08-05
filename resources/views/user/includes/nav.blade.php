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
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  
  

</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <style>
    .navbar .dropdown ul {
  background-color: #001180 !important;
  font-size: 4px !important;
}
.navbar a{
    font-size:13px !important;
}
    
      #header {
        height: 60px;
        z-index: 997;
        transition: all 0.5s;
        background: #001180;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);}

        li.dropdown ul {
  background-color: #001180;
}
      
    </style>
    <div class="container d-flex justify-content-between">
      <a href="/" class="logo">
        <img src="{{ asset('user/img/101.jpg') }}" alt="Logo" class="img-fluid" id="logo">
      </a>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="nav-link scrollto">Home</a></li>
          <li><a class="/about" href="about">About</a></li>
          <li><a class="/contact" href="contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="#team">Promote Event</a></li>
          <li><a class="nav-link scrollto" href="#team">FAQs</a></li>
          <li class="dropdown" >
            <a href="#"><span>Call for paper</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Journal</a></li>
              <li><a href="#">Conference</a></li>
            </ul>
          </li>
          <li class="dropdown" >
            <a href="#"><span>Manage CFP</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/postcfp">Post a CFP</a></li>
              <li><a href="/mycfp">My CFP List</a></li>
              <li><a href="#">My Favourite List</a></li>
              {{-- <li><a href="#">News Alert List</a></li> --}}
              <li><a href="#">CFPs Alert List</a></li>
              {{-- <li><a href="#">Promote Event</a></li> --}}
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="logins">Login</a></li>
          <li><a class="nav-link scrollto" href="registration">Register</a></li>
          <li><a class="nav-link scrollto" href="logout">LogOut</a></li>
        </ul>
       
      </nav><!-- .navbar -->
    </div>
    <div class="hamburger-menu">
    <div class="hamburger-icon">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>

    <ul class="menu-items">
      <div class="close-button">
        <i class="fas fa-times"></i>
      </div>
      <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="/about"><i class="fas fa-info-circle"></i> About</a></li>
      <li><a href="/contact"><i class="fas fa-envelope"></i> Contact Us</a></li>
      <li><a href="#"><i class="fas fa-user"></i> Promote Event</a></li>
      <li><a href="#"><i class="fas fa-question-circle"></i> FAQs</a></li>
      <li class="dropdown">
        <a href="#"><span>Call for paper</span> <i class="bi bi-chevron-down"></i></a>
        <ul class="sub-menu">
          <li><a href="#"><i class="fas fa-newspaper"></i> Journal</a></li>
          <li><a href="#"><i class="fas fa-users"></i> Conference</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#"><span>Manage CFP</span> <i class="bi bi-chevron-down"></i></a>
        <ul class="sub-menu">
          <li><a href="/postcfp"><i class="fas fa-upload"></i> Post a CFP</a></li>
          <li><a href="/mycfp"><i class="fas fa-list"></i> My CFP List</a></li>
          <li><a href="#"><i class="fas fa-star"></i> My Favourite List</a></li>
          <li><a href="#"><i class="fas fa-bell"></i> CFPs Alert List</a></li>
        </ul>
      </li>
      <li><a href="logins"><i class="fas fa-sign-in-alt"></i> Login</a></li>
      <li><a href="registration"><i class="fas fa-user-plus"></i> Register</a></li>
      <li><a href="logout"><i class="fas fa-sign-out-alt"></i> LogOut</a></li>
    </ul>
  </div>

  </header>
</body>

</html>

<!-- #he


   ======= Footer ======= -->
 
  




  
 
 


    <style>
      .logo {
        display: flex;
        align-items: center;
      }
    
      .logo img {
        width: 100px; 
        height: auto; 
      }
        
     
#logo {
  position: absolute;
  top: 20px; 
  left: 20px; 
}
.hamburger-menu {
            display: none;
        }

        .hamburger-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center; 
            width: 40px;
            height: 40px;
            cursor: pointer;
            margin: 25px;
            position: relative;
             z-index: 9999; 
             background-color:#800000;
        }

        .line {
            width: 100%;
            height: 3px;
            background-color:white;
        }

       
        .hamburger-icon:before,
        .hamburger-icon:after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        .hamburger-icon.active:before {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger-icon.active:after {
            transform: translateY(-8px) rotate(-45deg);
        }

        .menu-items {
            display: none;
        }

        .hamburger-menu.active .menu-items {
            display: block;
        }

        .menu-items {
            list-style: none;
            margin: 0;
            padding: 20px;
            background-color:#8FBC8F;
            z-index:10000;
        }

        .menu-items li {
            margin: 10px 0;
        }

        .menu-items li a {
            color:pink;
            text-decoration: none;
            font-size: 18px;
            display: block;
        }

        .menu-items li a:hover {
            background-color: #336699;
            border-radius: 5px;
        }

      .close-button {
            display: none;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            width: 30px;
            height: 30px;
            background-color: #1E90FF;
            position: absolute;
            top: 15px;
            right: 15px;
            border-radius: 50%;
            margin-left:35px;
        }

        .close-button i {
            color: white;
            font-size: 20px;
        }
        ul ul {
  display: none;
}


li.dropdown > a {
  cursor: pointer;
}


li.dropdown > a i {
  margin-left: 5px;
}
.dropdown-menu {
    display: none;
    position: absolute;
    top: 0;
    right: 100%; 
    background-color:black;
    z-index: 1000;
  }

  .dropdown-menu.active {
    display: block;
    
  }
  .secondary-dropdown {
    display: none;
    position: absolute;
    top: 0;
    right: 100%; 
    background-color: green;
    z-index: 1000;
  }

  .secondary-dropdown.active {
    display: block;
     background-color: green;
  } 
  .sub-menu {
      display: none;
      position: absolute;
      top: 0;
      right:80%;
     background-color:#191970 !important;
      z-index: 1000;
    }

  
    .sub-menu.active {
      display: block;
   
    }
    ul.menu .sub-menu {
  display: none;
  position: absolute;
  top: 0;
  right: 80%;
 background-color:#191970 !important;  
  z-index: 1000;
}
   

  
  
        @media (max-width: 768px) {
            .hamburger-menu {
                display: block;
            }
    
 .sub-menu {
      display: none;
      position: absolute;
      top: 0;
      right:80%;
      background-color:black;
      z-index: 1000;
    }

            .mobile-menu-toggle {
                position: fixed;
                top: 1px;
                right: 1px;
                z-index: 9999;
            }
.dropdown-menu {
    display: none;
    position: absolute;
    top: 0;
    right: 100%; 
    background-color:black;
    z-index: 1000;
  }
            .menu-items {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                width: 50%;
                background-color:#191970;
                padding: 20px;
                z-index: 9998;
                display: none;
                height:auto;
            }

            .menu-items.active {
                display: block;
            }

            .menu-items li {
                margin: 10px 0;
            }

            .menu-items li a {
                color: #fff; 
                text-decoration: none;
                font-size: 18px;
                display: block;
                padding: 5px;
            }

            .menu-items li a:hover {
                background-color: #336699;
                border-radius: 5px;
            }

            

            .container-home {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .logo-home img {
                /*width: 90px;*/
                margin-left: -440px;
                margin-top: 35px;
            }

            .links-home {
                margin-top: -30px;
                margin-left: 280px;
            }

            .links-home a {
                margin-top: 0;
            }

            .hamburger-menu.active .hamburger-icon {
                display: none;
            }

            .hamburger-menu.active .close-button {
                display: flex;
            }
            li.dropdown > a i {
    float: right;
  }
        }

   
        


    </style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function() {
      // Dropdown click event handler
      $(document).on("click", ".dropdown > a", function(e) {
        e.preventDefault();
        var dropdown = $(this).next("ul");
        var isActive = dropdown.hasClass('active');

        $("ul.sub-menu").not(dropdown).slideUp().removeClass('active');

       
        dropdown.toggleClass('active').slideToggle();

        
        $('.hamburger-menu').removeClass('active');
        $('.menu-items').removeClass('active');
      });

  
      $(document).on("click", ".sub-menu li a", function(e) {
        e.stopPropagation();
        $(".sub-menu").slideUp().removeClass('active');

        $('.hamburger-menu').removeClass('active');
        $('.menu-items').removeClass('active');
      });


      $(document).on("click", '.hamburger-menu', function() {
        $(this).toggleClass('active');
        $('.menu-items').toggleClass('active');
      });

 
      $(document).on("click", function(e) {
        var target = $(e.target);
        if (!target.closest('.hamburger-menu').length && !target.closest('.menu-items').length) {
          $('.hamburger-menu').removeClass('active');
          $('.menu-items').removeClass('active');
        }
      });
    });
  </script>
</body>
</html>






