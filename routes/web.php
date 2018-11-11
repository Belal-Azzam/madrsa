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
//
Route::get('/', function () {
    return view('welcome');
});

Route::get('/students','StudentController@index')->name('students');
Route::get('/students/create','StudentController@create')->name('students.create');
Route::post('/students/store','StudentController@store')->name('students.store');
//Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
