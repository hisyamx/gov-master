<?php

namespace App\Http\Controllers;

use App\BadanAngaaran;
use App\BadanAnggaran;
use Illuminate\Http\Request;

class BadanAnggaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // badananggaran
    public function showKelola()
    {
        $badananggaran = BadanAnggaran::orderBy('title')->paginate(20);
        return view("admin.akd.badananggaran",['badananggaran' => $badananggaran]);
    }

    public function showEdit($id)
    {
        $badananggaran = BadanAnggaran::findOrFail($id);
        return view("admin.akd.editbadanperda",['badananggaran' => $badananggaran]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $badananggaran = new BadanAnggaran();

        $badananggaran->title = request('title');
        $badananggaran->description = request('description');
        $badananggaran->save();

        return redirect("/admin/kelola-badananggaran")->with('success',"badananggaran Organisasi Created Successfully");
    }

    public function destroy($id)
    {
        $badananggaran = BadanAnggaran::findOrFail($id);
        $badananggaran->delete();
        return redirect("/admin/kelola-badananggaran")->with("success","badananggaran Organisasi Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $badananggaran = BadanAnggaran::findOrFail($id);
        $badananggaran->title = request('title');
        $badananggaran->description = request('description');
        $badananggaran->save(); //this will UPDATE the record

        return redirect("/admin/kelola-badananggaran")->with("success","badananggaran Organisasi was updated successfully");
    }

}
