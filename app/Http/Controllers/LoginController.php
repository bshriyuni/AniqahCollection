<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/pesanan');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
