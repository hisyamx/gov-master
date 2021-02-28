<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function berita()
    {
        return view('users.berita.beritautama');
    }
    public function detailberita()
    {
        return view('users.berita.detailberita');
    }
    public function pressrelease()
    {
        return view('users.berita.pressrelease');
    }

    //admin
    public function kelolaBerita()
    {
        return view('admin.berita.beritautama');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showKelolaBerita()
    {
        $berita = Berita::orderBy('title')->paginate(20);
        return view("admin.profil.Berita",['Berita' => $berita]);
    }
    // Berita
    public function showEditBerita($id)
    {
        $berita = Berita::findOrFail($id);
        return view("admin.profil.editBerita",['Berita' => $berita]);
    }

    public function storeBerita(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
            'description' => 'required|nullable',
            'cover_image' => 'image|nullable'
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

        $berita = new Berita();

        $berita->title = request('title');
        $berita->description = request('description');
        $berita->cover_image = $fileNameToStore;

        $berita->save();

        return redirect("/admin/kelola-Beritadprd")->with('success',"profil Created Successfully");
    }

    public function destroyBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        if($berita->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$berita->cover_image);
        }

        return redirect("/admin/kelola-Beritadprd")->with("success","profil Deleted Successfully");
    }

    public function editBerita(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
            'description' => 'required|nullable',
            'cover_image' => 'image|nullable'
        ]);

        $berita = Berita::findOrFail($id);
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
            Storage::delete('public/cover_images/'.$berita->cover_image);
        }

        $berita->title = request('title');
        $berita->description = request('description');
        if($request->hasFile('cover_image')){
            $berita->cover_image = $fileNameToStore;
        }

        $berita->save(); //this will UPDATE the record

        return redirect("/admin/kelola-Beritadprd")->with("success","Account was updated successfully");
    }


}
