<?php

namespace App\Http\Controllers;

use App\Beranda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BerandaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function kelolaBanner()
    {
        $beranda = Beranda::orderBy('name')->paginate(20);
        return view("admin.beranda.banner",['beranda' => $beranda]);
    }
    public function kelolaLogo()
    {
        $beranda = Beranda::orderBy('name')->paginate(20);
        return view("admin.beranda.banner",['beranda' => $beranda]);
    }

    public function editBanner($id)
    {
        $beranda = beranda::findOrFail($id);
        return view("admin.beranda.editbanner",['beranda' => $beranda]);
    }

    public function editLogo($id)
    {
        $beranda = beranda::findOrFail($id);
        return view("admin.beranda.editlogo",['beranda' => $beranda]);
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

        $beranda = new beranda();

        $beranda->name = request('name');
        $beranda->status = request('status');
        $beranda->division = request('division');
        $beranda->pj = request('pj');
        $beranda->start = request('start');

        $beranda->finish = request('finish');
        $beranda->description = request('description');
        $beranda->cover_image = $fileNameToStore;

        $beranda->save();

        return redirect("/beranda")->with('success',"beranda Created Successfully");
    }


    public function show($id)
    {
        $P = P::findOrFail($id);
        return view("beranda.show",['beranda' => $beranda]);
    }

    public function destroy($id)
    {
        $beranda = beranda::findOrFail($id);
        $beranda->delete();

        if($beranda->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$beranda->cover_image);
        }

        return redirect("/beranda")->with("success","beranda Deleted Successfully");
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

        $beranda = beranda::findOrFail($id);
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
            Storage::delete('public/cover_images/'.$beranda->cover_image);
        }

        $beranda->name = request('name');
        $beranda->status = request('status');
        $beranda->division = request('division');
        $beranda->pj = request('pj');
        $beranda->start = request('start');
        $beranda->finish = request('finish');
        $beranda->description = request('description');
        if($request->hasFile('cover_image')){
            $beranda->cover_image = $fileNameToStore;
        }

        $beranda->save(); //this will UPDATE the record

        return redirect("/beranda")->with("success","Account was updated successfully");
    }

    public function single($id)
    {
        $beranda = beranda::where('division',$id)->orderBy('name') -> paginate(20);
        $division = Division::orderBy('name') -> get();

        return view('beranda.single',['beranda' => $beranda,'division' => $division]);
    }
}
