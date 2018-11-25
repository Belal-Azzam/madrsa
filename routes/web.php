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

//students routes
Route::get('/students','StudentController@index')->name('students');
Route::get('/students/create','StudentController@create')->name('students.create');
Route::get('/students/{id}/edit','StudentController@edit')->name('students.edit');
Route::get('/students/{id}/show','StudentController@show')->name('students.show');
Route::delete('/students/{id}/destroy','StudentController@destroy')->name('students.destroy');
Route::put('/students/{id}/update','StudentController@update')->name('students.update');
Route::post('/students/store','StudentController@store')->name('students.store');

Route::resource('grades', 'GradeController');
//Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
