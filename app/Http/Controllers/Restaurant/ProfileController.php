<?php

namespace App\Http\Controllers\Restaurant;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Restaurant\ProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('restaurants.profile.index');
    }

    public function update(ProfileRequest $request)
    {
        if ($image = $request->file('image')) {
            // delete old image
            Storage::disk('public')->delete("restaurants/" . restaurant()->image);
            // store the new one
            $image = $image->store('restaurants', 'public');
            $image_name = Str::after($image, '/');
        }

        restaurant()->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $image_name ?? restaurant()->image,
            'city' => $request->city,
            'website' => $request->website,
            'bio' => $request->bio,
        ]);

        return back()->with('status', 'Your profile has been updated successfully.');
    }
}
