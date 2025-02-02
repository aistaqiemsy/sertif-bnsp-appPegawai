<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // mengembalikan view dengan data dari tabel data_pegawais
    public function ambilDataPegawai() {
        $dataPegawai = DB::table('data_pegawais')->get();
        return view('pegawai.dataPegawai', ['dataPegawai' => $dataPegawai]);
    }
}
