<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class RegisterController extends Controller {
    public function showRegisterForm() {
        return view('register');
    }

    // public function submitForm(Request $request) {
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'address' => 'required',
    //         'email' => 'required|email',
    //         'age' => 'required|integer',
    //         'shoeSize' => 'required|numeric|between:2.50,99.99',
    //         'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);


    //     if (!$validated) {
    //         return redirect()->route('register.show')->with('error', 'Form failed to submit.');
    //     }

    //     // Handle image upload
    //     if ($request->hasFile('picture')) {
    //         $picture = $request->file('picture');
    //         $picturePath = $picture->store('pictures', 'public');

    //         // Get form input values
    //         $name = $request->input('name');
    //         $address = $request->input('address');
    //         $email = $request->input('email');
    //         $age = $request->input('age');
    //         $shoeSize = $request->input('shoeSize');

    //         return view('submitted', compact('name', 'address', 'email', 'age', 'shoeSize', 'picturePath'));
    //     } else {
    //         return redirect()->route('register.show')->with('error', 'Image upload failed.');
    //     }
    // }

    public function imageToBase64($imagePath) {
        try {
            $imageData = file_get_contents($imagePath);
            if ($imageData === false) {
                throw new Exception("Failed to read the image file.");
            }

            $base64Encoded = base64_encode($imageData);
            return $base64Encoded;
        } catch (Exception $e) {
            echo "An error occurred: " . $e->getMessage();
            return null;
        }
    }

    // public function store(Request $request) {
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'address' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'age' => 'required|integer',
    //         'shoeSize' => 'required|numeric|between:2.50,99.99',
    //         'password' => 'required|min:5|max:255',
    //         'image' => 'required|file|max:2048'
    //     ]);


    //     $image = $request->file('image');
    //     if ($image) {
    //         $imageBase64 = base64_encode(file_get_contents($image));
    //     } else {
    //         $imageBase64 = null;
    //     }

    //     $validatedData['password'] = bcrypt($validatedData['password']);

    //     User::create($validatedData);

    //     return redirect('/login')->with('success', 'Registration Success!');
    // }

    public function store(Request $request)
{
    // $request->validate([
    //     'name' => 'required',
    //     'address' => 'required',
    //     'email' => 'required|email|unique:users',
    //     'age' => 'required|integer',
    //     'shoeSize' => 'required|numeric|between:2.50,99.99',
    //     'password' => 'required|min:5|max:255',
    //     'image' => 'required|file|max:2048'
    // ]);

    $image = $request->file('image');
    if ($image) {
        $imageBase64 = base64_encode(file_get_contents($image));
    } else {
        $imageBase64 = null; // or any default value you want to use
    }


    User::create([
        'name' => $request->name,
        'address' => $request->address,
        'username' => $request->username,
        'email' => $request->email,
        'age' => $request->age,
        'shoe_size'=> 40.0,
        'password' => bcrypt($request->password),
        'image' => $imageBase64
    ]);

    return redirect('/login')->with('success', 'Registration Success!');
}
}
