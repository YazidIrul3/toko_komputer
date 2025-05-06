<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/produk/search', SearchController :: class, 'produkSearch')->name('produk.search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('kategori', KategoriController::class)->middleware(['auth', 'verified']);

Route::resource('produk', ProdukController::class)->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
