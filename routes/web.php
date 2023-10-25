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
    return view('user/homepage');
});

Route::get('/lokasi', function () {
    return view('user/lokasi');
});

Route::get('/jahitbaju', function () {
    return view('user/jahit');
});

Route::get('/carapemesanan', function () {
    return view('user/carapemesanan');
});
