<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

    public function comments(){
      return $this->hasMany(Comment::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function addComment($body){

      Comment::create([
        'body' => $body,
        'post_id' => $this->id,
        'user_id' => auth()->id()
      ]);

      // $this->comments()->create(compact('body'));

      // $this->comments()->create([
      //   'body' => $body,
      //   'user_id' => auth()->id
      // ]);

    }

    protected $guarded = [];
}
