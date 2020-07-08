<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $table = 'winners';

    protected $fillable = [
        'user_id', 'offer_title','created_at','updated_at'
    ];

}
