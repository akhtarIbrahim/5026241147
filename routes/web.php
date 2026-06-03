<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;

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


Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::post('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
