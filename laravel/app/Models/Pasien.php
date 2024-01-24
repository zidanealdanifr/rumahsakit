<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';
    protected $fillable = ['nama', 'umur', 'jenis_kelamin', 'alamat', 'tanggal_masuk'];

    /**
     * Tambahkan data pasien baru.
     *
     * @param array $data
     * @return Pasien
     */
    public static function registrasiPasien(array $data)
    {
        return static::create([
            'nama' => $data['nama'],
            'umur' => $data['umur'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'alamat' => $data['alamat'],
            'tanggal_masuk' => date('Y-m-d', strtotime($data['tanggal_masuk'])),
        ]);
    }
}
