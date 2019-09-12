<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route all
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/company', 'PagesController@company');

//user
Route::Resource('user', 'UserController');
Route::get('/user/{user}/{status}', 'UserController@disenable');
//Route::get('/user', 'UserController@index');
//Route::get('/user/create', 'UserController@create');
//Route::get('/user/{project}', 'UserController@show');
//Route::post('/user', 'UserController@store');
//Route::get('/user/{project}/edit', 'UserController@edit');
//Route::patch('/user/{project}', 'UserController@update');
//Route::delete('/user/{project}', 'UserController@destroy');

//company
Route::get('/company/create', 'CompanyController@create');

//UserType

Route::Resource('usertype', 'UserTypeController');
