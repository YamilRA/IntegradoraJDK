<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JidokwanController;
use App\Http\Controllers\LayoutController;
use App\Models\CustomUser;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;




Route::get('/',[JidokwanController::class,'vistaprincipal']);

Route::get('/login',[JidokwanController::class,'getlogin']);

Route::get('/cexamen',[JidokwanController::class,'crearexamen']);

Route::get('/cclase',[JidokwanController::class,'crearclase']);

Route :: get('/alumno/progresos', [StudentController:: class , 'progresos']);
Route :: get('/alumno/avisos', [StudentController:: class , 'avisos']);
Route :: get('/alumno/grupos', [StudentController:: class , 'grupos']);
Route :: get('/alumno/finanzas', [StudentController:: class , 'finanzas']);

Route::get('/admin', function () {
    return view('Admin/InicioAdmin');
});

Route::get('/admin/users', function () {
    return view('Admin/UsersAdmin');
});

Route::get('/admin/users', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/molde',[LayoutController::class,'molde']);


Route::get('/login/admin', [AdminController::class,'inicioAdmin']);
Route::get ('/login/admin/addUser',[AdminController::class,'users']);
Route::get ('/login/admin/addUser/userAdmin',[AdminController::class,'addAdmin']);
Route::get ('/login/admin/addUser/userProfe',[AdminController::class,'addProfesor']);
Route::get ('/login/admin/addUser/userAlumno',[AdminController::class,'addAlumno']);

Route::get('/admin/inicioadmin', [AdminController::class, 'dashboard'])->name('admin.inicioadmin');
Route::get('/teacher/crearclase', [TeacherController::class, 'dashboard'])->name('teacher.crearclase');
Route::get('/student/avisos', [StudentController::class, 'dashboard'])->name('student.avisos');
