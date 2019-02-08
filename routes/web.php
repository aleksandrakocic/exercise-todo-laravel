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
    return view('welcome');
});

Route::get('/todos', function() {
    $todos = App\Todo::all();
    return view('todos', compact('todos'));
});
Route::get('/todos/{id}', function($id) {
    $todo = App\Todo::find($id);
    return view('todosid', compact('todo'));
});