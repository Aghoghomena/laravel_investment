<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use \App\Inv_user;
use Illuminate\Validation\Rules\In;

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

    public function edit(Inv_user $user) //this will respond to edit function
    {


        return view('settings.edit', compact('user'));
    }

    public function update(Inv_user $user){

        $user->first_name = request('fname');
        $user->last_name = request('lname');
        $user->email = request('email');
        $user->password = request('password');
        $user->last_login = '2019-08-30 10:18:00';

        $user->save();
        return redirect('/user');

    }

    public function  destroy(Inv_user $user){

        $user->delete();
    }


    public function show(Inv_user $user){


        return view('settings.single', compact('user'));

    }

}
