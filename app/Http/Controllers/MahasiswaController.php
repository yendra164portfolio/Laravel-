<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // Tampilkan semua data mahasiswa
    public function index()
    {
        $mahasiswas = DB::table('mahasiswa')->get(); // ambil semua data
        return view('mahasiswa.index', compact('mahasiswas')); // kirim ke view
    }
}

