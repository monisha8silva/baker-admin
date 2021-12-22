<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class Owner extends Authenticatable
{
    protected $table = 'users';    
}
