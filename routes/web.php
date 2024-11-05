<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JidokwanController;
use App\Models\CustomUser;


Route::get('/',[JidokwanController::class,'vistaprincipal']);

Route::get('/login',[JidokwanController::class,'getlogin']);

Route::get('/cexamen',[JidokwanController::class,'crearexamen']);

Route::get('/cclase',[JidokwanController::class,'crearclase']);

Route :: get('/alumno/progresos', [AlumnoController:: class , 'progresos']);
Route :: get('/alumno/avisos', [AlumnoController:: class , 'avisos']);
Route :: get('/alumno/grupos', [AlumnoController:: class , 'grupos']);
Route :: get('/alumno/finanzas', [AlumnoController:: class , 'finanzas']);
