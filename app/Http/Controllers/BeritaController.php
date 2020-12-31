<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        return view('users.berita.beritautama');
    }
    public function detailberita()
    {
        return view('users.berita.detailutama');
    }
    public function pressrelease()
    {
        return view('users.berita.pressrelease');
    }
}
