<?php

namespace App\Http\Controllers;

use App\PejabatStruktural;
use Illuminate\Http\Request;

class PejabatstrukturalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showKelolaPejabat()
    {
        $pejabatstruktural = PejabatStruktural::orderBy('title')->paginate(20);
        return view("admin.profil.pejabatstruktural",['pejabatstruktural' => $pejabatstruktural]);
    }


    // Pejabatstruktural
    public function showEditPejabat($id)
    {
        $pejabatstruktural = PejabatStruktural::findOrFail($id);
        return view("admin.profil.editpejabatstruktural",['pejabatstruktural' => $pejabatstruktural]);
    }

    public function storePejabat(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $pejabatstruktural = new PejabatStruktural();

        $pejabatstruktural->title = request('title');
        $pejabatstruktural->description = request('description');
        $pejabatstruktural->save();

        return redirect("/admin/kelola-pejabatstruktural")->with('success',"profil Created Successfully");
    }

    public function destroyPejabat($id)
    {
        $pejabatstruktural = PejabatStruktural::findOrFail($id);
        $pejabatstruktural->delete();
        return redirect("/admin/kelola-pejabatstruktural")->with("success","pejabatstruktural Deleted Successfully");
    }

    public function editPejabat(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $pejabatstruktural = PejabatStruktural::findOrFail($id);
        $pejabatstruktural->title = request('title');
        $pejabatstruktural->description = request('description');
        $pejabatstruktural->save(); //this will UPDATE the record

        return redirect("/admin/kelola-pejabatstruktural")->with("success","pejabatstruktural was updated successfully");
    }

}
