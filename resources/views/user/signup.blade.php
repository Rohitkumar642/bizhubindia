<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f0ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 360px;
        }

        h3 {
            text-align: center;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-size: 14px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #2196f3;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background-color: #cd3636;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: rgb(153, 37, 37);
        }

        .login {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .login a {
            color: #1976d2;
            text-decoration: none;
            font-weight: 500;
        }

        .login a:hover {
            text-decoration: underline;
        }

        #otpsection {
            display: none;
            animation: fadeIn 0.3s ease-in;
        }

        #loginBtn {
            display: none;
            background-color: #555;
        }

        .message {
            text-align: center;
            font-size: 14px;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @media (max-width: 400px) {
            .container {
                padding: 20px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
<div class="container">

    <h3>Signup Form</h3>

    <form id="signupForm">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="mobile">Mobile Number</label>
        <input type="text" id="mobile" name="mobile" placeholder="10-digit mobile number" maxlength="10" required>

        <button type="submit">Signup</button>
    </form>

    <div class="login">
        Alredy have an account? <a href="/login">Login</a>
    </div>

    <div id="otpsection">
        <label for="otp">OTP</label>
        <input type="text" id="otp" name="otp" placeholder="Enter OTP">
        <button type="button" id="verifyOtpBtn">Verify OTP</button>
    </div>

    <button type="button" id="loginBtn">Go to Login</button>

    <p id="message" class="message"></p>
</div>

<script>
    $(document).ready(function () {
        $('#signupForm').submit(function (event) {
            event.preventDefault();

            $.ajax({
                url: "/signup",
                type: "POST",
                data: {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    mobile: $('#mobile').val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    if (response.status) {
                        $('#otpsection').slideDown();
                        $('#message').text("OTP Sent Successfully!").css("color", "green");
                    } else {
                        $('#message').text(response.message).css("color", "red");
                        $('#loginBtn').show();
                    }
                },
                error: function (xhr) {
                    $('#loginBtn').show();
                    $('#message').text("Already have an account with this Email. Please Login.").css("color", "red");
                }
            });
        });

        $('#verifyOtpBtn').click(function () {
            $.ajax({
                url: "/checkotp",
                type: "POST",
                data: {
                    mobile: $('#mobile').val(),
                    otp: $('#otp').val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    if (response.status) {
                        $('#message').text("OTP Verified! Redirecting...").css("color", "green");
                        setTimeout(function () {
                            window.location.href = '/vendor';
                        }, 2000);
                    } else {
                        $('#message').text("Invalid OTP. Please try again.").css("color", "red");
                    }
                },
                error: function (xhr) {
                    $('#message').text("Error: " + xhr.responseJSON.message).css("color", "red");
                }
            });
        });

        $('#loginBtn').click(function () {
            window.location.href = '/login';
        });

        // Mobile number input restriction
        $('#mobile').on('input', function () {
            const inputVal = $(this).val();
            const onlyNumbers = inputVal.replace(/[^0-9]/g, '');
            $(this).val(onlyNumbers);
        });
    });
</script>

</body>
</html>
