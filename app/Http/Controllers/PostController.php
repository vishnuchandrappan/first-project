<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller{

  public function index(){
    $posts = App\Post::get();
    return $posts;
  }

}
