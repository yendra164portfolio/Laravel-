<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';

    // Mass assignment
    protected $fillable = [
        'nama_lengkap',
        'nim',
        'tanggal_lahir',
        'alamat',
        'ipk',
    ];
}

