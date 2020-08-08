<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User_account extends Authenticatable
{
    
    protected $table='user_account';
    protected $fillable = [
        'name', 'email', 'password','username','level',
    ];
     protected $hidden = [
        'password', 'remember_token',
    ];
}
