<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showKelolaTentang()
    {
        $tentang = Tentang::orderBy('title')->paginate(20);
        return view("admin.profil.tentang",['tentang' => $tentang]);
    }
    // tentang
    public function showEditTentang($id)
    {
        $tentang = Tentang::findOrFail($id);
        return view("admin.profil.edittentang",['tentang' => $tentang]);
    }

    public function storeTentang(Request $request)
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

        $tentang = new Tentang();

        $tentang->title = request('title');
        $tentang->description = request('description');
        $tentang->cover_image = $fileNameToStore;

        $tentang->save();

        return redirect("/admin/kelola-tentangdprd")->with('success',"profil Created Successfully");
    }

    public function destroyTentang($id)
    {
        $tentang = Tentang::findOrFail($id);
        $tentang->delete();

        if($tentang->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$tentang->cover_image);
        }

        return redirect("/admin/kelola-tentangdprd")->with("success","profil Deleted Successfully");
    }

    public function editTentang(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
            'description' => 'required|nullable',
            'cover_image' => 'image|nullable'
        ]);

        $tentang = Tentang::findOrFail($id);
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
            Storage::delete('public/cover_images/'.$tentang->cover_image);
        }

        $tentang->title = request('title');
        $tentang->description = request('description');
        if($request->hasFile('cover_image')){
            $tentang->cover_image = $fileNameToStore;
        }

        $tentang->save(); //this will UPDATE the record

        return redirect("/admin/kelola-tentangdprd")->with("success","Account was updated successfully");
    }

}