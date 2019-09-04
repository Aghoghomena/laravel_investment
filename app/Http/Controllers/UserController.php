<?php

namespace App\Http\Controllers;

use App\Inv_user;

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

//        dd(request(['first_name', 'last_name', 'email', 'password']));
        //Inv_user::create(request(['first_name', 'last_name', 'email', 'password']));

//        $validated = request()->validate([
//
//            'first_name' =>['required', 'min:3', 'max:200'],
//            'last_name' => 'required',
//            'email' =>'required',
//            'password' => 'required'
//        ]);
        Inv_user::create([
            'first_name' => request('fname'),
            'last_name' => request('lname'),
            'email' => request('email'),
            'password' => request('password'),
            'last_login' => '2019-08-30 10:18:00'

        ]);

        return redirect('/user');
        //return request()->all();
    }

    //edit

    public function edit(Inv_user $user) //this will respond to edit function
    {


        return view('settings.edit', compact('user'));
    }

    public function update(Inv_user $user){

//        Inv_user::update(request(['first_name', 'last_name', 'email', 'password']));

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
