<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});

// Route::get('/', [HomeController::class, 'index']);


Route::get('/register', function () {
    return view('register');
});

Route::get('/register', [RegisterController::class, 'showForm']);
Route::post('/register', [RegisterController::class, 'submitForm'])->name('register.submit');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
