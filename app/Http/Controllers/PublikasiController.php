<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function gallery()
    {
        return view('users.publikasi.gallery');
    }
    public function vod()
    {
        return view('users.publikasi.vod');
    }
    public function live()
    {
        return view('users.publikasi.live');
    }
}
