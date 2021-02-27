<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function anggaran()
    {
        return view('users.informasi.transparansianggaran');
    }
    public function kinerja()
    {
        return view('users.informasi.transparansikinerja');
    }
    public function pengumuman()
    {
        return view('users.informasi.pengumuman');
    }
    public function formulirkunjungan()
    {
        return view('users.informasi.kunjungan');
    }
}
