<?php

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
    return view('welcome');
});

Route::get('/lokasi', function () {
    return view('user/lokasi');
});

Route::get('/product', function() {
    return view('user/produk');
});

Route::get('/productadmin', function() {
    return view('admin/produk');
});