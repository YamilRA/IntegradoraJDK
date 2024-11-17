<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;
use App\Http\Controllers\Controller;

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

/*    public function dashboard()
    {
        return view('teacher.crearclase');
    }

    public function activeUsers()
{
    $activeUsers = User::where('status', 'active')->get(); // Solo usuarios activos
    return view('users.active', compact('activeUsers'));
}

*/
    public static function avisosTeacher(){
        $users= CustomUser::leftJoin('user_role as ur', 'ur.user_id', 'custom_users.id')
                            ->where('role_id', 2)->get();
         //return view('Profesores.Notifications', compact('users'));

         return $users;
      
    }
}
