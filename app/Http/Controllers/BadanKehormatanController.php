<?php

namespace App\Http\Controllers;

use App\BadanKehormatan;
use Illuminate\Http\Request;

class BadanKehormatanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // badankehormatan
    public function showKelola()
    {
        $badankehormatan = BadanKehormatan::orderBy('title')->paginate(20);
        return view("admin.akd.badankehormatan",['badankehormatan' => $badankehormatan]);
    }

    public function showEdit($id)
    {
        $badankehormatan = BadanKehormatan::findOrFail($id);
        return view("admin.akd.editbadankehormatan",['badankehormatan' => $badankehormatan]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $badankehormatan = new BadanKehormatan();

        $badankehormatan->title = request('title');
        $badankehormatan->description = request('description');
        $badankehormatan->save();

        return redirect("/admin/kelola-badankehormatan")->with('success',"Badan Kehormatan Created Successfully");
    }

    public function destroy($id)
    {
        $badankehormatan = BadanKehormatan::findOrFail($id);
        $badankehormatan->delete();
        return redirect("/admin/kelola-badankehormatan")->with("success","Badan Kehormatan Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $badankehormatan = BadanKehormatan::findOrFail($id);
        $badankehormatan->title = request('title');
        $badankehormatan->description = request('description');
        $badankehormatan->save(); //this will UPDATE the record

        return redirect("/admin/kelola-badankehormatan")->with("success","Badan Kehormatan was updated successfully");
    }

}
