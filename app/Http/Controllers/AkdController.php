<?php

namespace App\Http\Controllers;

use App\BadanAnggaran;
use App\BadanKehormatan;
use App\Komisi;
use App\Pimpinan;
use App\BadanPerda;
use App\BadanMusyawarah;
use Illuminate\Http\Request;

class AkdController extends Controller
{
    public function badananggaran()
    {
        $badananggaran = BadanAnggaran::all();
        return view('users.akd.badananggaran');
    }
    public function badankehormatan()
    {
        $badankehormatan = BadanKehormatan::all();
        return view('users.akd.badankehormatan');
    }
    public function badanmusyawarah()
    {
        $badanmusyawarah = BadanMusyawarah::all();
        return view('users.akd.badanmusyawarah');
    }
    public function badanperda()
    {
        $badanperda = BadanPerda::all();
        return view('users.akd.badanperda');
    }
    public function komisi()
    {
        $komisi = Komisi::all();
        return view('users.akd.komisi');
    }
    public function pimpinandprd()
    {
        $pimpinandprdp = Pimpinan::all();
        return view('users.akd.pimpinandprd');
    }
}
