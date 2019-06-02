<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller{

  public function index(){
    $posts = Post::get();
    return view('welcome',compact('posts'));
  }


  public function create(){
    return view('pages.create');
  }


  public function store(){

    $this->validate(request(),[
      'title' => 'required',
      'body'  => 'required'
    ]);

    Post::create([
      'title' => request('title'),
      'body'  => request('body')
    ]);

    return redirect('/');
  }


}
