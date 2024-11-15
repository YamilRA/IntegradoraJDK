<?php

namespace App\Http\Controllers;
use App\Models\StudentBelt;
use App\Models\ExamStudent;
use App\Models\EventStudent;
use App\Models\StudentClass;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Teacher;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function avisos()
    {
        return view('Alumnos/Avisos');
    }

    public function grupos()
    {
        return view('Alumnos/Grupos');
    }

    public function finanzas()
    {
        return view('Alumnos/Finanzas');
    }
    public function progresos()
    {
        return view('Alumnos/Progreso');
    }
    public function eventos(){
        return view('Alumnos/Eventos');
    }

    public function cintas(){
        return view('Alumnos/Cintas');
    }

    public function cintas_examenes()
    {
        $studentbelt = StudentBelt::all();
        return view('Alumnos/Progreso',compact('studentbelt'));
    }

}
