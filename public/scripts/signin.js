$(document).ready(function() {
    $('#signinBtn').click(function(e) {
        // e.preventDefault();
        const email = $('#email').val();
        const password = $('#password').val();

        $.ajax({
            url: '../models/signin.php',
            type: 'POST',
            data: { email: email, password: password },
            success: function(response) {
                if (response === 'success') {
                    window.location.href = '../index.php';
                } else {
                    alert('Invalid email or password:' + response);
                }
            }
        });
    });
    $('#signupBtn').click(function(e) {
        window.location.href = 'signup.php';
    });
});