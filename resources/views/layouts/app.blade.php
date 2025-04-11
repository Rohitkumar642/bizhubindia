<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Vendor Registration')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 450px;
            max-width: 500px;
            transition: all 0.3s ease;
        }
        .container h3 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .container h5 {
            margin-top: 15px;
            color: #333;
            text-align: center;
            font-weight: 500;
            font-size: 1.2rem;
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
            color: green;
            text-align: center;
            margin-top: 10px;
        }
        #otpSection {
            display: none;
            animation: fadeIn 0.3s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
