<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function daftarDokter()
    {
        $dokter = Dokter::all();
        return view('daftar_dokter', ['dokter' => $dokter]);
    }
}
