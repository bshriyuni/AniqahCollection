<?php

namespace App\Http\Controllers;

use App\Models\clothes;
use Illuminate\Http\Request;
use App\Models\orderDetail;

class DetailProdukController extends Controller
{
    public function index(Request $request, $kode_test){
        $produk = Clothes::where('kode_baju', $kode_test)->first();
        $order_details = orderDetail::where('kode_baju', $kode_test)->get();
        return view('user/detailproduk', compact('produk', 'order_details'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            "tanggal_Pengembalian" => 'required',
            "tanggal_Pengambilan" => 'required',
            "dewasa" => 'required',
            "kode_baju" => 'required',
            "no_telp" => 'required',
            "nama" => 'required',
            'bukti_pembayaran' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        try {
            $order_details = new orderDetail;
            $order_details->status = 'Menunggu Konfirmasi';
            $order_details->tgl_pengembalian = $validateData["tanggal_Pengembalian"];
            $order_details->tgl_pengambilan = $validateData["tanggal_Pengambilan"];
            $order_details->dewasa = $validateData["dewasa"];
            $order_details->anak = $validateData["dewasa"];
            $order_details->kode_baju = $validateData["kode_baju"];
            $order_details->no_hp = $validateData["no_telp"];
            $order_details->nama_pelanggan = $validateData["nama"];
    
            if ($request->hasFile('bukti_pembayaran')) {
                $imageName = time().'.'.$request->bukti_pembayaran->extension();
                $request->bukti_pembayaran->move(public_path('foto'), $imageName);
                $order_details->bukti_pembayaran = $imageName;
            }
    
            if ($order_details->save()) {
                return redirect()->route('product')->withSuccess('Product Telah Ditambahkan!!!');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data.');
            }
        } catch (\Exception $e) {
            // Log or handle the exception here
            return redirect()->back()->with('error', 'Terjadi kesalahan: '.$e->getMessage());
        }
    }
    
}