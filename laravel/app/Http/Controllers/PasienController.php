<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function create()
    {
        return view('registrasi_pasien');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required',
            'tanggal_masuk' => 'required|date',
        ]);

        Pasien::registrasiPasien($request->all());

        return redirect()->route('daftar_pasien')->with('success', 'Pasien berhasil diregistrasi.');
    }

    public function index()
    {
        $pasienList = Pasien::all();

        return view('daftar_pasien', ['pasienList' => $pasienList]);
    }
}

