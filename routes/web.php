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

Route::get('/pegawai/dataPegawai',[PegawaiController::class, 'ambilDataPegawai']);

Route::get('/pegawai/index/{namaPegawai?}', function($namaPegawai = "") {
    return view('pegawai.index')->with([
        'namaPegawai' => $namaPegawai
    ]);
});
