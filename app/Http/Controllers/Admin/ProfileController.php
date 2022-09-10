<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }

    public function update(ProfileRequest $request)
    {
        admin()->update($request->validated());

        return redirect()->back()->with('alert', trans('site.success'));
    }
}
