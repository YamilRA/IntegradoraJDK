<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use App\Models\CustomUser;
use Illuminate\Support\ServiceProvider;

class FortifyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
       
        Fortify::authenticateUsing(function (Request $request) {
            $user = CustomUser::where('username', $request->username)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

        
        Fortify::authenticateUsing(function (Request $request, $user) {
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.inicioadmin'); 
            } elseif ($user->hasRole('teacher')) {
                return redirect()->route('teacher.crearclase'); 
            } elseif ($user->hasRole('student')) {
                return redirect()->route('student.avisos'); 
            }

            return redirect('/home'); 
        });
        Fortify::loginView(function () {
            return view('users.index'); 
        });
    }
}
