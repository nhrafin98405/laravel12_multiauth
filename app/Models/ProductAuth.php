<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ProductAuth extends Authenticatable
{
    protected $table = 'product_auths';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}