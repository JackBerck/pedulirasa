<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about-us', function () {
    return view('about-us');
});

// Register routes
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'createUser']);

// Login routes
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);
