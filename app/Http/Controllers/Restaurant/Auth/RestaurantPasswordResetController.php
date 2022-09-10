<?php

namespace App\Http\Controllers\Restaurant\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Password;

class RestaurantPasswordResetController extends Controller
{
    public function index()
    {
        return view('companies.auth.forgot-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:restaurants,email'],
        ]);

        $restaurant = Restaurant::firstWhere('email', $request->email);

        if ($restaurant->isNotActive()) {
            return back()->with('error', 'Your restaurant is not active yet. We will review your application and get back to you shortly.');
        }

        $status = Password::broker('companies')->sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);
    }
}
