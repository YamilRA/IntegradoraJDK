<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\UserRol;
use App\Models\Loan;
use App\Models\Notification;

class CustomUser extends Model
{
    protected $table = 'custom_users';
    protected $primaryKey = 'id';
    public $fillable = ['username','password','email', 'registration_date', 'active', ];

    public function userRoles()
    {
        return $this->hasMany(UserRol::class, 'user_id', 'id');
    }

    public function loan()
    {
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