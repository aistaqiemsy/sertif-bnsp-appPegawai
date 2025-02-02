<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function formTambahPegawai() {
        return view('pegawai.formTambahPegawai');
    }

    // mengembalikan view dengan data dari tabel data_pegawais
    public function ambilDataPegawai() {
        $dataPegawai = DB::table('data_pegawais')->get();
        return view('pegawai.dataPegawai', ['dataPegawai' => $dataPegawai]);
    }

    // method menyimpan data ke dalam basis data
    public function tambahPegawai(Request $request) {
        DataPegawai::create([
            'nama' => $request->namaPegawai,
            'jabatan' => $request->jabatanPegawai,
            'nip' => $request->nipPegawai
        ]);

        return redirect('/pegawai/dataPegawai');
    }
}
