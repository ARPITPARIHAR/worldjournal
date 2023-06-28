import axios from 'axios';

const form = document.getElementById('otpForm');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    const mobileNo = document.getElementById('mobile_no').value;

    axios
        .post('/otp/generate', { mobile_no: mobileNo })
        .then(response => {
            console.log(response.data);
            // Handle the response as needed
        })
        .catch(error => {
            console.error(error);
            // Handle errors if necessary
        });
});
