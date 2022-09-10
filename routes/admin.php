<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\AdminLogoutController;
use App\Http\Controllers\Admin\Companies\CompanyController;

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

        // users
        Route::name('users.')
            ->controller(UserController::class)
            ->prefix('users')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/create', 'create')->name('create');
                Route::get('show/{user}', 'show')->name('show');
                Route::put('update/{user}', 'update')->name('update');
                Route::delete('delete/{user}', 'delete')->name('delete');
            });

        // companies
        Route::name('companies.')
            ->controller(CompanyController::class)
            ->prefix('companies')->group(function () {
                Route::get('/', 'index')->name('index');
                // Route::post('/create', 'create')->name('create');
                // Route::get('show/{user}', 'show')->name('show');
                // Route::put('update/{user}', 'update')->name('update');
                // Route::delete('delete/{user}', 'delete')->name('delete');
            });
    });
});
