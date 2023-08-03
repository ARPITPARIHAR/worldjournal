{{-- @extends('user.layouts.app')
@section('meta_title',' Registeration')
@section('content')

@include('user.includes.nav') --}}
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
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
 <div class="wrapper d-flex">
        <div class="sidebar">
            <div class="user-info">
                @if(Auth::check())
                    <span>Welcome, {{ Auth::user()->name }}</span>
                @endif
            </div>
      <ul>
        <li><a href="/dash"><i class="fas fa-home"></i>Journal pannel</a></li>
        <li><a href="/"><i class="fas fa-users"></i>Go to home</a></li>
        <li><a href="/contactus"><i class="fas fa-users"></i>Contact</a></li>
        <li><a href="/data"><i class="fas fa-users"></i>Add My Journal</a></li>
        <li><a href="/callforpaper"><i class="fas fa-users"></i>Call For Paper</a></li>
        {{-- <li class="notification1"><a href="#"><i class="fas fa-calendar-week"></i>Calendar</a><span class="number1">4</span></li> --}}
        {{-- <li class="notification2"><a href="#"><i class="far fa-envelope"></i>Documents</a><span class="number2">5</span></li> --}}
        {{-- <li><a href="#"><i class="fas fa-signal"></i>Reports</a></li> --}}
      </ul>
    </div>
   
  </div>


  
  <!-- Rest of your content here -->
  

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
    <div class="mobile-menu-toggle">
            <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
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
                <li><a href="/dash"><i class="fas fa-home"></i>Journal panel</a></li>
                <li><a href="/"><i class="fas fa-users"></i>Go to home</a></li>
                <li><a href="/contactus"><i class="fas fa-users"></i>Contact</a></li>
                <li><a href="/data"><i class="fas fa-users"></i>Add My Journal</a></li>
                <li><a href="/callforpaper"><i class="fas fa-users"></i>Call For Paper</a></li>
            </ul>
           
        </div>

<div class="mission-content">
    <h2>Our Mission:</h2>
    <p>
        Our mission is to empower researchers and academics by providing them with a user-friendly, comprehensive, and up-to-date database of journals and conferences. We strive to make the search for reputable, peer-reviewed publications and prestigious conferences easier, thus promoting the dissemination of groundbreaking research and fostering collaboration across diverse disciplines.
    </p>

    <h2>Why Choose World Journal's Alert?</h2>
    <ul>
        <li>Unrivalled Database: We pride ourselves on maintaining an extensive repository of scholarly journals and conferences indexed in world-leading databases such as Scopus, Clarivate, and more. Our platform ensures that researchers have access to a wealth of information from reputable sources to enhance their research endeavors.</li>
        <li>Scope-wise Indexing: We understand the importance of narrowing down your search to the most relevant publications and events. Hence, our platform offers scope-wise indexing, enabling users to find journals and conferences that align precisely with their research interests.</li>
        <li>User-Friendly Interface: Our website boasts a seamless, user-friendly interface that enables swift navigation and easy exploration of the vast array of indexed journals and conferences. Whether you are an experienced researcher or a curious student, finding the information you need has never been simpler.</li>
        <li>Stay Informed: World Journal's Alert keeps you updated with the latest developments in your field of interest. We offer regular alerts and notifications about upcoming conferences, new journal publications, and relevant research, helping you stay ahead in your academic journey.</li>
        <li>Trusted Source: With a strong focus on quality and reliability, our platform only indexes journals and conferences from reputable sources. This dedication ensures that you have access to authoritative and influential content for your academic pursuits.</li>
        <li>Seamless Integration: World Journal's Alert provides seamless integration with popular reference management tools, making it effortless for you to organize, cite, and manage your research materials efficiently.</li>
    </ul>

    <h2>Join Us Today:</h2>
    <p>
        Whether you are an aspiring researcher, an established academic, or a curious mind eager to explore the frontiers of knowledge, World Journal's Alert welcomes you to join our ever-growing community. Unleash the power of cutting-edge research, access prestigious conferences, and open the doors to endless possibilities in your chosen field.
    </p>
    <p>
        Stay connected with World Journal's Alert to enrich your academic journey and make your mark in the realm of knowledge. Let us be your guiding light to success and innovation.
    </p>
</div>
<style>
    .body{
	background: #eee;
}
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
    background:#1E90FF;
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

.mission-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.mission-content h2 {
    color: #336699;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.mission-content p {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}

.mission-content ul {
    list-style-type: disc;
    padding-left: 30px;
    margin-top: 5px;
}

.mission-content li {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}


.mission-content h2:last-child {
    background-color: #f9f9f9;
    padding: 10px;
    margin-top: 30px;
    border-radius: 8px;
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
    
} .hamburger-menu {
            display: none;
        }

        .hamburger-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center; /* Center the box horizontally */
            width: 30px;
            height: 20px;
            cursor: pointer;
            margin: 15px;
            position: relative; /* To position the black box */
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        /* Style the black box */
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
            background-color: #1E90FF;
            z-index: 9998;
        }

        .menu-items li {
            margin: 10px 0;
        }

        .menu-items li a {
            color: #fff;
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

        @media (max-width: 768px) {
            .hamburger-menu {
                display: block;
            }

            .sidebar {
                display: none;
            }

            .mobile-menu-toggle {
                position: fixed;
                top: 1px;
                left: 1px;
                z-index: 9999;
            }

            .menu-items {
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                width: 30%;
                background-color: #1E90FF;
                padding: 20px;
                z-index: 9998;
                display: none;
            }

            .menu-items.active {
                display: block;
            }

            .menu-items li {
                margin: 10px 0;
            }

            .menu-items li a {
                color: #fff; /* Font color for the menu items */
                text-decoration: none;
                font-size: 18px;
                display: block;
                padding: 5px;
            }

            .menu-items li a:hover {
                background-color: #336699;
                border-radius: 5px;
            }

            .mission-content {
                font-size: 14px;
                line-height: 1.5;
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
        }

   
        

          </style>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.hamburger-menu').click(function() {
        $(this).toggleClass('active');
        $('.menu-items').toggleClass('active');
      });
      
    });
  </script>
  </body>
</html>