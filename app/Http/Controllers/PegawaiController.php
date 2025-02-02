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

    public function formPerbaruiPegawai($idPegawai) {
        $pegawai = DB::table('data_pegawais')->find($idPegawai);
        return view('pegawai.formPerbarui')->with([
            'idPegawai' => $pegawai->id,
            'namaPegawai' => $pegawai->nama,
            'jabatanPegawai' => $pegawai->jabatan,
            'nipPegawai' => $pegawai->nip,
            'alamatPegawai' => $pegawai->alamat,
            'hpPegawai' => $pegawai->hp,
            'gajiPegawai' => $pegawai->gaji
        ]);
    }

    public function simpanPembaruan($idPegawai, Request $request) {
        DB::table('data_pegawais')->where('id', $idPegawai)->update([
            'nama' => $request->namaPegawai,
            'jabatan' => $request->jabatanPegawai,
            'nip' => $request->nipPegawai,
            'alamat'  => $request->alamatPegawai,
            'hp' => $request->hpPegawai,
            'gaji' => $request->gajiPegawai
        ]);

        return redirect('/pegawai/dataPegawai');
    }

    public function hapusPegawai($idPegawai){
        DB::table('data_pegawais')->where('id', $idPegawai)->delete();
        return redirect('/pegawai/dataPegawai');   
    }

    public function profilPegawai($idPegawai) {
        $pegawai = DB::table('data_pegawais')->find($idPegawai);
        return view('pegawai.detailPegawai')->with([
            'idPegawai' => $pegawai->id,
            'namaPegawai' => $pegawai->nama,
            'jabatanPegawai' => $pegawai->jabatan,
            'nipPegawai' => $pegawai->nip,
            'alamatPegawai' => $pegawai->alamat,
            'hpPegawai' => $pegawai->hp,
            'gajiPegawai' => $pegawai->gaji
        ]);
    }

    // method untuk autentikasi
    public function halamanLogin() {
        return view('auth.index');
    }
}
