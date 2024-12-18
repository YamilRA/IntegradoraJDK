<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JidokwanController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProfesorController;
use App\Models\CustomUser;
use App\Http\Controllers\UserController;



Route::get('/',[ProfesorController::class,'vistaprincipal']);

Route::get('/login',[ProfesorController::class,'getlogin']);

Route::get('/crear/examen',[ProfesorController::class,'crearexamen']);

Route::get('/crear/clase',[ProfesorController::class,'crearclase']);

Route::get('/modificar/clase',[ProfesorController::class,'modificarclase']);

Route::get('/asignar/alumno/clase',[ProfesorController::class,'asignarAlumnoClase']);

Route :: get('/alumno/progresos', [AlumnoController:: class , 'progresos']);
Route :: get('/alumno/avisos', [AlumnoController:: class , 'avisos']);
Route :: get('/alumno/grupos', [AlumnoController:: class , 'grupos']);
Route :: get('/alumno/finanzas', [AlumnoController:: class , 'finanzas']);


Route::get('/admin/users', function () {
    return view('Admin/UsersAdmin');
});

Route::get('/admin/users', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/molde',[LayoutController::class,'molde']);


Route::get('/login/admin', [AdminController::class,'inicioAdmin']);
Route::get ('/login/admin/addUser',[AdminController::class,'users']);
Route::get ('/login/admin/addUser/userAdmin',[AdminController::class,'addAdmin']);
Route::get ('/login/admin/addUser/userProfe',[AdminController::class,'addProfesor']);
Route::get ('/login/admin/addUser/userAlumno',[AdminController::class,'addAlumno']);
