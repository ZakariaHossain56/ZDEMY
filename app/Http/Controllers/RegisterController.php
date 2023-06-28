<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(){
        //return request()->all();
        $attributes = request()->validate([
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'username'=>'required|max:255|min:3|unique:users,username',
            'email'=>'required|max:255|unique:users,email',
            'password'=>'required|min:8|max:255',
            'role'=>'required',
        ]);
        $attributes['password']=bcrypt($attributes['password']);

        //dd('success validation');
        $user = User::create($attributes);

        session()->flash('success','Your account has been created');

        return redirect('/home/login');
    }
}
