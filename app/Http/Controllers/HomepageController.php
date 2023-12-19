<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index(){
        $topThree = DB::select("
        SELECT kode_baju, gambar, deskripsi, COUNT(*) AS total
        FROM order_details od
        JOIN clothes USING(kode_baju)
        GROUP BY kode_baju, gambar, deskripsi
        ORDER BY total DESC
        LIMIT 3");
        
        return view('user/Homepage', compact('topThree'));
    }
}
