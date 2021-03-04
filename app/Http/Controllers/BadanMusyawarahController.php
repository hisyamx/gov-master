<?php

namespace App\Http\Controllers;

use App\BadanMusyawarah;
use Illuminate\Http\Request;

class BadanMusyawarahController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // badanmusyawarah
    public function showKelola()
    {
        $badanmusyawarah = BadanMusyawarah::orderBy('title')->paginate(20);
        return view("admin.akd.badanmusyawarah",['badanmusyawarah' => $badanmusyawarah]);
    }

    public function showEdit($id)
    {
        $badanmusyawarah = BadanMusyawarah::findOrFail($id);
        return view("admin.akd.editbadanmusyawarah",['badanmusyawarah' => $badanmusyawarah]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
            ]);

        $badanmusyawarah = new BadanMusyawarah();

        $badanmusyawarah->title = request('title');
        $badanmusyawarah->description = request('description');
        $badanmusyawarah->save();

        return redirect("/admin/kelola-badanmusyawarah")->with('success',"Badan Musyawarah Created Successfully");
    }

    public function destroy($id)
    {
        $badanmusyawarah = BadanMusyawarah::findOrFail($id);
        $badanmusyawarah->delete();
        return redirect("/admin/kelola-badanmusyawarah")->with("success","Badan Musyawarah Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $badanmusyawarah = BadanMusyawarah::findOrFail($id);
        $badanmusyawarah->title = request('title');
        $badanmusyawarah->description = request('description');
        $badanmusyawarah->save(); //this will UPDATE the record

        return redirect("/admin/kelola-badanmusyawarah")->with("success","Badan Musyawarah was updated successfully");
    }

}
