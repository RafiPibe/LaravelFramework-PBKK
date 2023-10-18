@extends('master')
@section('content')

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

<main class="form-registration centered-content">
    <div class="card bg-hollow">
        <div class="card-body bg-hollow ">
            <form action="/register" method="post" enctype="multipart/form-data">
            @csrf
                <h1 class="fw-normal">Registration Form</h1>
                
                <div class="form-floating mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" @error('name') is-invalid @enderror id="name" placeholder="le name?" required>
                    @error('name')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <label for="address">address</label>
                    <input type="text" name="address" class="form-control" @error('address') is-invalid @enderror id="address" placeholder="address" required>
                    @error('address')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror id="email" placeholder="name@example.com" required>
                    @error('email')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <label for="age">age</label>
                    <input type="text" name="age" class="form-control" @error('age') is-invalid @enderror id="age" placeholder="age" required>
                    @error('age')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <label for="shoeSize">shoeSize</label>
                    <input type="text" name="shoeSize" class="form-control" @error('shoeSize') is-invalid @enderror id="shoeSize" placeholder="shoeSize" required>
                    @error('shoeSize')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror id="password" placeholder="Password" required>
                    @error('password')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="idcard" class="form-label form-dark bg-dark color-dark text-white">Upload Image</label>
                    <input class="btn-dark form-control form-dark bg-dark color-dark text-white" type="file" id="image" name="image">
                    @error('image')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small> Already have an account? <a href="/login">Login</a> </small>
        </div>
    </div>
</main>

@endsection

