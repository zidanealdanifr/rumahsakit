<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function daftarPegawai()
    {
        $pegawai = Pegawai::all();
        return view('daftar_pegawai', ['pegawai' => $pegawai]);
    }
}
