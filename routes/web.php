<?php

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('current_tasks' , 'TaskController@index');
Route::get('archived_tasks' , 'TaskController@archived');
Route::post('create_task' , 'TaskController@store');
Route::post('delete_task/{id}', 'TaskController@destroy');
Route::post('archive_task/{id}', 'TaskController@archive');
Route::post('edit_task', 'TaskController@edit');
