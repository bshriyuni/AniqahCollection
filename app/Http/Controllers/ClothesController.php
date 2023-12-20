<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\clothes;
use Illuminate\Http\Request;
use App\Models\orderDetail;

class ClothesController extends Controller
{
    public function getClothingData($kode_baju) {
        $clothingData = Clothes::where('id', $kode_baju)->first();
        return response()->json($clothingData);
    }

    public function update(Request $request, $kode_baju) {
        // Validate the request data
        $validatedData = $request->validate([
            'kodeBaju' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'stok' => 'required',
            'syaratKetentuan' => 'required',
            'harga' => 'required'
        ]);

        $clothing = Clothes::find($kode_baju);
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('foto'), $imageName);

        if ($clothing) {
            // Handle image upload if provided
            $clothing->kode_baju = $validatedData['kodeBaju'];
            $clothing->deskripsi = $validatedData['deskripsi'];
            $clothing->gambar = $imageName;
            $clothing->stok = $validatedData['stok'];
            $clothing->SnK = $validatedData['syaratKetentuan'];
            $clothing->harga = $validatedData['harga'];
            $clothing->save();
            
            return back()->with('success', 'Produk berhasil diupdate.');
        } else {
            return back()->with('error', 'Clothing not found');
        }
    }    

    public function indexAdmin()
    {
        $clothes = Clothes::paginate(9);
        return view('admin/product', compact('clothes'));
    }

    public function indexUser(Request $request){
        if ($request->input('search')) {
            $searchQuery = $request->input('search');
        } else {$searchQuery = "*";}
        if ($searchQuery == "*") {
            $clothes = clothes::paginate(6);
        } else {
            $clothes = clothes::where('kode_baju', $searchQuery)->paginate(6);
        }
        $topThree = DB::select("
        SELECT kode_baju, gambar, deskripsi, COUNT(*) AS total
        FROM order_details od
        JOIN clothes USING(kode_baju)
        GROUP BY kode_baju, gambar, deskripsi
        ORDER BY total DESC
        LIMIT 3");
        return view('user/produk', compact('clothes', 'topThree'));
    }

    public function create(Request $request)
    {
        //Validasi data input jika diperlukan
        $validatedData = $request->validate([
            'kodeBaju' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'syaratKetentuan' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('foto'), $imageName);

        // Buat instance model dan masukkan data dari permintaan
        $clothes = new clothes();
        $clothes->kode_baju = $validatedData['kodeBaju'];
        $clothes->stok = $validatedData['stok'];
        $clothes->deskripsi = $validatedData['deskripsi'];
        $clothes->SnK = $validatedData['syaratKetentuan'];
        $clothes->harga = $validatedData['harga'];
        $clothes->gambar = $imageName;
        $clothes->save();

        // Simpan data ke dalam database
        if($clothes->save()){
            return back()->with('success', 'produk berhasil ditambahkan.');
        } else {
            // Jika gagal, kirim pesan gagal
            return back()->with('error', 'Gagal menambahkan produk.');
        }
    }

    public function delete($id){
        $product = Clothes::findOrFail($id);

        // Delete associated order details
        $product->orderDetails()->delete();
    
        // Delete associated image (optional)
        if (file_exists(public_path('foto/' . $product->gambar))) {
            unlink(public_path('foto/' . $product->gambar));
        }
    
        // Delete the product from the database
        $product->delete();
    
        return back()->with('success', 'Product deleted successfully.');
    }
}