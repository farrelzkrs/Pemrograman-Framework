<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/buku', [BookController::class, 'index'])->name('buku.index');
Route::get('/buku/status', [BookController::class, 'available'])->name('buku.available');
Route::get('/buku/{id}', [BookController::class, 'show'])->name('buku.show');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::get('/', function () {
    return view('framewrok');
});

Route::get('/hello', function () {
    return 'Hello World.';
});

Route::get('/about', function () {
    return 'Nama: Farrel Lerri, NIM: 23081010213';
});

Route::get('/halo/{nama}', function ($nama) {
    return "Halo, $nama.";
});

Route::get('/perkalian/{a}/{b}', function ($a, $b) {
    return $a * $b;
});

Route::get('/salam/{nama?}', function ($nama = null) {
    return 'Halo, ' . ($nama ?? 'Guest') . '.';
});

Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return 'Halaman Admin Home';
    });
    Route::get('/user', function () {
        return 'Daftar User Admin';
    });
});