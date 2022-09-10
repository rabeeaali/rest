<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ChallengeController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\LogoutController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Profile\ProfileController;

Route::name('user.')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('register', [RegisterController::class, 'index'])
            ->name('register');

        Route::post('register', [RegisterController::class, 'store']);

        Route::get('login', [LoginController::class, 'index'])
            ->name('login');

        Route::post('login', [LoginController::class, 'store']);

        // Route::get('forgot-password', [PasswordResetLinkController::class, 'index'])
        //     ->name('password.request');

        // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        //     ->name('password.email');

        // Route::get('reset-password/{token}', [NewPasswordController::class, 'index'])
        //     ->name('password.reset');

        // Route::post('reset-password', [NewPasswordController::class, 'store'])
        //     ->name('password.update');
    });

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('@{username}', [ProfileController::class, 'index'])->name('profile');

    Route::middleware('auth', 'user.active')->group(function () {

        Route::controller(ProfileController::class)
            ->name('profile.')
            ->group(function () {
                Route::get('update',  'show')->name('show');
                Route::post('update',  'update')->name('update');
                Route::post('delete-cv',  'deleteExistingCV')->name('delete_cv');
            });

        Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
    });

    Route::prefix('challenges')
        ->controller(ChallengeController::class)
        ->name('challenges.')
        ->group(function () {
            Route::get('{challenge:slug}', 'index')->name('index');
            Route::post('{challenge:slug}/submit', 'submit')->name('submit')->middleware('auth', 'user.active');
        });

    // Route::get(' /{company:slug}', [CompanyController::class, 'index'])->name('company.index');
    // Route::get('companies/{company:slug}/challenges', [CompanyController::class, 'challenges'])->name('company.challenges');
});
