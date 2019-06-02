<?php


Route::get('/create','PostController@create');
Route::post('/posts','PostController@store');


Route::get('/about', 'PostController@index');

Route::get('/', function(){
  return view('welcome');
});


Route::get('/contact', function (){
  return view('pages.about');
});
