<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inv_user extends Model
{
    //allowed columns to be inserted and updated
    protected $fillable = [

        'first_name', 'last_name', 'email', 'password', 'last_login'
    ];

    //the fields that should not be inserted and updated

    protected $guarded = [

    ];
}
