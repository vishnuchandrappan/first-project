<?php



Route::get('/', 'PostController@index');

Route::get('/abc', function (){
  return view('pages.about');
});
