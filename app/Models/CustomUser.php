<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CustomUser extends Authenticatable
{
    protected $table = 'custom_users';
    protected $primaryKey = 'id';
    public $fillable = ['person_id','username','password','email', 'registration_date', 'active', ];

    public function UserRol(){
        return $this->hasMany(UserRol::class, 'user_id', 'id');
    }

    public function Loan(){

        return $this->hasMany(Loan::class, 'user_id', 'id');
    }

    
    public function roles()
{
    return $this->belongsToMany(Role::class, 'user_role', 'user_id', 'role_id');
}
   
public function hasRole($role)
{
    return $this->roles->contains('name', $role);
}

}