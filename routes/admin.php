<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\AdminLogoutController;

Route::name('admin.')->prefix('admin')->group(function () {

    // admin auth
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AdminLoginController::class, 'index'])->name('login');
        Route::post('login', [AdminLoginController::class, 'login'])->name('login');
    });

    Route::middleware('auth:admin')->group(function () {

        Route::get('/', AdminHomeController::class)->name('home');
        Route::post('logout', AdminLogoutController::class)->name('logout');

        // profile
        Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
    });
});
