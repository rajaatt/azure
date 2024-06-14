
        function validateLoginForm() {
            var userLogin = document.getElementById('userLogin').value;
            var passLogin = document.getElementById('passLogin').value;

            // Perform your validation here

            // Example validation: Check if fields are not empty
            if (userLogin.trim() === '' || passLogin.trim() === '') {
                alert('Username and password are required for login.');
                return false;
            }

            // Add more validation as needed

            // If validation passes, you can submit the form or perform further actions
            alert('Login successful!');
            return true;
        }

        function validateSignUpForm() {
            var userSignUp = document.getElementById('userSignUp').value;
            var passSignUp = document.getElementById('passSignUp').value;
            var passRepeat = document.getElementById('passRepeat').value;
            var emailSignUp = document.getElementById('emailSignUp').value;

            // Perform your validation here

            // Example validation: Check if fields are not empty
            if (userSignUp.trim() === '' || passSignUp.trim() === '' || passRepeat.trim() === '' || emailSignUp.trim() === '') {
                alert('All fields are required for sign up.');
                return false;
            }

            // Example validation: Check if passwords match
            if (passSignUp !== passRepeat) {
                alert('Passwords do not match.');
                return false;
            }

            // Add more validation as needed

            // If validation passes, you can submit the form or perform further actions
            alert('Sign up successful!');
            return true;
        }