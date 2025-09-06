<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/belajar', function () {
    return view('belajar'); // arahkan ke resources/views/belajar.blade.php
});



use App\Http\Controllers\MahasiswaController;

// Route untuk menampilkan data mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route untuk menambahkan data mahasiswa menggunakan raw SQL
Route::get('/insert-sql', [MahasiswaController::class, 'insertSql']);

// Route untuk insert dengan timestamp, prepared, binding
Route::get('/insert-timestamp', [MahasiswaController::class, 'insertTimestamp']);
Route::get('/insert-prepared', [MahasiswaController::class, 'insertPrepared']);
Route::get('/insert-binding', [MahasiswaController::class, 'insertBinding']);

// Route untuk update dan delete
Route::get('/update', [MahasiswaController::class, 'update']);
Route::get('/delete', [MahasiswaController::class, 'delete']);

// Route untuk select dan tampil data
Route::get('/select', [MahasiswaController::class, 'select']);
Route::get('/select-tampil', [MahasiswaController::class, 'selectTampil']);
Route::get('/select-view', [MahasiswaController::class, 'selectView']);
Route::get('/select-where', [MahasiswaController::class, 'selectWhere']);

// Route untuk statement SQL
Route::get('/statement', [MahasiswaController::class, 'statement']);


Route::prefix('mahasiwas')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('mhs.index');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('mhs.create');
    Route::post('/', [MahasiswaController::class, 'store'])->name('mhs.store');
    Route::get('/{id}/edit', [MahasiswaController::class, 'edit'])->name('mhs.edit');
    Route::put('/{id}', [MahasiswaController::class, 'update'])->name('mhs.update');
    Route::delete('/{id}', [MahasiswaController::class, 'destroy'])->name('mhs.destroy');
});




