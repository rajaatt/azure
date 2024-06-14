$(document).ready(function () {
    $('#dp').datepicker({
        minDate: 0, // Prevent past dates
        dateFormat: 'yy-mm-dd' // Set date format as needed
    });

    // Validation for the form
    $('#bookAppointmentBtn').click(function (event) {
        event.preventDefault(); // Prevent form submission

        // Reset previous error messag
        $('.error-message').remove();
        $('.form-control').removeClass('is-invalid');

        // Validate form fields
        let isValid = true;

        // First Name validation
        let firstName = $('#firstName').val().trim();
        if (firstName === "") {
            isValid = false;
            $('#firstName').addClass('is-invalid');
            $('#firstName').after('<div class="error-message">First Name is required.</div>');
        } else if (!isValidName(firstName)) {
            isValid = false;
            $('#firstName').addClass('is-invalid');
            $('#firstName').after('<div class="error-message">Enter a valid First Name.</div>');
        }

        // Last Name validation
        let lastName = $('#lastName').val().trim();
        if (lastName === "") {
            isValid = false;
            $('#lastName').addClass('is-invalid');
            $('#lastName').after('<div class="error-message">Last Name is required.</div>');
        } else if (!isValidName(lastName)) {
            isValid = false;
            $('#lastName').addClass('is-invalid');
            $('#lastName').after('<div class="error-message">Enter a valid Last Name.</div>');
        }

        // Email validation
        let email = $('#email').val().trim();
        if (email === "") {
            isValid = false;
            $('#email').addClass('is-invalid');
            $('#email').after('<div class="error-message">Email Address is required.</div>');
        } else if (!isValidEmail(email)) {
            isValid = false;
            $('#email').addClass('is-invalid');
            $('#email').after('<div class="error-message">Enter a valid email address.</div>');
        }

        // Phone Number validation
        let phoneNumber = $('#phoneNumber').val().trim();
        if (phoneNumber === "") {
            isValid = false;
            $('#phoneNumber').addClass('is-invalid');
            $('#phoneNumber').after('<div class="error-message">Phone Number is required.</div>');
        } else if (!isValidPhoneNumber(phoneNumber)) {
            isValid = false;
            $('#phoneNumber').addClass('is-invalid');
            $('#phoneNumber').after('<div class="error-message">Enter a valid phone number.</div>');
        }

        // Booking Date validation
        let bookingDate = $('#dp').val().trim();
        if (bookingDate === "") {
            isValid = false;
            $('#dp').addClass('is-invalid');
            $('#dp').after('<div class="error-message">Booking Date is required.</div>');
        }

        // Message validation
        let message = $('#message').val().trim();
        if (message === "") {
            isValid = false;
            $('#message').addClass('is-invalid');
            $('#message').after('<div class="error-message">Message is required.</div>');
        }

        // If the form is valid, show success message and submit via AJAX
        if (isValid) {
            showSuccessMessage();

            // AJAX code
            $.ajax({
                url: "../Ajax/registerajax.php", // Replace with the actual URL of your server-side script
                type: "POST",
                data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    phoneNumber: phoneNumber,
                    bookingDate: bookingDate,
                    message: message,
                    // Add more data as needed
                },
                success: function (response) {
                    // Handle the response from the server
                    console.log(response);
                    if (response == 1) {
                      Toastify({
                        text: "Registered Successfully",
                        duration: 3000,
                        destination: "https://github.com/apvarun/toastify-js",
                        newWindow: true,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                          background: "linear-gradient(to right, #00b09b, #96c93d)",
                        }, // Callback after click
                      }).showToast();
          
                      
                      // window.location.href="cust_template.php"
                    } else {
                      Toastify({
                        text: "Register Failed",
                        duration: 3000,
                        destination: "https://github.com/apvarun/toastify-js",
                        newWindow: true,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                          background: "linear-gradient(to right, #00b09b, #96c93d)",
                        }, // Callback after click
                      }).showToast();
                    }
                  },
                  error: function (error) {
                    // Handle errors
                    console.error(error);
                  },
                });
        }
    });

    // Function to validate email
    function isValidEmail(email) {
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Function to validate phone number
    function isValidPhoneNumber(phoneNumber) {
        let phoneRegex = /^\d{10}$/;
        return phoneRegex.test(phoneNumber);
    }

    // Function to validate name (allow only alphabets and spaces)
    function isValidName(name) {
        let nameRegex = /^[a-zA-Z\s]+$/;
        return nameRegex.test(name);
    }

    // Function to show success message
    function showSuccessMessage() {
        Swal.fire({
            icon: 'success',
            title: 'Form Submitted Successfully!',
            text: 'Thank you for booking your appointment.',
        });
    }
});
