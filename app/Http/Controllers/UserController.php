<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller{

    public function __construct(){
      $this->middleware('guest')->except(['destroy']);
    }

    public function create(){
      return view('user.create');
    }

    public function store(Request $request){

        $this->validate(request(),[
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required|confirmed'
        ]);

        $user = User::create([
          'name' => request('name'),
          'email' => request('email'),
          'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        return redirect('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }

    public function login(){
      return view('pages.login');
    }

    public function authenticate(){
      if(!auth()->attempt(request(['email','password']))){
        return back()->withErrors([
          'message' => 'Please check yout credentials and try again !'
        ]);
      }
      return redirect('/');
    }


    public function index(){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }
}
