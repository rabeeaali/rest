<?php

namespace App\Http\Controllers\Restaurant\Auth;

use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Restaurant\Auth\RestaurantRegisterRequest;

class RestaurantRegisterController extends Controller
{
    public function index()
    {
        return view('restaurants.auth.register');
    }

    public function register(RestaurantRegisterRequest $request)
    {
        $restaurant = Restaurant::create($request->validated());

        Auth::guard('restaurant')->login($restaurant);

        return redirect()->intended(RouteServiceProvider::RESTAURANT);
    }
}
