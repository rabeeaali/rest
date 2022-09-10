<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect()->route('admin.home');
            }
            if ($guard == "restaurant" && Auth::guard($guard)->check()) {
                return redirect()->route('restaurant.profile.index');
            }
            if (Auth::guard($guard)->check()) {
                return redirect("@{$request->user()->username}");
            }
        }

        return $next($request);
    }
}
