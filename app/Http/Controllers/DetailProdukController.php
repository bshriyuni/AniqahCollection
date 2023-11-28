<?php

namespace App\Http\Controllers;

use App\Models\clothes;
use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function index(Request $request, $kode_test){
        $produk = Clothes::where('kode_baju', $kode_test)->first();
        return view('user/detailproduk', compact('produk'));
    }

    public function store(Request $request){
         
    }
}