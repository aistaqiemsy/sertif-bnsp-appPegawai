<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('landing');
});

Route::get('/tentang', function () {
    return view('tentang');
});

// route untuk CRUD pegawai
Route::get('/pegawai/beranda', function () {
    return view('pegawai.index');
});

//halaman input pegawai baru
Route::get('/pegawai/formTambahPegawai', [PegawaiController::class, 'formTambahPegawai']);

Route::post('/pegawai/tambahPegawai', [PegawaiController::class, 'tambahPegawai']);

Route::get('/pegawai/dataPegawai',[PegawaiController::class, 'ambilDataPegawai']);

Route::get('/pegawai/index/{namaPegawai?}', function($namaPegawai = "") {
    return view('pegawai.index')->with([
        'namaPegawai' => $namaPegawai
    ]);
});

//route pembaruan data
Route::get('/pegawai/formPerbarui/{idPegawai}',[PegawaiController::class, 'formPerbaruiPegawai']);
Route::post('/pegawai/simpanPembaruan/{idPegawai}', [PegawaiController::class, 'simpanPembaruan']);
Route::get('/pegawai/hapusPegawai/{idPegawai}', [PegawaiController::class, 'hapusPegawai']);
Route::get('/pegawai/profilPegawai/{idPegawai}', [PegawaiController::class, 'profilPegawai']);
