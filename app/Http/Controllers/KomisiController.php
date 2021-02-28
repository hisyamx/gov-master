<?php

namespace App\Http\Controllers;

use App\Komisi;
use Illuminate\Http\Request;

class KomisiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // komisi
    public function showKelola()
    {
        $komisi = Komisi::orderBy('title')->paginate(20);
        return view("admin.akd.komisi",['komisi' => $komisi]);
    }

    public function showEdit($id)
    {
        $komisi = Komisi::findOrFail($id);
        return view("admin.akd.editkomisi",['komisi' => $komisi]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $komisi = new Komisi();

        $komisi->title = request('title');
        $komisi->description = request('description');
        $komisi->save();

        return redirect("/admin/kelola-komisi")->with('success',"Komisi Created Successfully");
    }

    public function destroy($id)
    {
        $komisi = Komisi::findOrFail($id);
        $komisi->delete();
        return redirect("/admin/kelola-komisi")->with("success","Komisi Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $komisi = Komisi::findOrFail($id);
        $komisi->title = request('title');
        $komisi->description = request('description');
        $komisi->save(); //this will UPDATE the record

        return redirect("/admin/kelola-komisi")->with("success","Komisi was updated successfully");
    }

}
