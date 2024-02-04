<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            // O usuário está autenticado, permita o acesso à rota
            return $next($request);
        }

        // O usuário não está autenticado, redirecione para a página de login
        return redirect('/login');
    }
}