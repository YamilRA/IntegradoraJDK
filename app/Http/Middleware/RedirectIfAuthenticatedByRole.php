<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedByRole
{
    public function handle($request, Closure $next)
{
    if (Auth::check()) {
        $user = Auth::user();
        // Depuración: verifica el tipo de clase del usuario autenticado
        info('User class: ' . get_class($user));

        if (method_exists($user, 'hasRole')) {
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.inicioadmin');
            } elseif ($user->hasRole('teacher')) {
                return redirect()->route('teacher.crearclase');
            } elseif ($user->hasRole('student')) {
                return redirect()->route('student.avisos');
            }
        } else {
            // Mensaje de error si el método no existe
            abort(500, 'El método hasRole no está definido en el modelo de usuario.');
        }

        return redirect('/home');
    }

    return $next($request);
}

}
