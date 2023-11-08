<?php

use App\Http\Controllers\carapesanController;
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

Route::get('/lokasi', function () {
    return view('user/lokasi');
});

Route::get('/product', function() {
    return view('user/produk');
});

Route::get('/testimoni', function () {
    return view('user/testimoni');
});

Route::get('/detailproduk', function () {
    return view('user/detailproduk');
});

Route::get('/jahitbaju', function () {
    return view('user/jahit');
});

Route::get('/carapemesanan', [carapesanController::class, 'indexUser']);

// Admin
Route::get('/adminlokasi', function () {
    return view('admin/lokasi');
});

Route::get('/admintestimoni', function () {
    return view('admin/testimoni');
 });

Route::get('/productadmin', function() {
    return view('admin/produk');
});

Route::get('/admincarapemesanan', [carapesanController::class, 'indexAdmin']);
Route::post('/admincarapemesanan', [carapesanController::class, 'updateStep']);
