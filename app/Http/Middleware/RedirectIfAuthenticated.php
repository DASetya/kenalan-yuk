<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = 'user')
    {
        // Jika sudah login, harus diredirect
        if (Auth::guard($guard)->check()) {
            if ($guard == 'user') {
                return redirect()->route('dashboard');
            } else if ($guard == 'admin') {
                return redirect()->route('admin.index');
            }
        }

        // Jika belum login, lanjut
        return $next($request);

        ## Ori Laravel
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        // return $next($request);
    }
}
