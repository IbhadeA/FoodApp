<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/register', function () {
    return view('register');
});

// STEPS to connect route to controller
// 1. Determine the route method e.g get, post, put, delete
// 2.create your controller
// 3. determine your route parameter
// 4.import your controller
// 5. put in the function method from your controller

Route::get('/', [HomepageController::class,'index']);
Route::get('/profile', [ProfileController::class,'showProfile']);

// To get page
Route::get('/register', [RegisterController::class, 'index']);
// To submit form on the page
Route::post('/submit-register-form', [RegisterController::class,'store']);

// index - getting all data // get
// store - inputting// post
// show - single data // get
// update - update data // put
// destroy - delete //delete