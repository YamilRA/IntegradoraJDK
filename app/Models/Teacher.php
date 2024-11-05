<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    public $fillable = ['id', 'person_id', 'rfc', 'created_at', 'updated_at'];

    public function People(){

        return $this->belongsTo(People::class, 'person_id', 'id');
    }

    public function CustomClass(){

        return $this->hasMany(CustomClass::class, 'teacher_id', 'id');
    }
}
