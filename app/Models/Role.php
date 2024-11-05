<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    public $fillable = ['id','name','created_at', 'updated_at'];

    public function People()
    {
        return $this->belongsTo(People::class, 'person_id', 'id');
    }

    public function UserRol(){

        return $this->hasMany(UserRol::class, 'role_id', 'id');
    }
}
