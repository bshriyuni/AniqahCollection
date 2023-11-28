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
        $kodeBaju = $request->kodeBaju;
        $deskripsi = $request->deskripsi;
        $foto = $request->foto;
        $jumlahDewasa = $request->jumlahDewasa;
        $jumlahAnak = $request->jumlahAnak;
        $syaratKetentuan = $request->syaratKetentuan;
        $harga = $request->harga;

        Clothes::create([
            "kode_baju"=>$kodeBaju,
            "deskripsi"=>$deskripsi,
            "foto"=>$foto,
            "jumlah_dewasa"=>$jumlahDewasa,
            "jumlah_anak"=>$jumlahAnak,
            "syarat_ketentuan"=>$syaratKetentuan,
            "harga"=>$harga
        ]);
        
        return back()->with('success', 'produk berhasil ditambahkan.');
    }

    public function edit($id){
        $clothes = clothes::where("id", $id)->get();
        $clothes = $clothes[0];
        return view("edit", ["clothes" => $clothes]);
    }

    public function update(Request $request, $id){
        $kodeBaju = $request->kodeBaju;
        $deskripsi = $request->deskripsi;
        $foto = $request->foto;
        $jumlahDewasa = $request->jumlahDewasa;
        $jumlahAnak = $request->jumlahAnak;
        $syaratKetentuan = $request->syaratKetentuan;
        $harga = $request->harga;

        Clothes::where("id", $id)->update([
            "kode_baju"=>$kodeBaju,
            "deskripsi"=>$deskripsi,
            "foto"=>$foto,
            "jumlah_dewasa"=>$jumlahDewasa,
            "jumlah_anak"=>$jumlahAnak,
            "syarat_ketentuan"=>$syaratKetentuan,
            "harga"=>$harga
        ]);

        $clothes = Clothes::all();
        return back()->with('success', 'produk berhasil diedit.');
    }

    public function delete($id){
        try {
            Clothes::destroy($id);
            dd('terhapus');
            return back()->with('success', 'produk berhasil dihapus');
        } catch (\Exception $e) {
            dd('tdk terhapus');
            return back()->with('error', 'Gagal menghapus produk. Error: ' . $e->getMessage());
        }
    }     
}