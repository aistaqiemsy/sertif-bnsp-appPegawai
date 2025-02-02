<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function authPengguna(Request $request) {
        $namaPengguna = $request->pengguna;
        $sandi = $request->sandi;

        if ($namaPengguna == 'admin' and $sandi == 123 ) {
            $dataPegawai = DB::table('data_pegawais')->get();
            return view('pegawai.dataPegawai', [
                'dataPegawai' => $dataPegawai
            ]);
        } else {
            return redirect()->back()->withErrors(['Autentikasi gagal! Masukan kredensi dengan benar...']);
        }
        
    }
}
