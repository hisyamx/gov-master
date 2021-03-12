<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Beranda;
use App\Logo;
use App\Kontak;
use App\Fraksi;
use App\AgendaBlog;
use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function beranda()
    {
        $banner = Banner::all();
        $beranda = Beranda::all();
        $logo = Logo::all();
        $agendablog = AgendaBlog::all();
        $fraksi = Fraksi::all();
        $berita = Berita::all();
        return view('users.pages.index',compact('beranda','logo','banner','agendablog','fraksi','berita'));
    }
    public function kontak()
    {
        $kontak = Kontak::all();
        $logo = Logo::all();
        return view('users.pages.kontak',compact('kontak','logo'));
    }
    public function jdih()
    {
        $logo = Logo::all();
        return view('users.pages.jdih',compact('logo'));
    }
    public function ppid()
    {
        $logo = Logo::all();
        return view('users.pages.ppid',compact('logo'));
    }
}
