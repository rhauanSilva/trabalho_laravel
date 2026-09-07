<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->query('tipo') !== 'admin') {
            return response('Acesso negado! Você não tem permissão para acessar esta área.', 403);
        }

        return $next($request);
    }
}