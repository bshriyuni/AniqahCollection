<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function index(){
        return view('user/detailproduk');
    }

    public function store(Request $request){
         
    }
}
