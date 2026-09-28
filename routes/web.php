<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AuthPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\Staff\DashboardController as StaffDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/contact-list', [PageController::class, 'contactList'])->name('contact.list');

Route::get('/login', [AuthPageController::class, 'login'])->name('login');
Route::get('/register', [AuthPageController::class, 'register'])->name('register');
Route::get('/forgot-password', [AuthPageController::class, 'forgotPassword'])->name('password.request');
Route::get('/reset-password', [AuthPageController::class, 'resetPassword'])->name('password.reset');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/notifications', [PageController::class, 'notifications'])->name('notifications');

Route::resource('requests', ServiceRequestController::class)
    ->parameters(['requests' => 'serviceRequest']);

Route::prefix('staff')->name('staff.')->group(function () {
    Route::get('/dashboard', [StaffDashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', AdminUserController::class)->only(['index', 'create', 'edit']);
    Route::resource('departments', AdminDepartmentController::class)->except(['show']);
    Route::resource('categories', AdminCategoryController::class)->except(['show']);
});
