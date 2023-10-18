@extends('master')
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }
</style>

<main>
    <div class="body">
        <h1 style="text-align: center;">Data Submitted successfully!</h1>
    
        <h2>Here's the data:</h2>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Address:</strong> {{ $address }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Age:</strong> {{ $age }}</p>
        <p><strong>Shoe Size:</strong> {{ $shoeSize }} cm</p>
        <p><strong>Le Image:</strong></p>
        <img src="{{ asset('storage/' . $picturePath) }}" alt="User's Picture">
    </div>
</main>

@endsection