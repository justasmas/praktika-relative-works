<?php


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');
Route::resource('tasks', 'TasksController');
