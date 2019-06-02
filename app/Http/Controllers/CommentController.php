<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{

    public function store(Post $post){

      // Comment::create([
      //   'post_id' => $post->id,
      //   'body'  => request('body')
      // ]);

      $this->validate(request(),[
        'body' => 'required|min:2'
      ]);

      $post->addComment(request('body'));

      return back();

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
