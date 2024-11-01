<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('', function () {
    return "Hello, Laravel!";
});
use App\Http\Controllers\PageController;
Route::get('/home', [PageController::class, 'home']);
Route::get('/login', [PageController::class,'showLoginForm'])->name('login');
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');