<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrator;
use App\Models\CustomUser;

class Notification extends Model
{
    protected $table = 'notifications';
    protected $primaryKey = 'id';
    public $fillable = ['admin_id', 'message'];

    public function Admin(){
        return $this->belongsTo(Administrator::class, 'admin_id', 'id');
    }

    public function CustomUser(){
        return $this->belongsToMany(CustomUser::class, 'user_id', 'id');
    }
}
