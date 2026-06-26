<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Students extends Authenticatable
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
