<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestAdminLayout extends Component
{
    public function render()
    {
        return view('admin.layouts.guest');
    }
}
