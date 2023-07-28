<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Auth;
class AdminMiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type=='Admin') {
            return $next($request);
        } else {
            abort(404);
        }
       
    }
}
