<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tentangdprd()
    {
        return view('users.profil.tentang');
    }
    public function visimisi()
    {
        return view('users.profil.visimisi');
    }
    public function tugasfungsi()
    {
        return view('users.profil.tugasfungsi');
    }
    public function strukturorganisasi()
    {
        return view('users.profil.strukturorg');
    }
    public function pejabatstruktural()
    {
        return view('users.profil.pejabatstruktural');
    }
}
