<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

if (!function_exists('admin')) {
    function admin()
    {
        return Auth::guard('admin')->user();
    }
}

if (!function_exists('restaurant')) {
    function restaurant()
    {
        return Auth::guard('restaurant')->user();
    }
}

if (!function_exists('restaurantAuthCheck')) {
    function restaurantAuthCheck()
    {
        return Auth::guard('restaurant')->check();
    }
}

if (!function_exists('user')) {
    function user()
    {
        return Auth::user();
    }
}

if (!function_exists('userAuthCheck')) {
    function userAuthCheck()
    {
        return Auth::check();
    }
}

if (!function_exists('isNewImageExistInRequest')) {
    function isNewImageExistInRequest($key = 'image')
    {
        return Arr::exists(request(), $key);
    }
}
