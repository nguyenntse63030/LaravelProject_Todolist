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

Route::get('/','LoginController@index')->name('home');

Route::post('/login', 'LoginController@dispatcher');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/logout', 'LoginController@logout');

Route::get('/user/addtask', 'TaskController@create');
Route::post('/user/addtask', 'TaskController@store');

Route::get('/updateStatus', 'TaskController@updateStatus');
Route::get('/deleteTask/{tasks}', 'TaskController@delete');


