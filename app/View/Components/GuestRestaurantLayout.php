<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestRestaurantLayout extends Component
{
    public function __construct(public $title = null)
    {
    }
    public function render()
    {
        return view('restaurants.layouts.guest');
    }
}
