<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('form');
    }
    public function submit(Request $req){
        $validate = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $email = $req->input('email');
        $password = $req->input('password');
        return 'Email is ' . $email . 'Password is ' . $password;
        // return $req->all();
    }
}
