@extends('user.layouts.app')
@section('meta_title', 'Send OTP')
@section('content')

@include('user.includes.nav')

<div class="container log" style="margin-top: 130px; margin-bottom: 70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: #f0f0f0; height: 40px;">Login with WhatsApp</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 80%; margin: 0 auto; text-align: center;">
                            <span>{{ session('success') }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 60%; margin: 0 auto; text-align: center;">
                            <span>{{ session('error') }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('login.whatsapp') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="phone_number">Enter your phone number:</label><br>
                            <br>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary center-btn">Send OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap and jQuery dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.center-btn {
    display: block;
    margin: 0 auto;
}

.close {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 18px;
    font-weight: 700;
    color: #000;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.close:hover {
    opacity: 1;
}

.alert {
    position: relative;
    padding-right: 35px;
}

.alert span {
    display: inline-block;
    max-width: 90%;
    margin-right: 5px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

</style>

@include('user.includes.footer')
@endsection

