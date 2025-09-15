<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    return view('belajar'); // arahkan ke resources/views/belajar.blade.php
});

// Route untuk menampilkan form
Route::get('/', [MahasiswaController::class, 'index']);

// Route untuk memproses form (GET karena form pakai method="GET")
Route::get('/proses-form', [MahasiswaController::class, 'prosesForm']);
