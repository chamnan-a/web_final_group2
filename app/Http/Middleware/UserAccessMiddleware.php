<?php

namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class UserAccessMiddleware
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return mixed
//      */
//     public function handle(Request $request, Closure $next)
//     {
//         // Check if the user is authenticated
//         if (!Auth::check()) {
//             return redirect()->route('login');
//         }

//         // Check if the user's type is admin or manager
//         if (Auth::user()->type = 0) {
//             return redirect()->route('frontend');
//         }

//         return $next($request);
//     }
// } 

