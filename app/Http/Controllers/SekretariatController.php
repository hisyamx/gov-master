<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekretariatController extends Controller
{
    public function rencanalaporan()
    {
        return view('users.sekretariat.rencanalaporan');
    }
    public function tugasfungsi()
    {
        return view('users.sekretariat.tugasfungsi');
    }
}
