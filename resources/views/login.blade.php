<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>ShoeHub-Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container h1 {
            text-align: center;
            margin-top: 0;
        }

        .login-form {
            background-color: #fff;
            padding: 2%;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            max-width: 100%;
            text-align: center;
        }

        .login-form p {
            margin: 0;
            padding: 5px 0;
            text-align: left;
        }

        .login-form input {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 0 auto;
            display: block;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #0056b3;
        }

        .alert {
            width: 100%;
            padding: 10px;
            background-color: #f44336;
            color: #fff;
            text-align: center;
        }

        .alert.success {
            background-color: #4CAF50;
        }

        /* Style for the "Create an Account" link */
        .create-account-link {
            text-align: center;
            margin-top: 20px;
        }

        .create-account-link a {
            text-decoration: none;
            color: #007bff;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    @if (session('error'))
    <div class="alert">
        {{ session('error') }}
    </div>
    @endif

    <div class="form-container">
        <form class="login-form" action="{{ route('login.submit') }}" method="post">
            @csrf
            <h1>Login</h1>
            <p>Email:</p>
            <input type="email" name="email" placeholder="Email" required>

            <p>Password:</p>
            <input type="password" name="password" placeholder="Password" required>
            
            <button type="submit" name="submit">Login</button>
        </form>
        <div class="create-account-link">
            <p>Don't have an account? <a href="/register">Create an Account</a></p>
        </div>
    </div>

    @if (session('success'))
    <div class="alert success">
        {{ session('success') }}
    </div>
    @endif
    <footer>
        <p>&copy; 2023 ShoeHub. All rights reserved.</p>
    </footer>
</body>
</html>
