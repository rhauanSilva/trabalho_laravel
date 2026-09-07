<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Manipula a requisição para checar a role do usuário.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Se o usuário não estiver logado ou não tiver a role esperada, nega o acesso
        if (! $request->user() || $request->user()->role !== $role) {
            abort(403, 'Acesso não autorizado para o seu perfil.');
        }

        return $next($request);
    }
}