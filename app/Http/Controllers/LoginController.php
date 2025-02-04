<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function authPengguna(Request $request) {
        $namaPengguna = $request->pengguna;
        $sandi = $request->sandi;

        $totalPegawai = DB::table('data_pegawais')->count();
        $headOffice = DB::table('data_pegawais')->where('jabatan', 'Head Office')->count();
        $viceOffice = DB::table('data_pegawais')->where('jabatan', 'Vice Office')->count();
        $staff = DB::table('data_pegawais')->where('jabatan', 'Staff')->count();
        $mentor = DB::table('data_pegawais')->where('jabatan', 'Mentor')->count();

        if ($namaPengguna == 'admin' and $sandi == 123 ) {
            return view('pegawai.landingAdmin')->with([
                'jumlahPegawai' => $totalPegawai,
                'headOffice' => $headOffice,
                'viceOffice' => $viceOffice,
                'staff' => $staff,
                'mentor' => $mentor
            ]);
        } else {
            return redirect()->back()->withErrors(['Autentikasi gagal! Masukan kredensial dengan benar...']);
        }
        
    }
}
