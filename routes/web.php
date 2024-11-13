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
Route::get('/login', [UserController::class, 'getlogin'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.post');
Route::get('/users', [UserController::class, 'index'])->name('users.index');


Route::get('/crear/examen',[ProfesorController::class,'crearexamen']);
Route::get('/consulta/examenes',[ProfesorController::class,'consultaExamenes']);

Route::get('/crear/clase',[ProfesorController::class,'crearclase']);
Route::get('/modificar/clase',[ProfesorController::class,'modificarclase']);
Route::get('/asignar/alumno/clase',[ProfesorController::class,'asignarAlumnoClase']);
Route::get('/profesores/info-alumnos',[ProfesorController::class,'infoalumnos']);

Route :: get('/alumno/cintas', [AlumnoController:: class , 'cintas']) -> name('alumno.cintas');
Route :: get('/alumno/avisos', [AlumnoController:: class , 'avisos']) -> name('alumno.avisos');
Route :: get('/alumno/grupos', [AlumnoController:: class , 'grupos']) -> name('alumno.grupos');
Route :: get('/alumno/finanzas', [AlumnoController:: class , 'finanzas']) -> name('alumno.finanzas');
Route :: get('/alumno/eventos', [AlumnoController:: class , 'eventos']) -> name('alumno.eventos');
Route :: get('/alumno/progresos', [AlumnoController:: class , 'progresos']) -> name('alumno.progresos');
Route::get('/admin/users', function () {return view('Admin/UsersAdmin'); });

Route :: get('/alumno/progresos', [AlumnoController:: class , 'progresos']);
Route :: get('/alumno/avisos', [AlumnoController:: class , 'avisos']);
Route :: get('/alumno/grupos', [AlumnoController:: class , 'grupos']);
Route :: get('/alumno/finanzas', [AlumnoController:: class , 'finanzas']);
Route::get('/admin', function () {return view('Admin/InicioAdmin');});
Route::get('/admin/users', function () { return view('Admin/UsersAdmin');});
Route::get('/admin/users', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/molde',[LayoutController::class,'molde']);
Route::get('/login/admin', [AdminController::class,'inicioAdmin']);
Route::get ('/login/admin/addUser',[AdminController::class,'users']);

Route::get('/profesor/login', [ProfesorController::class, 'getlogin']);
Route::get ('/login/admin/addUser/userAdmin',[AdminController::class,'addAdmin']);
Route::get ('/login/admin/addUser/userProfe',[AdminController::class,'addProfesor']);
Route::get ('/login/admin/addUser/userAlumno',[AdminController::class,'addAlumno']);
Route::get('/admin/inicioadmin', [AdminController::class, 'dashboard'])->name('admin.inicioadmin');
Route::get('/teacher/crearclase', [ProfesorController::class, 'dashboard'])->name('teacher.crearclase');
Route::get('/student/avisos', [AlumnoController::class, 'dashboard'])->name('student.avisos');
