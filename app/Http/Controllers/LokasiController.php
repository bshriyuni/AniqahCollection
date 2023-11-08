<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lokasi;

class LokasiController extends Controller
{
    public function indexUser(){
        // Mengambil data lokasi terbaru
        $lokasiTerbaru = Lokasi::latest()->first();

        // Mengirim data ke view
        return view('user/lokasi', ['lokasiTerbaru' => $lokasiTerbaru]);
    }

    public function indexadmin(){
        // Mengambil data lokasi terbaru
        $lokasiTerbaru = Lokasi::latest()->first();

        // Mengirim data ke view
        return view('admin/lokasi', ['lokasiTerbaru' => $lokasiTerbaru]);
    }

    public function updateLocation(Request $request){

        // Validasi data input jika diperlukan
        $validatedData = $request->validate([
            'namaJalan' => 'required|max:255',
            'kotaProvinsi' => 'required|max:255',
            'negara' => 'required|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Buat instance model dan masukkan data dari permintaan
        $lokasi = new Lokasi();
        $lokasi->nama_jalan = $validatedData['namaJalan'];
        $lokasi->kota_prov = $validatedData['kotaProvinsi'];
        $lokasi->negara = $validatedData['negara'];
        $lokasi->latitude = $validatedData['latitude'];
        $lokasi->longitude = $validatedData['longitude'];
        $lokasi->save();

        // Simpan data ke dalam database
        if($lokasi->save()){
            // Jika berhasil, kirim pesan berhasil
            return back()->with('success', 'Data lokasi berhasil disimpan.');
        } else {
            // Jika gagal, kirim pesan gagal
            return back()->with('error', 'Gagal menyimpan data lokasi.');
        }
        
    }
}
