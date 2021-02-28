<?php

namespace App\Http\Controllers;

use App\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturorganisasiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // strukturorganisasi
    public function showKelola()
    {
        $strukturorganisasi = StrukturOrganisasi::orderBy('title')->paginate(20);
        return view("admin.profil.strukturorganisasi",['strukturorganisasi' => $strukturorganisasi]);
    }

    public function showEdit($id)
    {
        $strukturorganisasi = StrukturOrganisasi::findOrFail($id);
        return view("admin.profil.editstrukturorganisasi",['strukturorganisasi' => $strukturorganisasi]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $strukturorganisasi = new StrukturOrganisasi();

        $strukturorganisasi->title = request('title');
        $strukturorganisasi->description = request('description');
        $strukturorganisasi->save();

        return redirect("/admin/kelola-strukturorganisasi")->with('success',"Struktur Organisasi Created Successfully");
    }

    public function destroy($id)
    {
        $strukturorganisasi = StrukturOrganisasi::findOrFail($id);
        $strukturorganisasi->delete();
        return redirect("/admin/kelola-strukturorganisasi")->with("success","Struktur Organisasi Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $strukturorganisasi = StrukturOrganisasi::findOrFail($id);
        $strukturorganisasi->title = request('title');
        $strukturorganisasi->description = request('description');
        $strukturorganisasi->save(); //this will UPDATE the record

        return redirect("/admin/kelola-strukturorganisasi")->with("success","Struktur Organisasi was updated successfully");
    }
}
