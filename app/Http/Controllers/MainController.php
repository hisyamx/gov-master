<?php

namespace App\Http\Controllers;

use App\Beranda;
use App\BerandaLogo;
use App\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function beranda()
    {
        $beranda = Beranda::all();
        $berandalogo = BerandaLogo::all();
        return view('users.pages.index',compact('beranda'),compact('berandalogo'));
    }
    public function kontak()
    {
        $kontak = Kontak::all();
        return view('users.pages.kontak',compact('kontak'));
    }
    public function jdih()
    {
        return view('users.pages.jdih');
    }
    public function ppid()
    {
        return view('users.pages.ppid');
    }
}
