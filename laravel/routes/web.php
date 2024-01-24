<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;

// Route untuk menampilkan halaman index
Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/registrasi-pasien', [PasienController::class, 'create'])->name('registrasi_pasien');
Route::post('/registrasi-pasien', [PasienController::class, 'store']);
Route::get('/daftar-pasien', [PasienController::class, 'index'])->name('daftar_pasien');

// Route untuk menampilkan daftar dokter
Route::get('/daftar-dokter', [DokterController::class, 'daftarDokter'])->name('daftar_dokter');

// Route untuk menampilkan daftar pegawai
Route::get('/daftar-pegawai', [PegawaiController::class, 'daftarPegawai'])->name('daftar_pegawai');
