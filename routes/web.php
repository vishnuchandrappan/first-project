<?php


Route::get('/', 'PostController@index');

Route::get('/create','PostController@create');

Route::post('/posts','PostController@store');

Route::get('/posts/{post}', 'PostController@show');
