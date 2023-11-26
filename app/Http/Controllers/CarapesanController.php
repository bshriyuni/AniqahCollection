<?php

namespace App\Http\Controllers;

use App\Models\carapesan;
use App\Models\CaraPemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarapesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function updateCaraPemesanan(Request $request) {
        $data = $request->all();
    }

    public function indexUser()
    {
        // mengurutkan data terbaru yang paling pertama
        $dataTerbaru = carapesan::latest()->first();

        // mengembalikan view 
        return view('user/carapemesanan', ['dataTerbaru' => $dataTerbaru]);

        //mengirim data ke view 
        return view('admin/carapemesanan', ['dataTerbaru' => $dataTerbaru]);
    }

    public function indexAdmin()
    {
        // mengurutkan data terbaru yang paling pertama
        $dataTerbaru = carapesan::latest()->first();

        // mengembalikan view 
        return view('admin/carapemesanan', ['dataTerbaru' => $dataTerbaru]);

        //mengirim data ke view 
        return view('admin/carapemesanan', ['dataTerbaru' => $dataTerbaru]);
    }

    public function edit($id)
    {
        $carapesan = carapesan::find($id);
        return view('edit_form', ['carapesan' => $carapesan]);
    }


    public function updateStep(Request $request){
       
        // Validasi data input jika diperlukan
        $validatedData = $request->validate([
            'step1' => 'required|max:255',
            'step2' => 'required|max:255',
            'step3' => 'required|max:255',
            'step4' => 'required|max:255',
            'step5' => 'required|max:255',
        ]);

         // Mendapatkan ID pengguna yang sedang masuk
        $userId = Auth::id();

    // Simpan data ke database dengan menyertakan ID pengguna
    CaraPemesanan::updateOrCreate(
        ['user_id' => $userId],
        [
            'step1' => $data['step1'],
            'step2' => $data['step2'],
            'step3' => $data['step3'],
            'step4' => $data['step4'],
            'step5' => $data['step5'],
        ]
    );

       // Memuat data yang diperbarui dan mengembalikannya ke pengguna
         $updatedData = CaraPemesanan::where('user_id', $userId)->first();

        return response()->json(['message' => 'Perubahan berhasil disimpan.', 'data' => $updatedData]);
        // Temukan record dalam database berdasarkan ID
        $carapesan = carapesan::find($id);

         // Buat instance model dan masukkan data dari permintaan
         $carapesan = new carapesan();
         $carapesan->step1 = $validatedData['step1'];
         $carapesan->step2 = $validatedData['step2'];
         $carapesan->step3 = $validatedData['step3'];
         $carapesan->step4 = $validatedData['step4'];
         $carapesan->step5 = $validatedData['step5'];
         $carapesan->save();

         // Simpan data ke dalam database
         if($carapesan->save()){
            // Jika berhasil, kirim pesan berhasil
            return back()->with('success', 'Data carapesan berhasil disimpan.');
        } else {
            // Jika gagal, kirim pesan gagal
            return back()->with('error', 'Gagal menyimpan data carapesan.');
        }
    }
}

