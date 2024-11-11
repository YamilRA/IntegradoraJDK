<?php

namespace App\Http\Controllers;

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
}
