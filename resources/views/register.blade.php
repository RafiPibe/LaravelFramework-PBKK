<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
            align: center;
        }

        .form-container h1 {
            text-align: center;
            margin-top: 0;
        }

        .register-form {
            background-color: #fff;
            padding: 2%;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            max-width: 100%;
            text-align: center; /* Center text within the form */
        }

        .register-form p {
            margin: 0;
            padding: 5px 0;
            text-align: left; /* Left-align the labels */
        }

        .register-form input {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 0 auto; /* Center the input box */
            display: block; /* Make the input elements stack vertically */
        }

        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-form button:hover {
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
    </style>
</head>
<body>
    @if (session('success'))
    <div class="alert success">
        {{ session('success') }}
    </div>
    @endif

    <div class="form-container">
        <form class="register-form" action="{{ route('register.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Register Form</h1>
            <p>Name:</p>
            <input type="text" name="name" placeholder="Name" required>

            <p>Address:</p>
            <input type="text" name="address" placeholder="Address" required>

            <p>Email:</p>
            <input type="email" name="email" placeholder="Email" required>

            <p>Age:</p>
            <input type="number" name="age" placeholder="Age" required>

            <p>Shoe Size:</p>
            <input type="number" step="0.01" name="shoeSize" placeholder="Shoe Size" required>

            <p>Image:</p>
            <input type="file" name="picture" accept="image/*" required>
            <button type="submit" name="submit">Register</button>
        </form>
    </div>

    @if (session('error'))
    <div class="alert">
        {{ session('error') }}
    </div>
    @endif

    @if (session('success'))
    <div class="alert success">
        {{ session('success') }}
    </div>
    @endif
</body>
</html>
