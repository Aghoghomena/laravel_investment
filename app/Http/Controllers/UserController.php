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


        $users = new Inv_user();
        $users->first_name = request('fname');
        $users->last_name = request('lname');
        $users->email = request('email');
        $users->password = request('password');
        $users->last_login = '2019-08-30 10:18:00';
        $users->save();
        return redirect('/user/list');
        //return request()->all();
    }

}
