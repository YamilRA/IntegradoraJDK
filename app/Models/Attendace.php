<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendace extends Model
{
    protected $table = 'attendance';
    protected $primaryKey = 'id';
    public $fillable = ['id', 'student_id','class_id','date','attendace_status',
                        'comment', 'created_at', 'updated_at'];

    public function Student()
    {
        return $this->hasOne(Student::class, 'student_id', 'id');
    }
}
