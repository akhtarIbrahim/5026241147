<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\NilaiController;

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('biodata', [DosenController::class, 'biodata']);
Route::get('dosen', [DosenController::class, 'index']);

Route::get('blog', function () {
    return view('blog');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('day1k', function () {
    return view('day1_kelas_intro');
});

Route::get('day2k', function () {
    return view('day2_kelas_news');
});

Route::get('day3k', function () {
    return view('day3_kelas_responsive');
});

Route::get('day3t', function () {
    return view('day3_tugas_bs4Icons');
});

Route::get('day4t', function () {
    return view('day4_tugas_layouting');
});

Route::get('day5k', function () {
    return view('day5_kelas_dell');
})->name('day5_dell');

Route::get('day5t', function () {
    return view('day5_tugas_linktree');
})->name('day5_linktree');

Route::get('menu', function () {
    return view('menu');
});

//pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::post('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//agen
Route::get('/agen', [AgenController::class, 'indexagen']);
Route::get('/agen/tambah', [AgenController::class, 'tambahagen']);
Route::post('/agen/store', [AgenController::class, 'storeagen']);
Route::get('/agen/edit/{id}', [AgenController::class, 'editagen']);
Route::post('/agen/update', [AgenController::class, 'updateagen']);
Route::get('/agen/hapus/{id}', [AgenController::class, 'hapusagen']);

//belanja LATIHAN EAS
Route::get('/belanja', [BelanjaController::class, 'indexbelanja'])->name('belanja.index');
Route::get('/belanja/create', [BelanjaController::class, 'createbelanja'])->name('belanja.create');
Route::post('/belanja/store', [BelanjaController::class, 'storebelanja'])->name('belanja.store');
Route::delete('/belanja/{id}', [BelanjaController::class, 'destroybelanja'])->name('belanja.destroy');

//nilai LATIHAN EAS
Route::get('/nilai', [NilaiController::class, 'indexnilai'])->name('nilai.index');
Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::post('/nilai/store', [NilaiController::class, 'store'])->name('nilai.store');
Route::delete('/nilai/{nrp}', [NilaiController::class, 'destroy'])->name('nilai.destroy');

//SIAP EAS
Route::get('/siswa', [SiswaController::class, 'indexsiswa'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'editsiswa'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

