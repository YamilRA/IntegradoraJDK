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

    public function people(){
        return $this->hasMany(People::class, 'user_id', 'id');
    }

    public function notification(){
        return $this->hasToMany(Notification::class, 'user_id', 'id');
    }

}