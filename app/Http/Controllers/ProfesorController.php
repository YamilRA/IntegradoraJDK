<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomClass; // Clase CustomClass para acceder a las clases
use App\Models\Student; // Modelo de estudiantes

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

    public function asignarAlumnoClase(){
        return view('Profesores.AsignarAlumnoClase');
    }

    // Método para consultar a los alumnos y sus clases
    public function infoAlumnosPorProfesor()
    {
        // Obtener todas las clases que imparte el profesor autenticado
        $profesor = auth()->user()->teacher; // Obtener al profesor usando el usuario autenticado
        $classes = $profesor->customClasses; // Obtener todas las clases que imparte el profesor
        
        // Para cada clase, obtener los estudiantes asignados a esa clase
        $studentsClass = [];
        foreach ($classes as $class) {
            $studentsClass[] = [
                'class' => $class,
                'students' => $class->students // Estudiantes asignados a la clase
            ];
        }

        // Pasar los datos a la vista
        return view('Profesores.ConsultarAlumnos', compact('studentsClass'));
    }

    public function consultaExamenes(){
        return view('Profesores.ConsultaExamenes');
    }
}
