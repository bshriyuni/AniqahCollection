<?php

use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\carapesanController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\ProfilController;
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

Route::get('/product', [ClothesController::class, 'indexUser'])->name('product');
Route::get('/product/{kode_test}', [DetailProdukController::class, 'index']);
Route::post('/product/{kode_test}', [DetailProdukController::class, 'store']);

Route::get('/testimoni', [TestimoniController::class, 'user']);
Route::post('/testimoni', [TestimoniController::class, 'comment'])->name('comment');

Route::get('/carapemesanan', [carapesanController::class, 'indexUser']);

Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');
Route::get('/profil/pesanan', [ProfilController::class, 'profilPesanan']);
Route::post('/update-status/{id}', [ProfilController::class, 'updatestatus'])->name('order.updatestatus');


Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

Route::middleware(['admin'])->group(function () {
    // Semua route admin di sini
    Route::get('/adminproduct', [ClothesController::class, 'indexAdmin']);
    Route::post('/adminproduct', [ClothesController::class, 'create']);
    Route::delete('/adminproduct/{id}', [ClothesController::class, 'delete'])->name('produk.delete');
    Route::post('/editClothingData/{kode_baju}', [ClothesController::class, 'update']);
    Route::get('/getClothingData/{kode_baju}', [ClothesController::class, 'getClothingData']);
   
    Route::get('/admincarapemesanan', [carapesanController::class, 'indexAdmin']);
    Route::post('/admincarapemesanan', [carapesanController::class, 'add']);
    Route::delete('/admincarapemesanan/{id}', [carapesanController::class, 'destroy'])->name('carapemesanan.destroy');;
    Route::get('/admincarapemesanan/{id}', [carapesanController::class, 'edit'])->name('carapemesanan.edit');
    Route::post('/admincarapemesanan/{id}', [carapesanController::class, 'update'])->name('carapemesanan.update');

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
});