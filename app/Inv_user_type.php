<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inv_user_type extends Model
{
    //

    protected $fillable = [
        'name', 'type_desc', 'update_at'
    ];

    public function user(){
        return $this->hasMany('App\Inv_user', 'user_type', 'id');
    }
}
