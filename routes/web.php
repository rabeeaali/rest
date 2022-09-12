<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;

Route::name('user.')->group(function () {

    // Route::middleware('guest')->group(function () {
    //     Route::get('register', [RegisterController::class, 'index'])
    //         ->name('register');

    //     Route::post('register', [RegisterController::class, 'store']);

    //     Route::get('login', [LoginController::class, 'index'])
    //         ->name('login');

    //     Route::post('login', [LoginController::class, 'store']);

        // Route::get('forgot-password', [PasswordResetLinkController::class, 'index'])
        //     ->name('password.request');

        // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        //     ->name('password.email');

        // Route::get('reset-password/{token}', [NewPasswordController::class, 'index'])
        //     ->name('password.reset');

        // Route::post('reset-password', [NewPasswordController::class, 'store'])
        //     ->name('password.update');
    // });

});

Route::view('/res', 'users.home');
