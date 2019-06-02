<?php


Route::get('/', 'PostController@index');

Route::get('/create','PostController@create');

Route::post('/posts','PostController@store');

Route::get('/about', 'PostController@about');

Route::get('/contact', function (){
  return view('pages.about');
});
