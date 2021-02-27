<?php

namespace App\Http\Controllers;

use App\Profil;
use App\StrukturOrganisasi;
use App\Tentang;
use App\Tugas;
use App\Visimisi;
use App\PejabatStruktural;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{

    public function tentangdprd()
    {
        $tentang = Tentang::all();
        return view('users.profil.tentang',compact('tentang'));
    }

    public function tugas()
    {
        $tugas = Tugas::all();
        return view('users.profil.tugas',compact('tugas'));
    }

    public function visimisi()
    {
        $visimisi = Visimisi::all();
        return view('users.profil.visimisi',compact('visimisi'));
    }

    public function struktur()
    {
        $strukturorganisasi = StrukturOrganisasi::all();
        return view('users.profil.strukturorganisasi',compact('strukturorganisasi'));
    }

    public function pejabatstruktural()
    {
        $pejabatstruktural = PejabatStruktural::all();
        return view('users.profil.pejabatstruktural',compact('pejabatstruktural'));
    }
}
