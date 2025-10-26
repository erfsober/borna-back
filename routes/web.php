<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us Route
Route::get('/about-us', [AboutController::class, 'index'])->name('about.index');

// Search Route
Route::get('/search', [SearchController::class, 'index'])->name('search.index');

// Bootcamp Route
Route::get('/bootcamp', [BootcampController::class, 'index'])->name('bootcamp.index');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// Authentication Routes
Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('send-otp');
    Route::get('/verify', [AuthController::class, 'showVerify'])->name('verify');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify-otp');
    Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('resend-otp');
    Route::get('/google', [AuthController::class, 'redirectToGoogle'])->name('google');
    Route::get('/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');
    Route::any('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Contact Us Routes
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

// Placeholder for terms route
Route::get('/terms', function () {
    return view('borna.terms');
})->name('terms');
