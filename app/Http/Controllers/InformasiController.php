<?php

namespace App\Http\Controllers;

use App\Informasi;
use App\Logo;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function anggaran()
    {
        $informasi = Informasi::all();
        $logo = Logo::all();
        return view('users.informasi.transparansianggaran',compact('informasi','logo'));
    }
    public function kinerja()
    {
        $informasi = Informasi::all();
        $logo = Logo::all();
        return view('users.informasi.transparansikinerja',compact('informasi','logo'));
    }
    public function pengumuman()
    {
        $informasi = Informasi::all();
        $logo = Logo::all();
        return view('users.informasi.pengumuman',compact('informasi','logo'));
    }
    public function formulirkunjungan()
    {
        $informasi = Informasi::all();
        $logo = Logo::all();
        return view('users.informasi.kunjungan',compact('informasi','logo'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showKelola()
    {
        $informasi = Informasi::orderBy('id')->paginate(1);
        return view("admin.pages.informasi",['informasi' => $informasi]);
    }
    // informasi
    public function showEdit($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view("admin.pages.editinformasi",['informasi' => $informasi]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'linksatu' => 'required|nullable',
            'linkdua' => 'required|nullable',
            'linktiga' => 'required|nullable',
            'linkkunjungan' => 'required|nullable'
            ]);
        $informasi = new informasi();

        $informasi->linksatu = request('linksatu');
        $informasi->linkdua = request('linkdua');
        $informasi->linktiga = request('linktiga');
        $informasi->linkkunjungan = request('linkkunjungan');
        $informasi->save();

        return redirect("/admin/kelola-informasi")->with('success',"Informasi Created Successfully");
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();

        return redirect("/admin/kelola-informasi")->with("success","Informasi Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'linksatu' => 'required|nullable',
            'linkdua' => 'required|nullable',
            'linktiga' => 'required|nullable',
            'alamat' => 'required|nullable',
            'linkkunjungan' => 'required|nullable'
        ]);

        $informasi = Informasi::findOrFail($id);
        $informasi->alamat = request('alamat');
        $informasi->linksatu = request('linksatu');
        $informasi->linkdua = request('linkdua');
        $informasi->linktiga = request('linktiga');
        $informasi->linkkunjungan = request('linkkunjungan');
        $informasi->save(); //this will UPDATE the record

        return redirect("/admin/kelola-informasi")->with("success","Informasi was updated successfully");
    }
}
