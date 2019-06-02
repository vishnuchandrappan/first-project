<?php


Route::get('/', 'PostController@index');

Route::get('/create','PostController@create');

Route::post('/posts','PostController@store');
Route::get ('/posts',function(){
  return redirect('/');
});

Route::get('/posts/{post}', 'PostController@show');




Route::post('/posts/{post}/comment','CommentController@store');
