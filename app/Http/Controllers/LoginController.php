<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest',['except' => 'logout']);
    }

    public function index(){
        return view('/welcome');
    }

    public function dispatcher(){

        $buttonType = request('btn');

        if ($buttonType == 'Sign Up'){

            return redirect('/register');
        }

        $result = auth()->attempt(request(['username', 'password']));

        if (!$result){

            return back()
                ->withErrors([
                   'message' => 'Invalid Username or Password!!!'
                ]);
        } else {

            if (Auth::user()->role == '1'){

                $userInfo = User::get();
                return view('LoginSuccess.Admin', compact('userInfo'));

            } else {

                session([
                    'Auth' => Auth::user()
                ]);

                return redirect('/user/addtask');
            }

        }
    }

    public function logout(){

        auth()->logout();

        return redirect()->home();
    }
}
