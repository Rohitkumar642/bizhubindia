<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login With Mobile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f0ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 360px;
            transition: all 0.3s ease;
        }

        .container h3 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            font-weight: 500;
            font-size: 1.17rem;
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
            outline: none;
            border-color: #2196f3;
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

        .message {
            text-align: center;
            font-size: 14px;
            margin-top: 10px;
            transition: color 0.3s ease;
        }

        .signup {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .signup a {
            color: #1976d2;
            text-decoration: none;
            font-weight: 500;
        }

        .signup a:hover {
            text-decoration: underline;
        }

        #otpSection {
            display: none;
            animation: fadeIn 0.3s ease-in;
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
    <h3>Login via Mobile</h3>

    <form id="otpForm">
        <label for="mobileNumber">Mobile Number</label>
        <input type="text" id="mobileNumber" name="mobileNumber" placeholder="Enter 10-digit number" required>
        <button type="button" id="sendOtpBtn">Send OTP</button>

        <div id="otpSection">
            <label for="otp">OTP</label>
            <input type="text" id="otp" name="otp" placeholder="Enter OTP" required>
            <button type="button" id="verifyOtpBtn">Verify OTP</button>
        </div>
    </form>

    <div id="message" class="message"></div>

    <div class="signup">
        Don't have an account? <a href="/signup">Sign Up</a>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#mobileNumber').on('input', function () {
            var inputVal = $(this).val();
            var validInput = inputVal.replace(/[^0-9]/g, '');
            $(this).val(validInput);
        });

        $('#sendOtpBtn').click(function() {
            const mobileNumber = $('#mobileNumber').val();
            const messageDiv = $('#message');

            if (!/^[0-9]{10}$/.test(mobileNumber)) {
                messageDiv.css('color', 'red').text('Please enter a valid 10-digit mobile number.');
                return;
            }

            $.ajax({
                url: '{{ route("send.otp") }}',
                type: 'POST',
                data: { 
                    mobile: mobileNumber, 
                    _token: '{{ csrf_token() }}' 
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        messageDiv.css('color', 'green').text(response.message);
                        $('#otpSection').slideDown();
                    } else {
                        messageDiv.css('color', 'red').text(response.message);
                    }
                }
            });
        });

        $('#verifyOtpBtn').click(function() {
            const mobileNumber = $('#mobileNumber').val();
            const otp = $('#otp').val();
            const messageDiv = $('#message');

            $.ajax({
                url: '{{ route("verify.otpmobile") }}',
                type: 'POST',
                data: { 
                    mobile: mobileNumber, 
                    otp: otp, 
                    _token: '{{ csrf_token() }}' 
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        messageDiv.css('color', 'green').text(response.message);
                        setTimeout(function() {
                            window.location.href = response.redirect; 
                        }, 1000);
                    } else {
                        messageDiv.css('color', 'red').text(response.message);
                    }
                }
            });
        });
    });
</script>

</body>
</html>
