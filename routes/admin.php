<?php

use App\Http\Controllers\Admin\AboutUsItemController;
use App\Http\Controllers\Admin\AboutUsSettingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactUsSettingController;
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

    // About Us Setting
    Route::get('/about-us-setting', [AboutUsSettingController::class, 'index'])->name('admin.about-us-setting.index');
    Route::post('/about-us-setting', [AboutUsSettingController::class, 'update'])->name('admin.about-us-setting.update');

    // About Us Items
    Route::get('/about-us-items', [AboutUsItemController::class, 'index'])->name('admin.about-us-items.index');
    Route::get('/about-us-items/create', [AboutUsItemController::class, 'create'])->name('admin.about-us-items.create');
    Route::post('/about-us-items', [AboutUsItemController::class, 'store'])->name('admin.about-us-items.store');
    Route::get('/about-us-items/{aboutUsItem}/edit', [AboutUsItemController::class, 'edit'])->name('admin.about-us-items.edit');
    Route::put('/about-us-items/{aboutUsItem}', [AboutUsItemController::class, 'update'])->name('admin.about-us-items.update');
    Route::delete('/about-us-items/{aboutUsItem}', [AboutUsItemController::class, 'destroy'])->name('admin.about-us-items.destroy');

    // Contact Us Setting
    Route::get('/contact-us-setting', [ContactUsSettingController::class, 'index'])->name('admin.contact-us-setting.index');
    Route::post('/contact-us-setting', [ContactUsSettingController::class, 'update'])->name('admin.contact-us-setting.update');

    // Contacts
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('admin.contacts.show');
    Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('admin.contacts.update');

    // Blog Posts
    Route::get('/blog-posts', [BlogPostController::class, 'index'])->name('admin.blog-posts.index');
    Route::get('/blog-posts/create', [BlogPostController::class, 'create'])->name('admin.blog-posts.create');
    Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('admin.blog-posts.store');
    Route::get('/blog-posts/{blogPost}/edit', [BlogPostController::class, 'edit'])->name('admin.blog-posts.edit');
    Route::put('/blog-posts/{blogPost}', [BlogPostController::class, 'update'])->name('admin.blog-posts.update');
    Route::delete('/blog-posts/{blogPost}', [BlogPostController::class, 'destroy'])->name('admin.blog-posts.destroy');
});
