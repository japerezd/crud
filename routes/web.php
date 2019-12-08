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

Route::get('/', function () {
    return view('alumnos.index');
});


Route::resource('alumnos','AlumnoController');
Route::get('alumnos/create','AlumnoController@create')->name('alumnos.create')->middleware('idApp');
Route::get('alumnos','AlumnoController@index')->name('alumnos.index');