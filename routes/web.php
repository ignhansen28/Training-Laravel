<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', 'StudentController@index');

Route::post('/create/student', 'StudentController@create');

Route::get('/edit/{id}/student', 'StudentController@edit');

Route::post('/update/{id}/student', 'StudentController@update');

Route::get('/delete/{id}/student', 'StudentController@delete');