<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Beranda;
use App\Logo;
use App\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function beranda()
    {
        $banner = Banner::all();
        $beranda = Beranda::all();
        $logo = Logo::all();
        return view('users.pages.index',compact('beranda','logo','banner'));
        // return view('users.pages.index',['beranda'=>$beranda],['banner'=>$banner],['logo'=>$logo],compact('beranda','logo','banner'));
    }
    public function kontak()
    {
        $kontak = Kontak::all();
        $logo = Logo::all();
        return view('users.pages.kontak',compact('kontak','logo'));
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
