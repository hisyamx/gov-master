<?php

namespace App\Http\Controllers;

use App\BadanPerda;
use Illuminate\Http\Request;

class BadanPerdaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // badanperda
    public function showKelola()
    {
        $badanperda = BadanPerda::orderBy('title')->paginate(20);
        return view("admin.akd.badanperda",['badanperda' => $badanperda]);
    }

    public function showEdit($id)
    {
        $badanperda = BadanPerda::findOrFail($id);
        return view("admin.akd.editbadanperda",['badanperda' => $badanperda]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $badanperda = new BadanPerda();

        $badanperda->title = request('title');
        $badanperda->description = request('description');
        $badanperda->save();

        return redirect("/admin/kelola-badanperda")->with('success',"Badan Perda Created Successfully");
    }

    public function destroy($id)
    {
        $badanperda = BadanPerda::findOrFail($id);
        $badanperda->delete();
        return redirect("/admin/kelola-badanperda")->with("success","Badan Perda Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $badanperda = BadanPerda::findOrFail($id);
        $badanperda->title = request('title');
        $badanperda->description = request('description');
        $badanperda->save(); //this will UPDATE the record

        return redirect("/admin/kelola-badanperda")->with("success","Badan Perda was updated successfully");
    }

}
