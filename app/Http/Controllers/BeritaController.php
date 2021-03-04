<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{

    // User
    public function berita()
    {
    	$model 	= new Berita();
		$berita = $model->listing();
        return view('users.berita.beritautama',$berita);
    }

    // kontak
    public function detailberita($slug_berita)
    {
        $model  = new Berita();
        $berita = $model->read($slug_berita);

        return view('users.berita.detailberita',$berita);
    }

    // Pressrelease
    public function pressrelease($slug_berita)
    {
        $model  = new Berita();
        $berita = $model->read($slug_berita);
        return view('users.berita.detailberita',$berita);
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
        return view("admin.profil.berita",['berita' => $berita]);
    }
    // Berita
    public function showEditBerita($id)
    {
        $berita = Berita::findOrFail($id);
        return view("admin.profil.editberita",['berita' => $berita]);
    }

    public function storeBerita(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|nullable',
            'tags' => 'required|nullable',
            'author' => 'required|nullable',
            'tanggal_buat' => 'required|nullable',
            'tanggal_post' => 'required|nullable',
            'description' => 'required|nullable',
            'foto' => 'image|nullable'
            ]);

        // Handle File Upload
        if($request->hasFile('foto')){
            // Get filename with the extension
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('foto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto')->storeAs('public/fotos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $berita = new Berita();

        $berita->judul = request('judul');
        $berita->tags = request('tags');
        $berita->author = request('author');
        $berita->tanggal_buat = request('tanggal_buat');
        $berita->tanggal_post = request('tanggal_post');
        $berita->description = request('description');
        $berita->foto = $fileNameToStore;

        $berita->save();

        return redirect("/admin/kelola-beritadprd")->with('success',"Berita Created Successfully");
    }

    public function destroyBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        if($berita->foto != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/fotos/'.$berita->foto);
        }

        return redirect("/admin/kelola-beritadprd")->with("success","Berita Deleted Successfully");
    }

    public function editBerita(Request $request,$id)
    {
        $this->validate($request, [
            'judul' => 'required|nullable',
            'tags' => 'required|nullable',
            'author' => 'required|nullable',
            'tanggal_buat' => 'required|nullable',
            'tanggal_post' => 'required|nullable',
            'description' => 'required|nullable',
            'foto' => 'image|nullable'
        ]);

        $berita = Berita::findOrFail($id);
        // Handle File Upload
        if($request->hasFile('foto')){
            // Get filename with the extension
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('foto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto')->storeAs('public/fotos', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/fotos/'.$berita->foto);
        }

        $berita->judul = request('judul');
        $berita->tags = request('tags');
        $berita->author = request('author');
        $berita->tanggal_buat = request('tanggal_buat');
        $berita->tanggal_post = request('tanggal_post');
        $berita->description = request('description');
        if($request->hasFile('foto')){
            $berita->foto = $fileNameToStore;
        }

        $berita->save(); //this will UPDATE the record

        return redirect("/admin/kelola-beritadprd")->with("success","Berita was updated successfully");
    }


}
