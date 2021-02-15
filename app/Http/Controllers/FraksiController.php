<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FraksiController extends Controller
{
    public function fraksi()
    {
        return view('users.fraksi.index');
    }
}
