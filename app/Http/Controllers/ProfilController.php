<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function tentangdprd()
    {
        return view('users.profil.tentang');
    }
    public function visimisi()
    {
        return view('users.profil.visimisi');
    }
    public function tugasfungsi()
    {
        return view('users.profil.tugasfungsi');
    }
    public function strukturorganisasi()
    {
        return view('users.profil.strukturorg');
    }
    public function pejabatstruktural()
    {
        return view('users.profil.pejabatstruktural');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showKelolaTentang()
    {
        $profil = Profil::orderBy('name')->paginate(20);
        return view("admin.profil.tentang",['profil' => $profil]);
    }
    public function showKelolaVisimisi()
    {
        $profil = Profil::orderBy('name')->paginate(20);
        return view("admin.profil.visimisi",['profil' => $profil]);
    }
    public function showKelolaTugasfungsi()
    {
        $profil = Profil::orderBy('name')->paginate(20);
        return view("admin.profil.tugasfungsi",['profil' => $profil]);
    }
    public function showKelolaStukturorganisasi()
    {
        $profil = Profil::orderBy('name')->paginate(20);
        return view("admin.profil.stukturorganisasi",['profil' => $profil]);
    }
    public function showKelolaPejabatstruktural()
    {
        $profil = Profil::orderBy('name')->paginate(20);
        return view("admin.profil.pejabatstruktural",['profil' => $profil]);
    }

    public function create()
    {
        return view("admin.profil.create");
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        // $karyawan = Karyawan::all();
        return view("profil.edit",['profil' => $profil],['division' => $division]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'status' =>  'required',
            'division' =>  'required',
            'pj' => 'required',
            'start' =>  'required',
            'finish' =>  'nullable',
            'description' => 'required|max:999',
            'cover_image' => 'image|nullable|max:1999'
            ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $profil = new Profil();

        $profil->name = request('name');
        $profil->status = request('status');
        $profil->division = request('division');
        $profil->pj = request('pj');
        $profil->start = request('start');

        $profil->finish = request('finish');
        $profil->description = request('description');
        $profil->cover_image = $fileNameToStore;

        $profil->save();

        return redirect("/profil")->with('success',"profil Created Successfully");
    }


    public function show($id)
    {
        $profil = Profil::findOrFail($id);
        return view("profil.show",['profil' => $profil]);
    }

    public function destroy($id)
    {
        $profil = profil::findOrFail($id);
        $profil->delete();

        if($profil->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$profil->cover_image);
        }

        return redirect("/profil")->with("success","profil Deleted Successfully");
    }

    public function update_record(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'status' =>  'required',
            'division' =>  'required',
            'pj' => 'required',
            'start' =>  'required',
            'finish' =>  'nullable',
            'description' => 'required|max:999',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $profil = Profil::findOrFail($id);
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/cover_images/'.$profil->cover_image);
        }

        $profil->name = request('name');
        $profil->status = request('status');
        $profil->division = request('division');
        $profil->pj = request('pj');
        $profil->start = request('start');
        $profil->finish = request('finish');
        $profil->description = request('description');
        if($request->hasFile('cover_image')){
            $profil->cover_image = $fileNameToStore;
        }

        $profil->save(); //this will UPDATE the record

        return redirect("/profil")->with("success","Account was updated successfully");
    }

    public function single($id)
    {
        $profil = Profil::where('division',$id)->orderBy('name') -> paginate(20);
        return view('profil.single',['profil' => $profil,'division' => $division]);
    }
}
