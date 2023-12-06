<?php

namespace App\Http\Controllers;

use App\Models\carapesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarapesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function indexUser()
    {
        $carapesan = carapesan::all();
        return view('user/carapemesanan', compact('carapesan'));
    }

    public function indexAdmin()
    {
        $carapesan = carapesan::all();
        return view('admin/carapemesanan', compact('carapesan'));
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'noStep' => 'required',
            'step' => 'required|max:255'
        ]);

        $carapesan = new carapesan();
        $carapesan->no = $validatedData['noStep'];
        $carapesan->step = $validatedData['step'];
        $carapesan->save();

        if($carapesan->save()){
            // Jika berhasil, kirim pesan berhasil
            return back()->with('success', 'step berhasil ditambahkan.');
        } else {
            // Jika gagal, kirim pesan gagal
            return back()->with('error', 'Gagal menambahkan step');
        }
    }

    public function destroy($id)
    {
        $carapesan = carapesan::findOrFail($id);

        // Hapus data dari database
        $carapesan->delete();

        // return response()->json(['message' => 'Testimoni berhasil dihapus']);
        return back()->with('success', 'step berhasil dihapus.');

    }

    public function edit($id){
        $carapesan = carapesan::find($id);
        return view('carapesan.edit', compact('carapesan'));
    }

    public function update(Request $request, $id)
    {
        $carapesan = carapesan::find($id);
        $validatedData = $request->validate([
            'nostep' => 'required',
            'isistep' => 'required|max:255'
        ]);


        $carapesan->no = $validatedData['nostep'];
        $carapesan->step = $validatedData['isistep'];
        $carapesan->save();

        return back()->with('success', 'Cara Pemesanan berhasil diperbarui!');
    }

}

