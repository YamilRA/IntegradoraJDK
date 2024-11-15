<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomClass;
use App\Models\Teacher;

class ClaseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required|integer',
            'capacity' => 'required|integer',
            'schedule_day' => 'required|string|max:50',
            'schedule_start' => 'required',
            'schedule_end' => 'required',
              ]);

              CustomClass::create([
                'teacher_id' => $request->teacher_id,
                'capacity' => $request->capacity,
                'schedule_day' => $request->schedule_day,
                'schedule_start' => $request->schedule_start,
                'schedule_end' => $request->schedule_end,
            
            ]);

            return redirect()->route('class.index')->with('success', 'Clase creada exitosamente.');
    }
    public function index()
    {
        $classes = CustomClass::with('teacher.person')->get(); 
        $teachers = Teacher::with('person')->get();
        return view('profesores.consultarclases', compact('classes', 'teachers'));
    }

    public function edit($id)
    {
        $class = CustomClass::findOrFail($id);

        return view('clases.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_id' => 'required|integer',
            'capacity' => 'required|integer',
            'schedule_day' => 'required|string|max:50',
            'schedule_start' => 'required',
            'schedule_end' => 'required',
            'status' => 'required|in:Active,Inactive',
        ]);

        $class = CustomClass::findOrFail($id);
        $class->update([
            'teacher_id' => $request->teacher_id,
            'capacity' => $request->capacity,
            'schedule_day' => $request->schedule_day,
            'schedule_start' => $request->schedule_start,
            'schedule_end' => $request->schedule_end,
            'status' => $request->status,
        ]);

        return redirect()->route('class.Consulta', $id)->with('success', 'Clase actualizada exitosamente.');
    }
}
