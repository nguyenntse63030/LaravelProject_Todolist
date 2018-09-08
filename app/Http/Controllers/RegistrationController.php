<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest');
    }

    public function create() {

        return view('/SignUp');
    }

    public function store(){

        $this->validate(request(), [

            'username' => 'required|unique:users|regex:/^\S*$/u',
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        User::create([

            'username' => request('username'),
            'fullname' => request('fullname'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'role' => '0'
        ]);

        return redirect()->home();
    }
}
