<?php

namespace App\Http\Controllers\Restaurant\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Restaurant\Auth\RestaurantLoginRequest;

class RestaurantLoginController extends Controller
{
    public function index()
    {
        return view('restaurants.auth.login');
    }

    public function login(RestaurantLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::RESTAURANT);
    }
}
