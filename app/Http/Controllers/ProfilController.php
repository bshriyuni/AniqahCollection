<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\orderDetail;
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
            $user_id = $user->id;// Ganti 'name' dengan nama kolom yang menyimpan nama pengguna di tabel pengguna
            $username = $user->username;// Ganti 'name' dengan nama kolom yang menyimpan nama pengguna di tabel pengguna
            $name = $user->name;
            $email = $user->email;
            $password = $user->password = str_repeat('*', 5) . substr($user->password, -1);
            $notlp = $user->notlp;
            $created_at = $user->created_at;
            $userId = $user->id;
        } else {
            // Tidak ada pengguna yang sudah login
            $user = null;
            $userId = null;
        }

        $profil = [
        'user_id' => $user_id,
        'username' => $username,
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'notlp' => $notlp,
        'created_at' => $created_at];

        $pesanan = DB::table('order_details')
            ->select('clothes.gambar', 'order_details.id', 'order_details.kode_baju', 'order_details.total_harga', 'order_details.status', 'order_details.pembayaran', 'order_details.nama_lengkap', 'order_details.no_hp', 'order_details.alamat', 'order_details.jumlah_pesanan', 'order_details.tgl_pengambilan', 'order_details.tgl_pengembalian')
            ->join('clothes', 'order_details.kode_baju', '=', 'clothes.kode_baju')
            ->join('users', 'order_details.users_id', '=', 'users.id')
            ->where('users.id', $userId)
            ->whereNotIn('order_details.status', ['Selesai', 'Dibatalkan', 'Pesanan Dibatalkan'])
            ->orderBy('order_details.id', 'DESC')
            ->paginate(3);

        $riwayat = DB::table('order_details')
            ->select('clothes.gambar', 'order_details.id', 'order_details.kode_baju', 'order_details.total_harga', 'order_details.status', 'order_details.pembayaran', 'order_details.nama_lengkap', 'order_details.no_hp', 'order_details.alamat', 'order_details.jumlah_pesanan', 'order_details.tgl_pengambilan', 'order_details.tgl_pengembalian')
            ->join('clothes', 'order_details.kode_baju', '=', 'clothes.kode_baju')
            ->join('users', 'order_details.users_id', '=', 'users.id')
            ->where('users.id', $userId)
            ->whereIn('order_details.status', ['Selesai', 'Dibatalkan', 'Pesanan Dibatalkan'])
            ->orderBy('order_details.id', 'DESC')
            ->paginate(3);

        return view('/user/profil/profilPesanan', compact('profil', 'pesanan', 'riwayat'));
    }

    public function updatestatus($id){
        $pesanan = OrderDetail::findOrFail($id);
        $pesanan->update(['status' => 'Pesanan dibatalkan']);
        return back()->with('success', 'Pesanan dibatalkan');
    }
}
