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
        return view('Alumno.Avisos');
    }

    public function grupos()
    {
        return view('Alumno.Grupos');
    }

    public function finanzas()
    {
        return view('Alumno.Finanzas');
    }
    public function progresos()
    {
        return view('Alumno.Progreso');
    }
    public function eventos(){
        return view('Alumno.Eventos');
    }

    public function cintas(){
        return view('Alumno.Cintas');
    }

    public function students_events()
    {
       
    }
    
}
