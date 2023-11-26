<?php

namespace App\Http\Controllers;

use App\Models\orderDetail;
use Illuminate\Http\Request;
use App\Models\clothes;

class DetailProdukController extends Controller
{
    public function index($id){
        $clothing = Clothes::findOrFail($id); // Ambil data produk berdasarkan ID

        return view('user/detailproduk', compact('clothing'));
    }

    public function store(Request $request){
         
    }

    public function booking(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required',   
            'notlp'=> 'required',
            'kodeBaju' => 'required',
            'jumlahDewasa' => 'required|numeric|min:1',
            'jumlahAnak' => 'numeric|min:1',
            'tglAmbil' => 'required',
            'tglBalik' => 'required',
            'status',
        ]);

        // Set status default jika tidak ada yang dikirimkan
        $status = $request->input('status', 'Menunggu Konfirmasi');

        $orderan = new orderDetail();
        $orderan->kode_baju = $validatedData['kodeBaju'];
        $orderan->nama_pelanggan = $validatedData['nama'];
        $orderan->no_hp = $validatedData['notlp'];
        $orderan->dewasa = $validatedData['jumlahDewasa'];
        $orderan->anak = $validatedData['jumlahAnak'];
        $orderan->tgl_pengambilan = $validatedData['tglAmbil'];
        $orderan->tgl_pengembalian = $validatedData['tglBalik'];
        $orderan->status = $status;
        $orderan->save();
    }
}
