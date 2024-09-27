$(document).ready(function() {
    // Populate form fields with stored values on page load
    $('#firstName').val(localStorage.getItem('firstName') || '');
    $('#lastName').val(localStorage.getItem('lastName') || '');
    $('#email').val(localStorage.getItem('email') || '');

    // Function to update localStorage
    function updateLocalStorage() {
        localStorage.setItem('firstName', $('#firstName').val());
        localStorage.setItem('lastName', $('#lastName').val());
        localStorage.setItem('email', $('#email').val());
    }

    // Update localStorage on input change
    $('#signupForm input').on('input', updateLocalStorage);

    $('#signupBtn').click(function(e) {
        e.preventDefault();

        // Check if all inputs are filled
        const inputs = $('#signupForm').find('input');
        let allFilled = true;
        inputs.each(function() {
            if ($(this).val().trim() === '') {
                allFilled = false;
            }
        });

        if (allFilled) {
            const email = $('#email').val();
            if (email.includes('@umak.edu.ph')) {
                $.ajax({
                    url: '../models/check_email.php',
                    type: 'POST',
                    data: { email: email },
                    success: function(response) {
                        if (response === 'exists') {
                            alert('Email already exists. Please use a different email.');
                        } else {
                            $.ajax({
                                url: '../models/signup.php',
                                type: 'POST',
                                data: $('#signupForm').serialize(),
                                success: function(response) {
                                    if (response === 'success') {
                                        // Show verification modal
                                        // $('#verificationModal').removeClass('hidden').addClass('flex');
                                        
                                        // Clear localStorage
                                        localStorage.clear();
                                        //redirect to signin page
                                        alert('Signup successful');
                                        window.location.href = '../views/signin.php';
                                    } else {
                                        alert('Signup failed: Email already exists');
                                    }
                                }
                            });
                        }
                    }
                });
            } else {
                alert('Invalid email format. Please enter a valid UMAK email.');
            }
        } else {
            alert('Please fill all inputs');
        }
    });

    // Handle modal close button
    $('#closeModal').click(function() {
        $('#verificationModal').addClass('hidden').removeClass('flex');
    });

    // Handle verify button
    $('#verifyButton').click(function() {
        $.ajax({
            url: '../models/verify.php',
            type: 'POST',
            data: { otp: $('#verificationCode').val() },  // Make sure this matches your input field ID
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    $('#verificationModal').addClass('hidden').removeClass('flex');
                    // Redirect to signin page after verification
                    setTimeout(function() {
                        window.location.href = '../views/signin.php';
                    }, 1000); // Redirect after 1 second
                } else {
                    alert(response.message || 'Invalid verification code');
                }
            },
            error: function() {
                alert('An error occurred. Please try again.');
            }
        });
    });

    $('#togglePassword').click(function() {
        const passwordInput = $('#password');
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
        } else {
            passwordInput.attr('type', 'password');
        }
    });

    $('#toggleConfirmPassword').click(function() {
        const confirmPasswordInput = $('#confirmPassword');
        if (confirmPasswordInput.attr('type') === 'password') {
            confirmPasswordInput.attr('type', 'text');
        } else {
            confirmPasswordInput.attr('type', 'password');
        }
    });
});
