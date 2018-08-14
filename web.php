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
    return view('homeForm');
});
Route::get('/edit/{id}', 'notesController@edit');
Route::patch('/updated/{id}', 'notesController@update');
Route::post('/create', 'notesController@store');
Route::delete('/delete/{id}', 'notesController@destroy');



Route::post('/createTodo', 'todosController@store');
Route::delete('/deleteTodo/{id}', 'todosController@destroy');
Route::get('/editTodo/{id}', 'todosController@edit');
Route::patch('/updatedTodo/{id}', 'todosController@update');
