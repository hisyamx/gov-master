<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agendadprd()
    {
        return view('users.agenda.agendadprd');
    }
    public function agendasekretariat()
    {
        return view('users.agenda.agendasekre');
    }
    public function agenda(){
        return view('admin.agenda.agendadprd');
    }
    public function agendasekre(){
        return view('admin.agenda.agendasekre');
    }


}
