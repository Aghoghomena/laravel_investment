<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function  create(){
        $company =[
            'first company',
            'second company'
        ];
        return view('create', ['company'=> $company, 'foo'=> 'foobar']);
    }
}
