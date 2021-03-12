<?php

namespace App\Http\Controllers;

use App\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showKelola()
    {
        $visimisi = Visimisi::orderBy('title')->paginate(20);
        return view("admin.profil.visimisi",['visimisi' => $visimisi]);
    }

    // visimisi
    public function showEdit($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        return view("admin.profil.editvisimisi",['visimisi' => $visimisi]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'nullable',
            'descriptionvisi' => 'nullable',
            'descriptionmisi' => 'nullable'
            ]);

        $visimisi = new visimisi();

        $visimisi->title = request('title');
        $visimisi->descriptionvisi = request('descriptionvisi');
        $visimisi->descriptionmisi = request('descriptionmisi');
        $visimisi->save();

        return redirect("/admin/kelola-visimisi")->with('success',"Visi misi Created Successfully");
    }

    public function destroy($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        $visimisi->delete();
        return redirect("/admin/kelola-visimisi")->with("success","Visi misi Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'nullable',
            'descriptionvisi' => 'nullable',
            'descriptionmisi' => 'nullable'
        ]);

        $visimisi = Visimisi::findOrFail($id);
        $visimisi->title = request('title');
        $visimisi->descriptionvisi = request('descriptionvisi');
        $visimisi->descriptionmisi = request('descriptionmisi');
        $visimisi->save(); //this will UPDATE the record

        return redirect("/admin/kelola-visimisi")->with("success","Visi misi was updated successfully");
    }

}
