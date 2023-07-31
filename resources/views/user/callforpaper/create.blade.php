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
                <li><a href="/dash"><i class="fas fa-home"></i>Journal panel</a></li>
                <li><a href="/"><i class="fas fa-users"></i>Go to home</a></li>
                <li><a href="/contactus"><i class="fas fa-users"></i>Contact</a></li>
                <li><a href="/data"><i class="fas fa-users"></i>Add My Journal</a></li>
                <li><a href="/callforpaper"><i class="fas fa-users"></i>Call For Paper</a></li>
            </ul>
        </div>
        <!-- Rest of your content here -->
        <div class="container-home">
            <div class="logo-home">
                <img src="{{asset('user/img/101.jpg')}}" alt="Logo" class="logo" width="150px">
            </div>
            <div class="links-home">
                <a href="/logout" class="btn btn-info">Logout</a>
            </div>
        </div>
    </div>
    {{-- <div class="center-container d-flex justify-content-center align-items-center"> --}}
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
                    <span class="close-button" onclick="closeSuccessMessage()">&times;</span>
                    <p>{{ session('centerSuccess') }}</p>
                </div>
            @endif
        </div>
    </div>
    
    <!-- Add the Bootstrap JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datepicker@0.6.5/dist/datepicker.min.js"></script>

    <script>
        function closeSuccessMessage() {
            var successMessage = document.querySelector('.success-message');
            successMessage.style.display = 'none';
        }
    </script>
</body>
</html>




<style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    background-image: url('/user/img/cfp.jpg');
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

    .close-button {
        position: absolute;
        top: 5px; /* Adjust the top position to separate the close button from the success message */
        right: 5px; /* Adjust the right position to separate the close button from the success message */
        font-size: 20px;
        cursor: pointer;
    }
.callforpapercontainer {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width:800px;
    margin-left: 350px;
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
<script>
function closeSuccessMessage() {
    var successMessage = document.querySelector('.success-message');
    successMessage.style.display = 'none';
}
</script>