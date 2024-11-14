<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'pabrik', 'unit', 'nama_kelompok', 'ketua_kelompok', 'fasilitator',
        'jenis_group', 'perihal', 'tanggal', 'nomor_tema', 'judul', 'tema'
    ];
}

