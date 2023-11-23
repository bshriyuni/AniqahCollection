<?php

namespace App\Http\Controllers;

use App\Models\clothes;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    public function indexAdmin()
    {
        $clothes = Clothes::all();
        return view('admin/product', compact('clothes'));
    }

    public function indexUser(){
        $clothes = clothes::all();
        return view('user/produk', compact('clothes'));
    }

    public function create(Request $request)
    {
        //Validasi data input jika diperlukan
        $validatedData = $request->validate([
            'kodeBaju' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jumlahDewasa' => 'required',
            'jumlahAnak' => 'required',
            'syaratKetentuan' => 'required',
            'harga' => 'required'
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('foto'), $imageName);

        // Buat instance model dan masukkan data dari permintaan
        $clothes = new clothes();
        $clothes->kode_baju = $validatedData['kodeBaju'];
        $clothes->deskripsi = $validatedData['deskripsi'];
        $clothes->gambar = $imageName;
        $clothes->jumlah_dewasa = $validatedData['jumlahDewasa'];
        $clothes->jumlah_anak = $validatedData['jumlahAnak'];
        $clothes->syarat_ketentuan = $validatedData['syaratKetentuan'];
        $clothes->harga = $validatedData['harga'];
        $clothes->save();

        // Simpan data ke dalam database
        if($clothes->save()){
          
            return back()->with('success', 'produk berhasil ditambahkan.');
        } else {
            // Jika gagal, kirim pesan gagal
            return back()->with('error', 'Gagal menambahkan produk.');
        }
    }

    public function edit($id){
    
    }

    public function delete($id){

        $produk = Clothes::findOrFail($id);

        // Hapus gambar (optional)
        if (file_exists(public_path('foto/' . $produk->gambar))) {
            unlink(public_path('foto/' . $produk->gambar));
        }

        // Hapus data dari database
        $produk->delete();

        return back()->with('success', 'produk berhasil ditambahkan.');
    }  
    
}
