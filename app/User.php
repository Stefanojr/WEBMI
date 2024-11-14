<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
  // app/Models/User.php


    protected $fillable = [
        'username',
        'password',
        'id',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setRoleAttribute($value)
    {
        if ($this->id == 1) {
            $this->attributes['role'] = 'superadmin';
        } elseif ($this->id == 2) {
            $this->attributes['role'] = 'unit';
        } else {
            $this->attributes['role'] = 'viewer';
        }
    }
}


