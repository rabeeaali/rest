<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restaurant\ProfileController;
use App\Http\Controllers\Restaurant\Auth\LogoutController;
use App\Http\Controllers\Restaurant\Products\ProductController;
use App\Http\Controllers\Restaurant\Category\CategoryController;
use App\Http\Controllers\Restaurant\Auth\RestaurantLoginController;
use App\Http\Controllers\Restaurant\Auth\RestaurantRegisterController;

// Route::redirect('/c', '/c/login');

Route::name('restaurant.')->prefix('restaurant')->group(function () {

    //'throttle:20,1'
    Route::middleware(['guest:restaurant'])->group(function () {
        Route::get('login', [RestaurantLoginController::class, 'index'])->name('login');
        Route::post('login', [RestaurantLoginController::class, 'login'])->name('login');
        Route::get('register', [RestaurantRegisterController::class, 'index'])->name('register');
        Route::post('register', [RestaurantRegisterController::class, 'register'])->name('register');
        // Route::get('forgot-password', [CompanyPasswordResetController::class, 'index'])->name('password.request');
        // Route::post('forgot-password', [CompanyPasswordResetController::class, 'store'])->name('password.email');
        // Route::get('reset-password/{token}', [CompanyNewPasswordController::class, 'index'])->name('password.reset');
        // Route::post('reset-password', [CompanyNewPasswordController::class, 'store'])->name('password.update');
    });

    Route::middleware('auth:restaurant')->group(function () {

        Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

        // categories routes
        Route::resource('categories', CategoryController::class);

        Route::resource('products', ProductController::class);

        // ->prefix('categories')
        // ->name('categories.')
        // ->group(function () {
        //     Route::get('/', [CategoryController::class, 'categories'])->name('index');
        //     Route::get('/create', [ProfileController::class, 'createCategory'])->name('create');
        //     Route::post('categories/create', [ProfileController::class, 'storeCategory'])->name('store');
        //     Route::get('categories/{category}/edit', [ProfileController::class, 'editCategory'])->name('edit');
        //     Route::put('categories/{category}/edit', [ProfileController::class, 'updateCategory'])->name('update');
        //     Route::delete('categories/{category}/delete', [ProfileController::class, 'deleteCategory'])->name('delete');
        // });


        Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::post('logout', LogoutController::class)->name('logout');
    });
});
