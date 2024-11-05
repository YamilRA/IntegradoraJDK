<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $primaryKey = 'id';
    public $fillable = ['id', 'name', 'location', 'date', 'duration', 
                        "description", 'created_at', 'updated_at'];

    public function ExamStudent(){
        
        return $this->hasMany(ExamStudent::class, 'exam_id', 'id');
    }
}
