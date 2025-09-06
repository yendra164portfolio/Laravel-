<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::insert([
            [
                'nama_lengkap' => 'Ahmad Fauzi',
                'nim' => '123456',
                'tanggal_lahir' => '2000-01-01',
                'alamat' => 'Jakarta',
                'ipk' => 3.50,
            ],
            [
                'nama_lengkap' => 'Siti Aminah',
                'nim' => '123457',
                'tanggal_lahir' => '2000-02-02',
                'alamat' => 'Bandung',
                'ipk' => 3.75,
            ],
            [
                'nama_lengkap' => 'Budi Santoso',
                'nim' => '123458',
                'tanggal_lahir' => '1999-12-12',
                'alamat' => 'Surabaya',
                'ipk' => 3.20,
            ],
        ]);
    }
}
