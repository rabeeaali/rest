<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('restaurants.home');
    }
}
