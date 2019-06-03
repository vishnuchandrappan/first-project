<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
      return $this->hasMany(Post::class);
    }

    public function publish(Post $post){

      $this->posts()->save($post);

      // Post::create([
      //   'title' => request('title'),
      //   'body'  => request('body'),
      //   'user_id' => auth()->id()
      // ]);
    }
}
