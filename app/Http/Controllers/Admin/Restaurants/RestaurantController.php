<?php

namespace App\Http\Controllers\Admin\Restaurants;

use App\Models\Restaurant;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::query()
            ->orderByDesc('id')
            ->cursorPaginate();

        return view('admin.restaurants.index', compact('restaurants'));
    }
}
