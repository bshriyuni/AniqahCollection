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


    public function store(Request $request){

        $request->validate([
            "tanggal_Pengembalian" => 'required',
            "tanggal_Pengambilan" => 'required',
            "dewasa" => 'required',
            "kode_baju" => 'required',
            "no_telp" => 'required',
            "nama" => 'required',
            // "pembayaran" => 'required'
        ]);
        $order_details = new orderDetail;
        $order_details->status = 'Menunggu Konfirmasi';
        $order_details->tgl_pengembalian = $request->tanggal_Pengembalian;
        $order_details->tgl_pengambilan = $request->tanggal_Pengambilan;
        $order_details->dewasa = $request->dewasa;
        $order_details->anak = $request->dewasa;
        $order_details->kode_baju = $request->kode_baju;
        $order_details->no_hp = $request->no_telp;
        $order_details->nama_pelanggan = $request->nama;
        // $order_details->pembayaran = $request->pembayaran;

        $order_details->save();
        
        return redirect()->route('product')->withSuccess('Product Telah Di tambahkan!!!');
    }
}