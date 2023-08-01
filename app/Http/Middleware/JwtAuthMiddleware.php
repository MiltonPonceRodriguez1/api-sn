<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JwtAuthMiddleware
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
        // Validar sesio nusuario
        // $token = $request->session()->get('token');
        $token = $request->header('Authorization');
        $jwt = new \JwtAuth();

        if ($jwt->checkToken($token)) {
            return $next($request);
        } else {
            return response()->json(['status' => 'error', 'message' => 'La Sesión a caducado'], 500);
        }
    }
}
