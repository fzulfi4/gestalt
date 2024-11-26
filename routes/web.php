<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/filter/unrented', [BukuController::class, 'filterUnrented'])->name('buku.filter.unrented');
Route::get('/buku/filter/price', [BukuController::class, 'filterPrice'])->name('buku.filter.price');
Route::get('/customer/frequent', [BukuController::class, 'frequentCustomers'])->name('customer.frequent');
