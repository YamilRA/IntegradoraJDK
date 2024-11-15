<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomClass extends Model
{
    protected $table = 'customclasses'; 
    protected $primaryKey = 'id';
    public $fillable = ['teacher_id', 'name', 'capacity', 'schedule_day', 'schedule_start', 'schedule_end'];

    // Relación con los estudiantes (muchos a muchos)
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_classes', 'class_id', 'student_id');
    }

    // Relación con el profesor (pertenece a un solo profesor)
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
