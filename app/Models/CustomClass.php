<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomClass extends Model
{
    protected $table = 'customclasses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'teacher_id',
        'capacity',
        'schedule_day',
        'schedule_start',
        'schedule_end',
    ];

    public function Student()
    {
        return $this->hasOne(Student::class, 'student_id', 'id');
    }

    public function StudentClass(){

        return $this->hasMany(StudentClass::class, 'class_id', 'id');
    }

    public function teacher()
{
    return $this->belongsTo(Teacher::class, 'teacher_id');
}


}
