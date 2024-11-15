<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;
use App\Http\Controllers\Controller;
use App\Models\Student;

class ProfesorController extends Controller
{
    public function vistaprincipal(){
        return view('inicio');
    }

    public function crearexamen(){
        return view('Profesores.CrearExamen');
    }

    public function crearclase(){
        return view('Profesores.CrearClase');
    }

    public function modificarclase(){
        return view('Profesores.ModificarClase');
    }

    public function asignarAlumnoClase($CustomClassId){
        return redirect()-> route('asignar.alumno');
    }

    public function infoalumnos(){
        return view('Profesores.ConsultarAlumnos');
    }

    public function consultaExamenes(){
        return view('Profesores.ConsultaExamenes');
    }
}
