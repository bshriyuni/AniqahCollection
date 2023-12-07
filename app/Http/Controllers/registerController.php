<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
                'notlp' => 'required'
            ]);
    
             // Enkripsi password sebelum disimpan ke database
             $validatedData['password'] = Hash::make($validatedData['password']);

             // Buat pengguna baru
             User::create($validatedData);

            return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
        } catch (ValidationException $e) {
            // Tangkap exception khusus validasi dan tampilkan pesan kesalahan validasi
            return redirect('/register')->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Tambahkan log pesan kesalahan untuk pemecahan masalah
            \Log::error('Registrasi gagal: ' . $e->getMessage());
            session()->flash('registerError', 'Registrasi gagal. Silakan coba lagi.');
            return redirect('/register');
        }
    }
}
