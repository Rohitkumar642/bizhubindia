<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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

        h4 {
            text-align: center;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
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
            background-color:rgb(153, 37, 37);
        }

        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            font-size: 14px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        #forgot {
            margin-top: 20px;
            text-align: center;
        }

        #forgot p {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
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
    <h4>Admin Login</h4>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST">
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <div id="forgot">
        <p>Forgot Password? <span style="color: #2196f3; cursor: pointer;" id="reset_password_btn">Click Here</span></p>
        <!-- <button type="button" id="reset_password_btn">Reset Password</button> -->
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#reset_password_btn').click(function () {
            var email = $('input[name="email"]').val();

            if (email === '') {
                alert('Please enter your email');
                return;
            }

            $.ajax({
                url: "{{ route('admin.reset.password') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    email: email
                },
                success: function (response) {
                    alert(response.message);
                },
                error: function (xhr) {
                    alert(xhr.responseJSON.message);
                }
            });
        });
    });
</script>

</body>
</html>
