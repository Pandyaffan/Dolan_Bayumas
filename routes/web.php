<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('index');
Route::get('wisata/{slug_url}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('wisata/{slug_url}/pesan', [App\Http\Controllers\HomeController::class, 'pesan'])->name('pesan');
Route::post('wisata/{slug_url}/pesan', [App\Http\Controllers\HomeController::class, 'konfirmasi'])->name('konfirmasi');
Route::get('bayar/{invoice}', [App\Http\Controllers\HomeController::class, 'bayarin'])->name('bayarin');
Route::post('bayar/{invoice}', [App\Http\Controllers\HomeController::class, 'bayar'])->name('bayar.lunas');
Route::get('success', [App\Http\Controllers\HomeController::class, 'success'])->name('success');

Route::prefix('admin')->middleware('auth')->group(static function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::resource('pariwisata', '\App\Http\Controllers\Admin\PariwisataController');
    Route::resource('galery', '\App\Http\Controllers\Admin\GaleryController');
    Route::resource('payment', '\App\Http\Controllers\Admin\PaymentController');
    Route::get('pesanan', [App\Http\Controllers\Admin\PesananController::class, 'index'])->name('pesanan');
    Route::delete('pesanan/{id}', [App\Http\Controllers\Admin\PesananController::class, 'destroy'])->name('pesanan.hapus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
