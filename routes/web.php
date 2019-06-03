<?php

Route::get('/', 'PostController@index')->name('home');
Route::get('/create','PostController@create');
Route::post('/posts','PostController@store');
Route::get ('/posts',function(){
  return redirect('/');
});
Route::get('/posts/{post}', 'PostController@show');


Route::post('/posts/{post}/comment','CommentController@store');
Route::get('/posts/{post}/comment',function(){
  return redirect('/');
});


Route::get('/register','UserController@create');
Route::post('/register','UserController@store');
Route::get('/login','UserController@login');
ROute::post('/login','UserController@authenticate');
Route::get('/logout','UserController@destroy');
