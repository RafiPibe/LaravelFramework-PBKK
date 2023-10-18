<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the user's credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($credentials)) {
            // Authentication successful, redirect to the desired page
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed, redirect back to the login form with an error message
            return redirect()->back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }
    }
}