<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Data extends Model
{

    protected $table = 'data';

    protected $fillable = [
        'email','created_at','updated_at',
    ];

}
