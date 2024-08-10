<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User_Management;
use Illuminate\Support\Facades\Route;

// landing page
Route::get('/', [AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('page.dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'update']);

    Route::get('/user_management', [User_Management::class, 'index'])->name('user.index');
    Route::post('/user_management', [User_Management::class, 'store'])->name('user.store');
    Route::get('/user_management/{user}/edit', [User_Management::class, 'edit'])->name('user.edit');
});
