<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\UserRol;
use App\Models\Role;

class CustomUser extends Model
{
    protected $table = 'custom_users';
    protected $primaryKey = 'id';
    public $fillable = ['person_id', 'username', 'password', 'email', 'registration_date', 'active'];
    protected $hidden = ['password', 'remember_token'];

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
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
    }

   
    public function hasRole($roleName)
    {
        return $this->roles()->where('name', $roleName)->exists();
    }
}
