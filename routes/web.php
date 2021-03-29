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
    return view('layout.app');
});
Route::get('/student_table' , 'App\Http\Controllers\StudentsController@index');
Route::get('/Students/create' , 'App\Http\Controllers\StudentsController@create');
Route::post('/Students' , 'App\Http\Controllers\StudentsController@store')->name("Students");
Route::get('/Students/{student}', 'App\Http\Controllers\StudentsController@show');
Route::get('/Students/{student}/edit', 'App\Http\Controllers\StudentsController@edit');
Route::patch('/Students/{student}', 'App\Http\Controllers\StudentsController@update');
Route::delete('/Students/{student}', 'App\Http\Controllers\StudentsController@destroy');
Route::post('/Search' , 'App\Http\Controllers\StudentsController@search')->name("Search");



Route::get('/Fee_table' , 'App\Http\Controllers\FeesController@index');
Route::post('/Fee' , 'App\Http\Controllers\FeesController@store')->name("Students_Fee");
Route::post('/Fee_search' , 'App\Http\Controllers\FeesController@search')->name("FeeTableSearch");

