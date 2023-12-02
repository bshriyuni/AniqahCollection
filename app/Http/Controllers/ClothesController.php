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
        $clothes = clothes::paginate(6);
        
        return view('user/produk', compact('clothes'));
    }

    public function create(Request $request)
    {
        //Validasi data input jika diperlukan
        $validatedData = $request->validate([
            'kodeBaju' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'syaratKetentuan' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('foto'), $imageName);

        // Buat instance model dan masukkan data dari permintaan
        $clothes = new clothes();
        $clothes->kode_baju = $validatedData['kodeBaju'];
        $clothes->stok = $validatedData['stok'];
        $clothes->deskripsi = $validatedData['deskripsi'];
        $clothes->SnK = $validatedData['syaratKetentuan'];
        $clothes->harga = $validatedData['harga'];
        $clothes->gambar = $imageName;
        $clothes->save();

        // Simpan data ke dalam database
        if($clothes->save()){
            return back()->with('success', 'produk berhasil ditambahkan.');
        } else {
            // Jika gagal, kirim pesan gagal
            return back()->with('error', 'Gagal menambahkan produk.');
        }
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
    
    public function edit($id){
        $produk = Clothes::find($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id){
        $produk = Clothes::find($id);

        $produk->kode_baju = $request->input('kodeBaju');
        $produk->stok = $request->input('stok');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->SnK = $request->input('syaratKetentuan');
        $produk->harga = $request->input('harga');

        $produk->save();

        return back()->with('success', 'Pakaian berhasil diperbarui!');
    }
}