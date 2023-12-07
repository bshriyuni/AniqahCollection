<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index(){// Cek apakah ada pengguna yang sudah login
        if (Auth::check()) {
            // Mengambil objek pengguna yang sudah login
            $user = Auth::user();

            // Mengambil nama pengguna
            $username = $user->username;// Ganti 'name' dengan nama kolom yang menyimpan nama pengguna di tabel pengguna
            $name = $user->name;
            $email = $user->email;
            $password = $user->password = str_repeat('*', 5);
            $notlp = $user->notlp;
            $created_at = $user->created_at;
        } else {
            // Tidak ada pengguna yang sudah login
            $username = null;
        }
        // Mengembalikan tampilan dengan menyematkan nama pengguna
        return view('/user/profil/profil', [
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'password' => $password, // Menggantikan password dengan karakter bintang
            'notlp' => $notlp,
            'created_at' => $created_at
        ]);
    }

    public function edit(){
        if (Auth::check()) {
            // Mengambil objek pengguna yang sudah login
            $user = Auth::user();

            // Mengambil nama pengguna
            $username = $user->username;// Ganti 'name' dengan nama kolom yang menyimpan nama pengguna di tabel pengguna
            $name = $user->name;
            $email = $user->email;
            $password = $user->password = str_repeat('*', 5);
            $notlp = $user->notlp;
            $created_at = $user->created_at;
        } else {
            // Tidak ada pengguna yang sudah login
            $username = null;
        }
        // Mengembalikan tampilan dengan menyematkan nama pengguna
        return view('/user/profil/editProfil', [
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'password' => $password, // Menggantikan password dengan karakter bintang
            'notlp' => $notlp,
            'created_at' => $created_at
        ]);
    }

    public function update(Request $request){
        // Validasi data dari formulir jika diperlukan
        $request->validate([
            'username' => 'string|max:255',
            'nama' => 'string|max:255',
            'email' => 'email|max:255',
            'password' => 'nullable|string|min:6',
            'noTlp' => 'nullable|numeric',
            // Sesuaikan dengan kebutuhan validasi lainnya
        ]);
    
        // Dapatkan pengguna yang sedang login
        $user = Auth::user();
    
        // Update data pengguna berdasarkan input formulir
        if ($request->filled('username')) {
            $user->username = $request->input('username');
        }
        if ($request->filled('nama')) {
            $user->name = $request->input('nama');
        }
        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        if ($request->filled('noTlp')) {
            $user->notlp = $request->input('noTlp');
        }
        // Update kolom lainnya sesuai kebutuhan
    
        // Simpan perubahan
        if ($user->save()) {
            // Jika berhasil, kirim pesan berhasil
            return back()->with('success', 'Profil berhasil diperbarui');
        } else {
            // Jika gagal, kirim pesan gagal
            return back()->with('error', 'Gagal memperbarui profil');
        }
    }

    public function profilPesanan(){
        if (Auth::check()) {
            // Mengambil objek pengguna yang sudah login
            $user = Auth::user();

            // Mengambil nama pengguna
            $username = $user->username;// Ganti 'name' dengan nama kolom yang menyimpan nama pengguna di tabel pengguna
            $name = $user->name;
            $email = $user->email;
            $password = $user->password = str_repeat('*', 5) . substr($user->password, -1);
            $notlp = $user->notlp;
            $created_at = $user->created_at;
        } else {
            // Tidak ada pengguna yang sudah login
            $username = null;
        }

        return view('/user/profil/profilPesanan', [
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'password' => $password, // Menggantikan password dengan karakter bintang
            'notlp' => $notlp,
            'created_at' => $created_at
        ]);

        
    }
}
