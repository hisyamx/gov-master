<?php

namespace App\Http\Controllers;

use App\Beranda;
use App\BerandaLogo;
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
        return view("admin.beranda.logo",['beranda' => $beranda]);
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

    public function storeBanner(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
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
        $beranda->cover_image = $fileNameToStore;
        $beranda->save();

        return redirect("/admin/kelola-banner")->with('success',"Banner Created Successfully");
    }


    public function showEditbanner($id)
    {
        $beranda = Beranda::findOrFail($id);
        return view("admin.beranda.editbanner",['beranda' => $beranda]);
    }

    public function destroyBanner($id)
    {
        $beranda = Beranda::findOrFail($id);
        $beranda->delete();

        if($beranda->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$beranda->cover_image);
        }

        return redirect("/admin/kelola-banner")->with("success","Banner Deleted Successfully");
    }

    public function update_recordBanner(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $beranda = Beranda::findOrFail($id);
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
        if($request->hasFile('cover_image')){
            $beranda->cover_image = $fileNameToStore;
        }
        $beranda->save(); //this will UPDATE the record

        return redirect("/admin/kelola-banner")->with("success","Banner was updated successfully");
    }

    public function storeLogo(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
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

        $berandalogo = new berandalogo();
        $berandalogo->name = request('name');
        $berandalogo->cover_image = $fileNameToStore;
        $berandalogo->save();

        return redirect("/admin/kelola-logo")->with('success',"Logo Created Successfully");
    }


    public function showEditLogo($id)
    {
        $berandalogo = BerandaLogo::findOrFail($id);
        return view("admin.beranda.editlogo",['berandalogo' => $berandalogo]);
    }

    public function destroyLogo($id)
    {
        $berandalogo = BerandaLogo::findOrFail($id);
        $berandalogo->delete();

        if($berandalogo->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$berandalogo->cover_image);
        }

        return redirect("/admin/kelola-logo")->with("success","Logo Deleted Successfully");
    }

    public function update_recordLogo(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $berandalogo = BerandaLogo::findOrFail($id);
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
            Storage::delete('public/cover_images/'.$berandalogo->cover_image);
        }
        $berandalogo->name = request('name');
        if($request->hasFile('cover_image')){
            $berandalogo->cover_image = $fileNameToStore;
        }
        $berandalogo->save(); //this will UPDATE the record

        return redirect("/admin/kelola-logo")->with("success","Logo was updated successfully");
    }

}
