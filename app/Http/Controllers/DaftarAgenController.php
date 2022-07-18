<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Reseller;
use Illuminate\Http\Request;

class DaftarAgenController extends Controller
{
    public function daftaragen(){
        return view('daftaragen');
    }

    public function daftar(Request $request)
    {
        // insert data ke table pegawai
        DB::table('reseller')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'admin_id' => 1,
            'no_hp' => $request->no_hp,
            'domisili' => $request->domisili,
            'akun_ig' => $request->akun_ig,
            'email' => $request->email,
            'keterangan' => "belum diterima"
        ]);
        // alihkan halaman ke halaman pegawai
        return view('agen');
    }
}
