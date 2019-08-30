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
Route::get('/user/list', 'UserController@users');
Route::get('/user/create', 'UserController@create');
//create user
Route::post('/save_user', 'UserController@save');
//company
Route::get('/company/create', 'CompanyController@create');
