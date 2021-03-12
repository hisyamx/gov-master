<?php

namespace App\Http\Controllers;

use App\Profil;
use App\StrukturOrganisasi;
use App\Tentang;
use App\Tugas;
use App\Visimisi;
use App\PejabatStruktural;
use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{

    public function tentangdprd()
    {
        $logo = Logo::all();
        $tentang = Tentang::all();
        return view('users.profil.tentang',compact('tentang','logo'));
    }

    public function tugas()
    {
        $logo = Logo::all();
        $tugas = Tugas::all();
        return view('users.profil.tugas',compact('tugas','logo'));
    }

    public function visimisi()
    {
        $logo = Logo::all();
        $visimisi = Visimisi::all();
        return view('users.profil.visimisi',compact('visimisi','logo'));
    }

    public function struktur()
    {
        $logo = Logo::all();
        $strukturorganisasi = StrukturOrganisasi::all();
        return view('users.profil.strukturorganisasi',compact('strukturorganisasi','logo'));
    }

    public function pejabatstruktural()
    {
        $logo = Logo::all();
        $pejabatstruktural = PejabatStruktural::all();
        return view('users.profil.pejabatstruktural',compact('pejabatstruktural','logo'));
    }
}
