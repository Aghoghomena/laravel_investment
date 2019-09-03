<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Inv_user;

class UserController extends Controller
{
    //
    public function index(){

        $users = Inv_user::all();

        return view('settings.users', ['users'=> $users]);
    }

    //create user
    public function create(){


        return view('settings.create');
    }

    //create user
    public function store(){


        $users = new Inv_user();
        $users->first_name = request('fname');
        $users->last_name = request('lname');
        $users->email = request('email');
        $users->password = request('password');
        $users->last_login = '2019-08-30 10:18:00';
        $users->save();
        return redirect('/user');
        //return request()->all();
    }

    //edit

    public function edit($id) //this will respond to edit function
    {

        $user = Inv_user::find($id);

        return view('settings.edit', compact('user'));
    }

    public function update($id){

        $user = Inv_user::find($id);

        $user->first_name = request('fname');
        $user->last_name = request('lname');
        $user->email = request('email');
        $user->password = request('password');
        $user->last_login = '2019-08-30 10:18:00';

        $user->save();
        return redirect('/user');

    }

}
