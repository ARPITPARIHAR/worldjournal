<!DOCTYPE html>
<html ng-app="application">
<head>
    <base href="/representative/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Call for Paper Form</title>

    <!-- Add the Bootstrap CSS files -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/datepicker@0.6.5/dist/datepicker.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper d-flex">
        <div class="sidebar">
            <div class="user-info">
                @if(Auth::check())
                    <span>Welcome, {{ Auth::user()->name }}</span>
                @endif
            </div>
            <ul>
                <a href="/dash">
                    <li><i class="fas fa-home"></i>Journal panel</li>
                </a>
                <a href="/">
                    <li><i class="fas fa-users"></i>Go to home</li>
                </a>
              
                <a href="/data">
                    <li><i class="fas fa-users"></i>Add My Journal</li>
                </a>
                <a href="/callforpaper">
                    <li><i class="fas fa-users"></i>Call For Paper</li>
                </a>
            </ul>
        </div>
    </div>
    

        <div class="container-home">
            <div class="logo-home">
                <img src="{{asset('user/img/101.jpg')}}" alt="Logo" class="logo" width="150px">
            </div>
            <div class="logout-container">
                <a href="/logout" class="btn btn-info">Logout</a>
            </div>
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
              
                <li><a href="/data"><i class="fas fa-users"></i>Add My Journal</a></li>
                <li><a href="/callforpaper"><i class="fas fa-users"></i>Call For Paper</a></li>
            </ul>
           
        </div>
     <div class="center-container d-flex justify-content-center align-items-center"> 
        <div class="callforpapercontainer">
            <h2 class="text-center">Call for Paper Submission</h2>
            <form method="POST" action="{{ route('call-for-paper.submit') }}">
                @csrf
                <div class="form-group">
                    <label for="journalTitle">Journal Title</label>
                    <input type="text" name="journalTitle" id="journalTitle" class="form-control" placeholder="Enter Journal Title" required>
                </div>
                <div class="form-group">
                    <label for="issnNumber">ISSN Number</label>
                    <input type="text" name="issnNumber" id="issnNumber" class="form-control" placeholder="Enter ISSN Number" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" name="category" id="category" class="form-control" placeholder="Enter category" required>
                </div>
                <div class="form-group">
                    <label for="submissionDeadline">Submission Deadline</label>
                    <input type="date" name="submissionDeadline" id="submissionDeadline" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="notificationDue">Notification Due</label>
                    <input type="date" name="notificationDue" id="notificationDue" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="finalVersionDue">Final Version Due</label>
                    <input type="date" name="finalVersionDue" id="finalVersionDue" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">other</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder=""></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @if(session('centerSuccess'))
                <div class="success-message">
                    <span class="closing-button" onclick="closeSuccessMessage()">&times;</span>
                    <p>{{ session('centerSuccess') }}</p>
                </div>
            @endif
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datepicker@0.6.5/dist/datepicker.min.js"></script>

    
</body>
</html>




<style>
body {

    align-items: center;

    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    background-color:#fd5f00!important;
}


.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul a {
    text-decoration: none;
    color: black;
}

.sidebar ul a:hover {
    text-decoration: none;
   background-color: rgb(239, 83, 83);
}

.sidebar ul li:hover {
    border-bottom: none;
}




.container-home {
    display: flex;
    align-items: center;
    background-color: midnightblue;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    width:100%;
   
    margin-left: 0px;
    border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
   border-bottom-left-radius: 15px;
   align-items: center;
   
    justify-content: flex-start;

}




.logout-container {
    position: absolute;
     right: 10px;
}


.links-home {
    flex: 0 0 auto; 
}


.links-home a {
    color: white;
    margin-top: 20px;
    
}
.logo-home {
    margin-left:5px;
}
.success-message {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #66139a;
        color: white;
        padding: 20px;
        text-align: center;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        max-width: 300px; /* Add a maximum width to limit the size of the success message */
    }

    .closing-button {
        position: absolute;
        top: 5px; 
        right: 5px; 
        font-size: 20px;
        cursor: pointer;
    }

    .callforpapercontainer {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 900px;
    margin-left: 200px;
    margin-right: 200px; /* Set right margin to match left margin */
}


h2 {
    margin-bottom: 20px;
    color: #007bff;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: 700;
    color: #333;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.submit-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.submit-button:hover {
    background-color: #0056b3;
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
        background-color: white;
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


.body {
        background-color: #a4b729;
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
  margin: 15px;
  position: relative; 
}

.line {
  width: 100%;
  height: 4px; 
  background-color:white;
  border-radius: 2px;
  transition: all 0.3s ease; 
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
   

.logo-home {
    flex: 0 0 auto; /* Don't grow or shrink */
}

.links-home {
    flex: 0 0 auto; /* Don't grow or shrink */
}


            .hamburger-menu.active .hamburger-icon {
                display: none;
            }

            .hamburger-menu.active .close-button {
                display: flex;
            }
             .callforpapercontainer {
            width:auto; 
            margin-left:0px;
        }

      
        .callforpapercontainer h2 {
            font-size: 24px;
        }

        .callforpapercontainer .form-group label {
            font-size: 14px;
        }

        .callforpapercontainer .form-group input,
        .callforpapercontainer .form-group textarea {
            font-size: 14px;
        }

        .callforpapercontainer .form-group select {
            font-size: 14px;
        }

        .callforpapercontainer .text-center button {
            font-size: 16px;
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
  <script>
function closeSuccessMessage() {
    var successMessage = document.querySelector('.success-message');
    successMessage.style.display = 'none';
}
</script>