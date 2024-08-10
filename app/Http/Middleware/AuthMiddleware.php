<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!empty(Auth::check())) {
            return $next($request);
        }

        //if not authenticated user then it will execute this return
        // return abort(404);

        //if not authenticated user then it will redirect to the login page.
        return redirect('/');

        //same thing from the above code
        // else {
        //     Auth::logout();

        //     return redirect('/');
        // }

    }
}
