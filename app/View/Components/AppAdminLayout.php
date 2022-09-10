<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppAdminLayout extends Component
{
    public function __construct(public $title = null)
    {
    }

    public function render()
    {
        return view('admin.layouts.app');
    }
}
