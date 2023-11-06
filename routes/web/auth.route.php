<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Public\GuestController;
use Illuminate\Support\Facades\Route;

// Public
Route::group(['middleware' => ['guest']], function () {
    Route::get('', [GuestController::class, 'home']);
    Route::get('login', [GuestController::class, 'login']);
    Route::get('register', [GuestController::class, 'register']);
});


// Auth
Route::group(['prefix' => 'auth'], function () {
    // Login
    Route::post('login', [AuthController::class, 'login']);

    // register
    Route::post('register', [AuthController::class, 'register']);

    // Logout
    Route::post('logout', [AuthController::class, 'logout']);
});
