<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $division = Division::orderBy('name')->paginate(10);
        return view("admin.layouts.home");
    }

}
