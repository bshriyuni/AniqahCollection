<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'username' => 'required|min:3|max:255|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|max:255',
            ]);
    
            User::create($validatedData);
        } catch (\Exception $e) {
            session()->flash('registerError', 'Registrasi gagal. Silakan coba lagi.');
            return redirect('/register');
        }
    
        return redirect('/login');
    }
}
