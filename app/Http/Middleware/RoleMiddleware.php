<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware{

    public function handle($request, Closure $next, ...$roles){

        if(session('role') == null) redirect(route('logout'));

        if (Auth::check()) {
            foreach ($roles as $role) {
                if($role == Auth::user()->role){
                    return $next($request);
                }
            }
        }
        return back();
    }
}
