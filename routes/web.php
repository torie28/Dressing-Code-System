<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DressCodeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
// Authentication routes
Auth::routes();

// Registration route
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Welcome route
Route::get('/home', function () {
    return view('home'); // Ensure you have resources/views/welcome.blade.php
})->name('home');

// school routes
Route::get('/tribe/{tibe}', [DressCodeController::class, 'showByTribe']);

// Sukuma Tribe Dress Code Route
Route::get('/sukuma-dress-code', [DressCodeController::class, 'showSukumaDressCode'])->name('sukuma-dress-code');

// Pare Tribe Dress Code Route
Route::get('/pare-dress-code', [DressCodeController::class, 'showPareDressCode'])->name('pare-dress-code');

// Chaga Tribe Dress Code Route
Route::get('/chaga-dress-code', [DressCodeController::class, 'showChagaDressCode'])->name('chaga-dress-code');
