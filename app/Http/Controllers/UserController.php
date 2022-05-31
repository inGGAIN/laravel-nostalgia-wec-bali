<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function loginForm(){
        return view('user.login');
    }

    function loginAction(Request $req){
        if(Auth::attempt((['username'=> $req->username, 'password'=> $req->password]))){
            $req->session()->regenerate();

            return redirect()->route('home');
        }else{
            return back()->withErrors(['username or password incorrect']);
        }
    }
}
