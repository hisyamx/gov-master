<?php

namespace App\Http\Controllers;

use App\Logo;
use App\Sekretariat;
use Illuminate\Http\Request;

class SekretariatController extends Controller
{
    public function rencanalaporan()
    {
        $logo = Logo::all();
        $sekretariat = Sekretariat::all();
        return view('users.sekretariat.rencanalaporan',compact('sekretariat','logo'));
    }
    public function tugasfungsi()
    {
        $logo = Logo::all();
        $sekretariat = Sekretariat::all();
        return view('users.sekretariat.tugasfungsi',compact('sekretariat','logo'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showKelola()
    {
        $sekretariat = Sekretariat::orderBy('title')->paginate(20);
        return view("admin.sekretariat.sekretariat",['sekretariat' => $sekretariat]);
    }

    // visimisi
    public function showEdit($id)
    {
        $sekretariat = Sekretariat::findOrFail($id);
        return view("admin.sekretariat.sekretariat",['sekretariat' => $sekretariat]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'nullable',
            'description' => 'nullable',
            'link' => 'nullable'
            ]);

        $sekretariat = new Sekretariat();

        $sekretariat->title = request('title');
        $sekretariat->description = request('description');
        $sekretariat->link = request('link');
        $sekretariat->save();

        return redirect("/admin/kelola-visimisi")->with('success',"Sekretariat Created Successfully");
    }

    public function destroy($id)
    {
        $sekretariat = Sekretariat::findOrFail($id);
        $sekretariat->delete();
        return redirect("/admin/kelola-visimisi")->with("success","Sekretariat Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'nullable',
            'description' => 'nullable',
            'link' => 'nullable'
        ]);

        $sekretariat = Sekretariat::findOrFail($id);
        $sekretariat->title = request('title');
        $sekretariat->description = request('description');
        $sekretariat->link = request('link');
        $sekretariat->save(); //this will UPDATE the record

        return redirect("/admin/kelola-visimisi")->with("success","Sekretariat was updated successfully");
    }

}
