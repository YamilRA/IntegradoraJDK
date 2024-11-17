<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomClass extends Model
{
    protected $table = 'CustomClasses';
    protected $primaryKey = 'id';
    public $fillable = ['id', 'teacher_id', 'capacity', "schedule_day", "schedule_start", 
                        "schedule_end", 'created_at', 'updated_at'];

    public function Student()
    {
        return $this->belongsToMany(Student::class, 'student_classes', 'class_id', 'student_id');
    }

    public function StudentClass(){

        return $this->hasMany(StudentClass::class, 'class_id', 'id');
    }

    public function Teacher(){

        return $this->belongsToMany(Teacher::class, 'teacher_id', 'id');
    }
}
