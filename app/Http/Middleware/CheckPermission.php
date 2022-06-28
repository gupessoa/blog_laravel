<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
{
    public function handle(Request $request, Closure $next)
        {

            // admin tem permission para tudo
            if(auth()->user()->role->name === 'admin')
                return $next($request);

            // 1- pegar a rota
            $route_name = $request->route()->getName();
            // 2- pegar a permissão para o usuário que esta autenticado
            $routes_arr = auth()->user()->role->permissions->toArray();
            // 3- compare este nome de rota com as permissões do usuário
            foreach($routes_arr as $route)
            {
                // 4- se este nome de rota for uma dessas permissões
                if($route['name'] === $route_name)
                    // 5- permitir que o usuário acesse
                    return $next($request);
            }
            // 6- se não laçar 403 Acesso não autorizado
            abort(403, 'Access Denied | Unauthorized');

        }
}
