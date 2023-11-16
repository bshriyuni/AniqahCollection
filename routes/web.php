<?php

use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\carapesanController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\registerController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoniController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user/homepage');
});

Route::get('/lokasi', [LokasiController::class, 'indexuser']);

Route::get('/product', [ClothesController::class, 'indexUser']);

Route::get('/testimoni', function () {
    return view('user/testimoni');
});

Route::get('/detailproduk', function () {
    return view('user/detailproduk');
});

Route::get('/detailproduk', [DetailProdukController::class, 'index']);

Route::get('/jahitbaju', function () {
    return view('user/jahit');
});

Route::get('/carapemesanan', [carapesanController::class, 'indexUser']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

Route::middleware(['admin'])->group(function () {
    // Semua route admin di sini
    Route::get('/adminproduct', [ClothesController::class, 'indexAdmin']);
    Route::post('/adminproduct', [ClothesController::class, 'create']);
    Route::get('/edit/{id}',[ClothesController::class, 'edit']);
    Route::post('/edit/{id}', [ClothesController::class, 'update']);
    Route::get('/delete/{id}', [ClothesController::class, 'delete']);

    Route::get('/admincarapemesanan', [carapesanController::class, 'indexAdmin']);
    Route::post('/admincarapemesanan', [carapesanController::class, 'updateStep']);

    // Menambahkan route untuk menampilkan halaman testimoni
    Route::get('/admintestimoni', [TestimoniController::class, 'index'])->name('testimoni.index');

    // Menambahkan route untuk menangani operasi CRUD testimoni
    Route::post('/admintestimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::delete('/admintestimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');;
    // Route::get('/admintestimoni/delete/{id}', [TestimoniController::class, "Delete"]);

    Route::get('/adminlokasi', [LokasiController::class, 'indexadmin']);
    Route::post('/adminlokasi', [LokasiController::class, 'updateLocation']);
  
    Route::resource('pesanan', OrderDetailController::class);
    Route::put('pesanan/update-status/{orderDetail}', [OrderDetailController::class, 'updateStatus'])->name('pesanan.updateStatus');

    Route::get('/adminjahit', function () {
        return view('admin/jahit');
    });
});
