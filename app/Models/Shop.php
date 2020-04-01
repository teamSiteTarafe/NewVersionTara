<?php

namespace App\models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Shop extends Authenticatable
{
    use Notifiable;

    protected $table = 'shops';
    
    protected $guarded = [''];
    
    protected $guard = 'shops';

    protected $hidden = [
    'password', 'remember_token',
    ];

}
