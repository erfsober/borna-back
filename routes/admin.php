<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Admin Login Routes
Route::middleware(['guest:admin'])->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');
});

// Admin Protected Routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::any('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // User Management
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
});
