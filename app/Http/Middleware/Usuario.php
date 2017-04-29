<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Usuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->rol == 'Usuario')
        {
            return $next($request);
        }
        else
        {
            \Session::flash('message', 'No tienes los Permisos necesarios para Acceder a este enlace!');
            return redirect('/home');
        }
    }
}
