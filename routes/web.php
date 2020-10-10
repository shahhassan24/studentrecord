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

//students record
Route::get('students','StudentController@index')->name('students.index');
 Route::get('students/create','StudentController@create')->name('students.create');
 Route::get('students/edit','StudentController@edit')->name('students.edit');
 Route::get('students/detail','StudentController@detail')->name('students.detail');
 Route::post('students/update','StudentController@update')->name('students.update');
 Route::post('students/delete','StudentController@delete')->name('students.delete');
 Route::post('students/store','StudentController@store')->name('students.store');
