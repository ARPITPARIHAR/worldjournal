<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login'); // Redirect to login page if not logged in
        }

        return $next($request); // Allow access to postcfp page if logged in
    }
}
