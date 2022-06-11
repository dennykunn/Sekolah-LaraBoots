<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(){
        return view('login');
    }

    // PROSES LOGIN
    public function proses_login()
    {
        request()->validate(
            [
                'name'      => 'required',
                'password'  => 'required|min:8',
                'level'     => 'required',
            ]
        );

        $auth = request()->only('name', 'password', 'level');

        if (auth()->attempt($auth)) {
            return redirect('/main');
        }

        return redirect('/')->with('error', 'Username, Password atau Level salah');
    }

    // LOGOUT
    public function logout(){
        session()->flush();
        auth()->logout();
        return redirect('/');
    }
}
