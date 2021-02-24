<?php

namespace App\Http\Controllers;

use App\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{

    public function visimisi()
    {
        return view('users.profil.visimisi');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showKelolaVisimisi()
    {
        $visimisi = Visimisi::orderBy('title')->paginate(20);
        return view("admin.profil.visimisi",['visimisi' => $visimisi]);
    }

    // visimisi
    public function showEditVisimisi($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        return view("admin.profil.editvisimisi",['visimisi' => $visimisi]);
    }

    public function storeVisimisi(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'descriptionvisi' => 'required',
            'descriptionmisi' => 'required'
            ]);

        $visimisi = new visimisi();

        $visimisi->title = request('title');
        $visimisi->descriptionvisi = request('descriptionvisi');
        $visimisi->descriptionmisi = request('descriptionmisi');
        $visimisi->save();

        return redirect("/admin/kelola-visimisi")->with('success',"Visi misi Created Successfully");
    }

    public function destroyVisimisi($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        $visimisi->delete();
        return redirect("/admin/kelola-visimisi")->with("success","Visi misi Deleted Successfully");
    }

    public function editVisimisi(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'descriptionvisi' => 'required',
            'descriptionmisi' => 'required'
        ]);

        $visimisi = Visimisi::findOrFail($id);
        $visimisi->title = request('title');
        $visimisi->descriptionvisi = request('descriptionvisi');
        $visimisi->descriptionmisi = request('descriptionmisi');
        $visimisi->save(); //this will UPDATE the record

        return redirect("/admin/kelola-visimisi")->with("success","Visi misi was updated successfully");
    }

}
