<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR.LOGIN/SIGNUP</title>
    <link rel="stylesheet" href="../../css/signcss.css">
    <style>
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
    <script>
        function clearErrors() {
            var errorMessages = document.querySelectorAll('.error');
            errorMessages.forEach(function (error) {
                error.textContent = '';
            });
        }

        function validateLoginForm() {
            clearErrors();

            var userLogin = document.getElementById('user').value;
            var passLogin = document.getElementById('pass').value;
            var isValid = true;

            // Example validation: Check if fields are not empty
            if (userLogin.trim() === '') {
                document.getElementById('userError').textContent = 'Username is required.';
                isValid = false;
            }

            if (passLogin.trim() === '') {
                document.getElementById('passError').textContent = 'Password is required.';
                isValid = false;
            }

            // You can add more advanced validation here if needed

            // If validation passes, you can submit the form or perform further actions
            if (isValid) {
                // Your login logic here
                alert('Login successful!');
            }

            return isValid;
        }

        function validateSignUpForm() {
            clearErrors();

            var firstNameSignUp = document.getElementById('firstNameSignUp').value;
            var lastNameSignUp = document.getElementById('lastNameSignUp').value;
            var userSignUp = document.getElementById('userSignUp').value;
            var passSignUp = document.getElementById('passSignUp').value;
            var passRepeat = document.getElementById('passRepeat').value;
            var emailSignUp = document.getElementById('emailSignUp').value;
            var isValid = true;

            // Example validation: Check if fields are not empty
            if (firstNameSignUp.trim() === '') {
                document.getElementById('firstNameSignUpError').textContent = 'First Name is required.';
                isValid = false;
            }

            if (lastNameSignUp.trim() === '') {
                document.getElementById('lastNameSignUpError').textContent = 'Last Name is required.';
                isValid = false;
            }

            if (userSignUp.trim() === '') {
                document.getElementById('userSignUpError').textContent = 'Username is required.';
                isValid = false;
            }

            if (passSignUp.trim() === '') {
                document.getElementById('passSignUpError').textContent = 'Password is required.';
                isValid = false;
            }

            if (passRepeat.trim() === '') {
                document.getElementById('passRepeatError').textContent = 'Please repeat the password.';
                isValid = false;
            }

            if (emailSignUp.trim() === '') {
                document.getElementById('emailSignUpError').textContent = 'Email is required.';
                isValid = false;
            }

            // Example validation: Check if passwords match
            if (passSignUp !== passRepeat) {
                document.getElementById('passRepeatError').textContent = 'Passwords do not match.';
                isValid = false;
            }

            // Example validation: Check if the email is in a valid format
            var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailFormat.test(emailSignUp)) {
                document.getElementById('emailSignUpError').textContent = 'Enter a valid email address.';
                isValid = false;
            }

            // Example validation: Check if the password meets strong requirements
            var strongPasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            if (!strongPasswordRegex.test(passSignUp)) {
                document.getElementById('passSignUpError').textContent = 'Password must be at least 8 characters long and include at least one lowercase letter, one uppercase letter, one number, and one special character.';
                isValid = false;
            }

            // If validation passes, you can submit the form or perform further actions
            if (isValid) {
                // Your sign-up logic here
                alert('Sign up successful!');
            }

            return isValid;
        }

       
    </script>
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                            class="tab">Login</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                            class="tab">Sign Up</label>
                        <div class="login-space">
                            <!-- Login Form -->
                            <div class="login">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input" placeholder="Enter your username">
                                    <span id="userError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password"
                                        placeholder="Enter your password">
                                    <span id="passError" class="error"></span>
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign In"
                                        onclick="validateLoginForm()">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>

                            <!-- Sign Up Form -->
                            <div class="sign-up-form" id="signupForm">
                            <div class="sign-up-form">
                                <div class="group">
                                    <label for="firstNameSignUp" class="label">First Name</label>
                                    <input id="firstNameSignUp" type="text" class="input"
                                        placeholder="Enter your first name">
                                    <span id="firstNameSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="lastNameSignUp" class="label">Last Name</label>
                                    <input id="lastNameSignUp" type="text" class="input"
                                        placeholder="Enter your last name">
                                    <span id="lastNameSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="userSignUp" class="label">Username</label>
                                    <input id="userSignUp" type="text" class="input"
                                        placeholder="Create your Username">
                                    <span id="userSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="passSignUp" class="label">Password</label>
                                    <input id="passSignUp" type="password" class="input" data-type="password"
                                        placeholder="Create your password">
                                    <span id="passSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="passRepeat" class="label">Repeat Password</label>
                                    <input id="passRepeat" type="password" class="input" data-type="password"
                                        placeholder="Repeat your password">
                                    <span id="passRepeatError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="emailSignUp" class="label">Email Address</label>
                                    <input id="emailSignUp" type="text" class="input"
                                        placeholder="Enter your email address">
                                    <span id="emailSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up"
                                        onclick="validateSignUpForm(),submitSignUpForm()">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <label for="tab-1">Already Member?</label>
    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
