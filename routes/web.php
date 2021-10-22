<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});

Route::get('/produk-barangalat', function () {
    return view('produk-barangalat', [
        "title" => "Barang & Alat"
    ]);
});

Route::get('/produk-makananminuman', function () {
    return view('produk-makananminuman', [
        "title" => "Makanan & Minuman"
    ]);
});

Route::get('/produk-pakaian', function () {
    return view('produk-pakaian', [
        "title" => "Pakaian"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak"
    ]);
});

Route::get('/masuk', [MasukController::class, 'index'])->name('login')->middleware('guest');
Route::post('/masuk', [MasukController::class, 'authenticate']);
Route::post('/keluar', [MasukController::class, 'logout']);

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');


Route::resource('/dashboard/produk', DashboardProdukController::class)->middleware('auth');