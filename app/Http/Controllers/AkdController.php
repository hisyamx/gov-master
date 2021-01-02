<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkdController extends Controller
{
    public function badananggaran()
    {
        return view('users.akd.badananggaran');
    }
    public function badankehormatan()
    {
        return view('users.akd.badankehormatan');
    }
    public function badanmusyawarah()
    {
        return view('users.akd.badanmusyawarah');
    }
    public function komisi()
    {
        return view('users.akd.komisi');
    }
    public function pimpinandprd()
    {
        return view('users.akd.pimpinandprd');
    }
}
