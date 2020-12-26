<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function beranda()
    {
        return view('users.pages.index');
    }
    public function kontak()
    {
        return view('users.pages.kontak');
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
