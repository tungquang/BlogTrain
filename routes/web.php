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



Route::get('/','HomeController@index');
Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/admin','UserController@index');

Route::resource('/user','UserController');

Route::resource('/title','TitleController');

Route::resource('/post','PostController');

Route::resource('/role','RoleController');

Route::resource('/permission','PermissionController');
Route::post('user/role','UserController@attachRole')->name('add_role');
Route::get('user/{user_id}/role/{role_name}','UserController@getUserRole');
Route::Post('role/permission','RoleController@attachPermission');
