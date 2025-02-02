<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authPengguna(Request $request) {
        $namaPengguna = $request->pengguna;
        $sandi = $request->sandi;

        if ($namaPengguna == 'admin' and $sandi == 123 ) {
            return redirect('/pegawai/dataPegawai/');
        } else {
            return redirect()->back()->withErrors(['Autentikasi gagal! Masukan kredensi dengan benar...']);
        }
        
    }
}
