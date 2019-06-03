<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller{

  public function __construct(){
    $this->middleware('auth')->except(['index','show']);
  }

  public function index(){
    $posts = Post::latest()->get();
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

    auth()->user()->publish(new Post(request(['title','body'])));

    // Post::create([
    //   'title' => request('title'),
    //   'body'  => request('body'),
    //   'user_id' => auth()->id()
    // ]);

    return redirect('/');
  }

  // public function show(){
  //   $post = POST::find(request('id'));
  //   return view('pages.post',compact('post'));
  // }

  // public function show($id){
  //   $post = POST::find($id);
  //   return view('pages.post',compact('post'));
  // }

  public function show(Post $post){  //Route model Binding
    return view('pages.post',compact('post'));
  }

}
