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
        return view('admin/product', compact('clothes'));
    }

    public function indexUser(){
        $clothes = clothes::all();
        return view('user/produk', compact('clothes'));
    }

    /**
     * Show the form for creating a new resource.
     */
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



        // Validasi data input jika diperlukan
        // $validatedData = $request->validate([
        //     'kodeBaju' => 'required',
        //     'deskripsi' => 'required',
        //     'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'jumlahDewasa' => 'required',
        //     'jumlahAnak' => 'required',
        //     'syaratKetentuan' => 'required',
        //     'harga' => 'required'
        // ]);

        // // Proses unggah gambar
        // $fotoPath = $request->file('foto')->store('public/foto/clothes');

        // // Buat instance model dan masukkan data dari permintaan
        // $clothes = new clothes();
        // $clothes->kode_baju = $validatedData['kodeBaju'];
        // $clothes->deskripsi = $validatedData['deskripsi'];
        // $clothes->foto = $fotoPath;
        // $clothes->jumlah_dewasa = $validatedData['jumlahDewasa'];
        // $clothes->jumlah_anak = $validatedData['jumlahAnak'];
        // $clothes->syarat_ketentuan = $validatedData['syaratKetentuan'];
        // $clothes->harga = $validatedData['harga'];
        // $clothes->save();

        // // Simpan data ke dalam database
        // if($clothes->save()){
        //     // Jika berhasil, kirim pesan berhasil
        //     return back()->with('success', 'produk berhasil ditambahkan.');
        // } else {
        //     // Jika gagal, kirim pesan gagal
        //     return back()->with('error', 'Gagal menambahkan produk.');
        // }
        
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
