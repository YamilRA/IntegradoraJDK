<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\UserRol;

class CustomUser extends Model
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


   
    public function hasRole($roleName)
    {
        return $this->roles()->where('name', $roleName)->exists();
    }
}

}