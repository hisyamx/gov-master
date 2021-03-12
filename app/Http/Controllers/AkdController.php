<?php

namespace App\Http\Controllers;

use App\BadanAnggaran;
use App\BadanKehormatan;
use App\Komisi;
use App\Pimpinan;
use App\BadanPerda;
use App\BadanMusyawarah;
use App\Logo;
use Illuminate\Http\Request;

class AkdController extends Controller
{
    public function badananggaran()
    {
        $logo = Logo::all();
        $badananggaran = BadanAnggaran::all();
        return view('users.akd.badananggaran',compact('badananggaran','logo'));
    }
    public function badankehormatan()
    {
        $logo = Logo::all();
        $badankehormatan = BadanKehormatan::all();
        return view('users.akd.badankehormatan',compact('badankehormatan','logo'));
    }
    public function badanmusyawarah()
    {
        $logo = Logo::all();
        $badanmusyawarah = BadanMusyawarah::all();
        return view('users.akd.badanmusyawarah',compact('badanmusyawarah','logo'));
    }
    public function badanperda()
    {
        $logo = Logo::all();
        $badanperda = BadanPerda::all();
        return view('users.akd.badanperda',compact('badanperda','logo'));
    }
    public function komisi()
    {
        $logo = Logo::all();
        $komisi = Komisi::all();
        return view('users.akd.komisi',compact('komisi','logo'));
    }
    public function pimpinandprd()
    {
        $logo = Logo::all();
        $pimpinandprdp = Pimpinan::all();
        return view('users.akd.pimpinandprd',compact('pimpinan','logo'));
    }
}
