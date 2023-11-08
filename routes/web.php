<?php

use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/product', function() {
    return view('user/produk');
});

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

Route::get('/carapemesanan', function () {
    return view('user/carapemesanan');
});

// Admin
Route::get('/adminlokasi', [LokasiController::class, 'indexadmin']);
Route::post('/adminlokasi', [LokasiController::class, 'updateLocation']);

Route::get('/admintestimoni', function () {
    return view('admin/testimoni');
 });

Route::get('/productadmin', function() {
    return view('admin/produk');
});

Route::get('/admincarapemesanan', function () {
    return view('admin/carapemesanan');
});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

Route::get('/adminproduk', function () {
    return view('admin/produk');
 });
