<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inv_user extends Model
{

    public function type(){

        return $this->belongsTo('App\Inv_user_type', 'user_type', 'id');

    }
    //allowed columns to be inserted and updated
    protected $fillable = [

        'first_name', 'last_name', 'email', 'password', 'last_login', 'status'
    ];

    //the fields that should not be inserted and updated

    protected $guarded = [

    ];

    //update status
    public function update_status($status){
      $this->update(['status'=> $status]);
    }

}
