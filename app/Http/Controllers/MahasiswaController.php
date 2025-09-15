<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // menampilkan form
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request)
    {
        // mengirim data ke view hasil
        return view('hasil-pendaftaran', [
            'nim'           => $request->nim,
            'nama'          => $request->nama,
            'email'         => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan'       => $request->jurusan,
            'alamat'        => $request->alamat,
        ]);
    }
}
