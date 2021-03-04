<?php

namespace App\Http\Controllers;

use App\Pimpinan;
use Illuminate\Http\Request;

class PimpinanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // pimpinan
    public function showKelola()
    {
        $pimpinan = Pimpinan::orderBy('title')->paginate(20);
        return view("admin.akd.pimpinan",['pimpinan' => $pimpinan]);
    }

    public function showEdit($id)
    {
        $pimpinan = Pimpinan::findOrFail($id);
        return view("admin.akd.editpimpinan",['pimpinan' => $pimpinan]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $pimpinan = new Pimpinan();

        $pimpinan->title = request('title');
        $pimpinan->description = request('description');
        $pimpinan->save();

        return redirect("/admin/kelola-pimpinan")->with('success',"Pimpinan Created Successfully");
    }

    public function destroy($id)
    {
        $pimpinan = Pimpinan::findOrFail($id);
        $pimpinan->delete();
        return redirect("/admin/kelola-pimpinan")->with("success","Pimpinan Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $pimpinan = Pimpinan::findOrFail($id);
        $pimpinan->title = request('title');
        $pimpinan->description = request('description');
        $pimpinan->save(); //this will UPDATE the record

        return redirect("/admin/kelola-pimpinan")->with("success","Pimpinan was updated successfully");
    }

}
