<?php

namespace App\Http\Controllers;

use App\Models\carapesan;
use Illuminate\Http\Request;

class CarapesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexUser()
    {
        // mengurutkan data terbaru yang paling pertama
        $dataTerbaru = carapesan::latest()->first();
        // mengembalikan view 
        return view('user/carapemesanan', ['dataTerbaru' => $dataTerbaru]);
    }

    public function indexAdmin()
    {
        // mengurutkan data terbaru yang paling pertama
        $dataTerbaru = carapesan::latest()->first();
        // mengembalikan view 
        return view('admin/carapemesanan', ['dataTerbaru' => $dataTerbaru]);
    }


    public function updateStep(Request $request){
        try {
            $step1 = $request->input('step1');
            $step2 = $request->input('step2');
            $step3 = $request->input('step3');
            $step4 = $request->input('step4');
            $step5 = $request->input('step5');

            carapesan::create([
                'step1' => $step1,
                'step2' => $step2,
                'step3' => $step3,
                'step4' => $step4,
                'step5' => $step5,
            ]);

            return redirect()->back()->with('success', 'cara pemesanan berhasil di perbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'terjadi kesalahan saat mengupdate cara pemesanan');
        }
    }
}
