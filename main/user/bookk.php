<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
         $(document).ready(function () {
            $('#dp').datepicker();

            // Validation for the form
            $('#bookAppointmentBtn').click(function (event) {
                event.preventDefault(); // Prevent form submission

                // Reset previous error messages
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
                }

                // Last Name validation
                let lastName = $('#lastName').val().trim();
                if (lastName === "") {
                    isValid = false;
                    $('#lastName').addClass('is-invalid');
                    $('#lastName').after('<div class="error-message">Last Name is required.</div>');
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

                // If the form is valid, show success message
                if (isValid) {
                    showSuccessMessage();
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

            // Function to show success message
            function showSuccessMessage() {
                Swal.fire({
                    icon: 'success',
                    title: 'Form Submitted Successfully!',
                    text: 'Thank you for booking your appointment.',
                });
            }
        });
    </script>
    <style>
        @import url(//fonts.googleapis.com/css?family=Montserrat:400,500,700);

        .banner3 {
            font-family: "Montserrat", sans-serif;
            color: red;
            font-weight: 300;
            max-height: 800px;
        }

        .banner3 .banner {
            position: relative;
            max-height: 700px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center top;
            width: 100%;
            display: table;
        }

        .banner3 h1,
        .banner3 h2,
        .banner3 h3,
        .banner3 h4,
        .banner3 h5,
        .banner3 h6 {
            color: red;
        }

        .banner3 .font-weight-medium {
            font-weight: 500;
        }

        .banner3 .subtitle {
            color: black;
            line-height: 24px;
        }

        .banner3 .btn-danger-gradiant {
            background: #ff4d7e;
            background: -webkit-linear-gradient(legacy-direction(to right), black 0%, red 100%);
            background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
            background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
            border: 0px;
        }

        .banner3 .btn-danger-gradiant:hover {
            background: #ff6a5b;
            background: -webkit-linear-gradient(legacy-direction(to right), black 0%, red 100%);
            background: -webkit-gradient(linear, left top, right top, from(black), to(red));
            background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
            background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
            background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
        }

        .banner3 .btn-danger-gradiant.active,
        .banner3 .btn-danger-gradiant:active,
        .banner3 .btn-danger-gradiant:focus {
            -webkit-box-shadow: 0px;
            box-shadow: 0px;
            opacity: 1;
        }

        .banner3 .btn-md {
            padding: 15px 45px;
            font-size: 16px;
        }

        .banner3 .form-row {
            margin: 0;
        }

        .banner3 label.font-12 {
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .banner3 .form-control {
            color: black;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
        }

        .banner3 .date label {
            cursor: pointer;
            margin: 0;
        }

        @media (max-width: 370px) {
            .banner3 .left,
            .banner3 .right {
                padding: 25px;
            }
        }

        @media (max-width: 320px) {
            .banner3 .left,
            .banner3 .right {
                padding: 25px 15px;
            }
        }

        .banner3 .font-14 {
            font-size: 14px;
        }

        .banner3 .text-inverse {
            color: #3e4555 !important;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 4px;
        }

        /* Additional styling for invalid fields */
        .form-control.is-invalid {
            border-color: red;
        }

        .error-message.is-invalid {
            display: block;
            margin-top: 4px;
        }
    </style>
</head>

<body>
    <div class="banner3">
        <div class="py-5 banner" style="background-image:url(../../assets/img/bro.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-5">
                        <h3 class="my-3 text-red font-weight-medium text-uppercase">Book an Appointment</h3>
                        <div class="bg-white">
                            <div class="form-row border-bottom">
                                <!-- Add IDs to your form elements for easier access -->
                                <div class="p-4 left border-right w-50">
                                    <label class="text-inverse font-12 text-uppercase">First Name</label>
                                    <input type="text" id="firstName"
                                        class="border-0 p-0 font-14 form-control" placeholder="Your First Name" />
                                </div>
                                <div class="p-4 right w-50">
                                    <label class="text-inverse font-12 text-uppercase">Last Name</label>
                                    <input type="text" id="lastName" class="border-0 p-0 font-14 form-control"
                                        placeholder="Your Last Name" />
                                </div>
                            </div>
                            <div class="form-row border-bottom p-4">
                                <label class="text-inverse font-12 text-uppercase">Email Address</label>
                                <input type="text" id="email" class="border-0 p-0 font-14 form-control"
                                    placeholder="Enter your Email Address" />
                            </div>
                            <div class="form-row border-bottom p-4">
                                <label class="text-inverse font-12 text-uppercase">Phone Number</label>
                                <input type="text" id="phoneNumber" class="border-0 p-0 font-14 form-control"
                                    placeholder="Enter your Phone Number" />
                            </div>
                            <div class="form-row border-bottom p-4 position-relative">
                                <label class="text-inverse font-12 text-uppercase">Booking Date</label>
                                <div class="input-group date">
                                    <input type="text" id="dp" class="border-0 p-0 font-14 form-control"
                                        placeholder="Select the Appointment Date" />
                                    <label class="mt-2" for="dp"><i class="icon-calendar mt-1"></i></label>
                                </div>
                            </div>
                            <div class="form-row border-bottom p-4">
                                <label class="text-inverse font-12 text-uppercase">Message</label>
                                <textarea col="1" row="1" id="message"
                                    class="border-0 p-0 font-weight-light font-14 form-control"
                                    placeholder="Write Down the Message"></textarea>
                            </div>
                            <div>
                                <!-- Update the button ID -->
                                <button id="bookAppointmentBtn"
                                    class="m-0 border-0 py-4 font-14 font-weight-medium btn btn-danger-gradiant btn-block position-relative rounded-0 text-center text-white text-uppercase">
                                    <span>Book Your Appointment Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
