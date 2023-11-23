<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('admin/testimoni', compact('testimonis'));
    }

    public function user(){
        $testimonis = Testimoni::all();
        return view('user/testimoni', compact('testimonis'));
    }

    public function store(Request $request)
    {
        // Validasi form di sini jika diperlukan
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('foto'), $imageName);

        // Simpan data ke database
        $testimoni = Testimoni::create(['gambar' => $imageName]);

        // Mengembalikan data sebagai respons JSON
        // return response()->json([
        //     'id' => $testimoni->id,
        //     'gambar' => $testimoni->gambar,
        // ]);
        return back()->with('success', 'testimoni berhasil ditambahkan.');

    }

    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);

        // Hapus gambar (optional)
        if (file_exists(public_path('foto/' . $testimoni->gambar))) {
            unlink(public_path('foto/' . $testimoni->gambar));
        }

        // Hapus data dari database
        $testimoni->delete();

        // Set pesan sesi
        session()->flash('success', 'Testimoni berhasil dihapus');

        // return response()->json(['message' => 'Testimoni berhasil dihapus']);
        return back()->with('success', 'testimoni berhasil dihapus.');

    }
    }
