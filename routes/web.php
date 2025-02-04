<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/landingPage', function () { // halaman utama akses web
    return view('landing');
});

Route::get('/', [PegawaiController::class, 'berandaAdmin']);

// return view('pegawai.landingAdmin');

Route::get('/tentang', function () {
    return view('tentang');
});

// route untuk CRUD pegawai
Route::get('/pegawai/beranda', [PegawaiController::class, 'berandaAdmin']);

//halaman input pegawai baru
Route::get('/pegawai/formTambahPegawai', [PegawaiController::class, 'formTambahPegawai']);

Route::post('/pegawai/tambahPegawai', [PegawaiController::class, 'tambahPegawai']);

Route::get('/pegawai/dataPegawai',[PegawaiController::class, 'ambilDataPegawai']);

Route::get('/pegawai/index', [PegawaiController::class, 'halamanLogin']);

//route pembaruan data
Route::get('/pegawai/formPerbarui/{idPegawai}',[PegawaiController::class, 'formPerbaruiPegawai']);
Route::post('/pegawai/simpanPembaruan/{idPegawai}', [PegawaiController::class, 'simpanPembaruan']);
Route::get('/pegawai/hapusPegawai/{idPegawai}', [PegawaiController::class, 'hapusPegawai']);
Route::get('/pegawai/profilPegawai/{idPegawai}', [PegawaiController::class, 'profilPegawai']);

//route autentikasi ( tanpda db )
Route::get('/autentikasi', [LoginController::class, 'authPengguna']);

//logut
Route::get('/logout', function() {
    return view('landing');
});


//JQuery cek nip
Route::get('/pegawai/nipCek', [PegawaiController::class, 'nipCek']);
