<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if (Auth::user()->is_admin === 1) {
        //     return $next($request);
        // }
        // return redirect('login');

        if (!(Auth::user())) {
            return redirect('login');
        } elseif (!(Auth::user()->is_admin === 1)) {
            return redirect('login');
        } else {
            return $next($request);
        }
    }
}
