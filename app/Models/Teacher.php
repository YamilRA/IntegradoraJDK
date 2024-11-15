<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    public $fillable = ['person_id', 'rfc', 'created_at', 'updated_at'];

    // Relación con las clases que imparte el profesor
    public function customClasses()
    {
        return $this->hasMany(CustomClass::class, 'teacher_id');
    }
}
