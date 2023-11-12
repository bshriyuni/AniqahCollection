<?php

namespace App\Http\Controllers;

use App\Models\clothes;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexAdmin()
    {
        $clothes = Clothes::all();
        return view('admin/produk', compact('clothes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validasi data input jika diperlukan
        $validatedData = $request->validate([
            'kodeBaju' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|max:255',
            'kategoriBaju' => 'required',
            'syaratKetentuan' => 'required',
            'harga' => 'required',
            'jumlahStok' => 'required'
        ]);

        // Buat instance model dan masukkan data dari permintaan
        $clothes = new clothes();
        $clothes->kode_baju = $validatedData['kodeBaju'];
        $clothes->deskripsi = $validatedData['deskripsi'];
        $clothes->foto = $validatedData['foto'];
        $clothes->kategori_baju = $validatedData['kategoriBaju'];
        $clothes->syarat_ketentuan = $validatedData['syaratKetentuan'];
        $clothes->harga = $validatedData['harga'];
        $clothes->jumlah_stok = $validatedData['jumlahStok'];
        $clothes->save();

        // Simpan data ke dalam database
        if($clothes->save()){
            // Jika berhasil, kirim pesan berhasil
            return back()->with('success', 'produk berhasil ditambahkan.');
        } else {
            // Jika gagal, kirim pesan gagal
            return back()->with('error', 'Gagal menambahkan produk.');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(clothes $clothes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clothes $clothes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clothes $clothes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clothes $clothes)
    {
        //
    }
}
