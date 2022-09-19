<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


Route::get('mahasiswa/print-pdf', [MahasiswaController::class, 'printPDF'])->name('printPDF');

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('produk', ProdukController::class);
