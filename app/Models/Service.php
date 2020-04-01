<?php

namespace App\models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Service extends Authenticatable
{
    use Notifiable;

    protected $table = 'services';
    
    protected $guarded = [''];
    
    protected $guard = 'services';

    protected $hidden = [
    'password', 'remember_token',
    ];

}
