<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showKelola()
    {
        $kontak = Kontak::orderBy('title')->paginate(20);
        return view("admin.pages.kontak",['kontak' => $kontak]);
    }
    // kontak
    public function showEdit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view("admin.pages.editkontak",['kontak' => $kontak]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'emailsatu' => 'required|nullable',
            'emaildua' => 'required|nullable',
            'emailtiga' => 'required|nullable',
            'alamat' => 'required|nullable',
            'telephone' => 'required|nullable'
            ]);
        $kontak = new Kontak();

        $kontak->alamat = request('alamat');
        $kontak->emailsatu = request('emailsatu');
        $kontak->emaildua = request('emaildua');
        $kontak->emailtiga = request('emailtiga');
        $kontak->telephone = request('telephone');
        $kontak->save();

        return redirect("/admin/kelola-kontak")->with('success',"Kontak Created Successfully");
    }

    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        return redirect("/admin/kelola-kontak")->with("success","Kontak Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'emailsatu' => 'required|nullable',
            'emaildua' => 'required|nullable',
            'emailtiga' => 'required|nullable',
            'alamat' => 'required|nullable',
            'telephone' => 'required|nullable'
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->alamat = request('alamat');
        $kontak->emailsatu = request('emailsatu');
        $kontak->emaildua = request('emaildua');
        $kontak->emailtiga = request('emailtiga');
        $kontak->telephone = request('telephone');
        $kontak->save(); //this will UPDATE the record

        return redirect("/admin/kelola-kontak")->with("success","Kontak was updated successfully");
    }
}
