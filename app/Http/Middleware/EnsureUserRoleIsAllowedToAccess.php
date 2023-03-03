<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;

class EnsureUserRoleIsAllowedToAccess
{
// comprar reservar produtos contactos

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {

        $userRole = auth()->user()->role;
        $currentRouteName = Route::currentRouteName();

       
    
        if(in_array($currentRouteName, $this->userAccessRole()[$userRole])){
            return $next($request);
        }else{
            abort(403, 'Access Denied.');
        }

        }catch (\Throwable $th){
            abort(403, 'Access Denied.');
        }
    }
    
    /**
     * userAccessRole
     * 
     * @return void
     */
    private function userAccessRole()
        {
            return[
                'user'=> [
                    'comprar',
                    'reservas',
                    'contacto',
                ],
                'admin' =>[
                    'comprar',
                    'reservas',
                    'contacto',
                    'produtos'

                ],

            ];
        }
    
}
