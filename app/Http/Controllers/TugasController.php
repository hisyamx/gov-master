<?php

namespace App\Http\Controllers;

use App\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showKelolaTugas()
    {
        $tugas = Tugas::orderBy('title')->paginate(20);
        return view("admin.profil.tugasfungsi",['tugas' => $tugas]);
    }
    // tugas
    public function showEditTugas($id)
    {
        $tugas = Tugas::findOrFail($id);
        return view("admin.profil.edittugasfungsi",['tugas' => $tugas]);
    }

    public function storeTugas(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $tugas = new Tugas();

        $tugas->title = request('title');
        $tugas->description = request('description');
        $tugas->save();

        return redirect("/admin/kelola-tugasfungsidprd")->with('success',"Tugas  Created Successfully");
    }

    public function destroyTugas($id)
    {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();
        return redirect("/admin/kelola-tugasfungsidprd")->with("success","Tugas  Deleted Successfully");
    }

    public function editTugas(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $tugas = Tugas::findOrFail($id);
        $tugas->title = request('title');
        $tugas->description = request('description');
        $tugas->save(); //this will UPDATE the record

        return redirect("/admin/kelola-tugasfungsidprd")->with("success","Tugas  was updated successfully");
    }

}
