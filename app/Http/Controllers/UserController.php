<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Inv_user;

class UserController extends Controller
{
    //
    public function users(){

        $users = Inv_user::all();

        return view('settings.users', ['users'=> $users]);
    }

    //create user
    public function create(){


        return view('settings.create_user');
    }

    //create user
    public function save(){


        return request()->all();
    }

}
