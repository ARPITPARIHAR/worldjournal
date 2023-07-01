<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="otp">Enter OTP:</label>
        <input type="text" name="otp" id="otp" class="form-control" placeholder="OTP" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
