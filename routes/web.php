<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JidokwanController;
use App\Models\CustomUser;


Route::get('/',[JidokwanController::class,'vistaprincipal']);

Route::get('/login',[JidokwanController::class,'getlogin']);

Route::get('/cexamen',[JidokwanController::class,'crearexamen']);

Route::get('/cclase',[JidokwanController::class,'crearclase']);

Route :: get('/alumno/progresos', [AlumnoController:: class , 'progresos']) -> name('alumno.progresos');
Route :: get('/alumno/avisos', [AlumnoController:: class , 'avisos']) -> name('alumno.avisos');
Route :: get('/alumno/grupos', [AlumnoController:: class , 'grupos']) -> name('alumno.grupos');
Route :: get('/alumno/finanzas', [AlumnoController:: class , 'finanzas']) -> name('alumno.finanzas');


Route::get('/login/admin', [AdminController::class,'inicioAdmin']);
Route::get ('/login/admin/addUser',[AdminController::class,'users']);
Route::get ('/login/admin/addUser/userAdmin',[AdminController::class,'addAdmin']);
Route::get ('/login/admin/addUser/userProfe',[AdminController::class,'addProfesor']);
Route::get ('/login/admin/addUser/userAlumno',[AdminController::class,'addAlumno']);