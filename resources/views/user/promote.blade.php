@extends('user.layouts.app')
@section('meta_title','Student Registeration')
@include('user.includes.nav')


<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Promote Event</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
<div class="pro-container">
  <div class="pro">
    PROMOTE EVENT
  </div>
</div>



<div class="feedback-box">
    <a data-toggle="modal" data-target="#myModal" class="feedback-icon" title="Send Your Feedback">
        <img id="feedbackimg" title="Send Your Feedback" src="{{ asset('user/img/feedback.png') }}" alt="Feedback Icon" />
    </a>
</div>
</head>
</body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Your Feedback</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
      
                 <form action="{{ route('feedback.store') }}" name="feedback" id="feedback-form" method="post">

                     @csrf
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email Address *</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" name="message" id="comment" rows="5"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<style>
.modal-body {
  padding: 20px;
  background-color:#FFDAB9;
}
#footer{
    background-color: black !important;
  
       }
.form-group {
  margin-bottom: 20px;
}


.form-control {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
}

.btn-submit {
  padding: 10px 20px;
}


.btn-primary {
  background-color: #007BFF;
  border-color: #007BFF;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}
 .navbar .dropdown ul {
  background-color: #001180 !important;
  font-size: 4px !important;
}
.navbar a{
    font-size:15px !important;
}
@keyframes slide {
  0%, 100% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(100%);
  }
}
.pro {
    
    margin-bottom:200px;
  background-color: #c71370d8;
  color: white;
  text-align: center;
  font-family: fangsong;
  font-size: 24px;
  letter-spacing: 2px;
  transition: background-color 0.3s;
  width:500px;
  text-align: center;
  border-radius: 15px;
  cursor: pointer;
  animation: slide 5s linear infinite; 
}


#header {
  height: 60px !important;
  z-index: 997;
  transition: all 0.5s;
  background-color: #001180 !important;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
}


        li.dropdown ul {
  background-color: #001180;
}

.feedback-box {
    position: fixed;
   
    margin-top:-170px;
    right: 20px; 
    z-index: 9999; 
}

.custom-close-button {
 
    color: white;
    border: none;
    font-size: 1.5rem;
    padding: 0.25rem 0.5rem;
    opacity: 1;
}

.feedback-icon img:hover {
    transform: scale(1.1);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
}
@media (max-width: 767px) {
  .pro {
    width: auto;
    font-size: 18px;
    margin-bottom: 200px;
    margin-right: 0;
    animation: none; 
  }

  .feedback-box {
    position: fixed;
    margin-top: -160px;
    right: 20px;
    z-index: 9999;
  }
}
</style>
@include('user.includes.footer')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@if(session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success!</h5>
                  <button type="button" class="close custom-close-button" data-dismiss="modal" aria-label="Close">
                   
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ session('success') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearSessionAndCloseModal()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });

        function clearSessionAndCloseModal() {
         
            @php session()->forget('success') @endphp;
            
            $('#successModal').modal('hide');
        }
    </script>
@endif