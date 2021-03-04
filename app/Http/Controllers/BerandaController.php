<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Beranda;
use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BerandaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function kelolaSlider()
    {
        $beranda = Beranda::orderBy('title')->paginate(3);
        return view("admin.beranda.slider",['beranda' => $beranda]);
    }
    public function kelolaBanner()
    {
        $banner = Banner::orderBy('title')->paginate(3);
        return view("admin.beranda.banner",['banner' => $banner]);
    }
    public function kelolaLogo()
    {
        $logo = Logo::orderBy('title')->paginate(3);
        return view("admin.beranda.logo",['logo' => $logo]);
    }

    public function editBanner($id)
    {
        $banner = Banner::findOrFail($id);
        return view("admin.beranda.editbanner",['banner' => $banner]);
    }
    public function editSlider($id)
    {
        $beranda = Beranda::findOrFail($id);
        return view("admin.beranda.editbanner",['beranda' => $beranda]);
    }

    public function editLogo($id)
    {
        $logo = Logo::findOrFail($id);
        return view("admin.beranda.editlogo",['logo' => $logo]);
    }

    public function storeSlider(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
            'description' => 'required|nullable',
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

        $beranda = new Beranda();
        $beranda->title = request('title');
        $beranda->description = request('description');
        $beranda->cover_image = $fileNameToStore;
        $beranda->save();

        return redirect("/admin/kelola-slider")->with('success',"Slider Created Successfully");
    }


    public function showEditSlider($id)
    {
        $beranda = Beranda::findOrFail($id);
        return view("admin.beranda.editslider",['beranda' => $beranda]);
    }

    public function destroySlider($id)
    {
        $beranda = Beranda::findOrFail($id);
        $beranda->delete();

        if($beranda->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$beranda->cover_image);
        }

        return redirect("/admin/kelola-slider")->with("success","Slider Deleted Successfully");
    }

    public function update_recordSlider(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
            'description' => 'required|nullable',
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

        return redirect("/admin/kelola-slider")->with("success","Slider was updated successfully");
    }
    public function storeBanner(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
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

        $banner = new Banner();
        $banner->title = request('title');
        $banner->cover_image = $fileNameToStore;
        $banner->save();

        return redirect("/admin/kelola-banner")->with('success',"Banner Created Successfully");
    }


    public function showEditbanner($id)
    {
        $banner = Banner::findOrFail($id);
        return view("admin.beranda.editbanner",['banner' => $banner]);
    }

    public function destroyBanner($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        if($banner->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$banner->cover_image);
        }

        return redirect("/admin/kelola-banner")->with("success","Banner Deleted Successfully");
    }

    public function update_recordBanner(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $banner = Banner::findOrFail($id);
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
            Storage::delete('public/cover_images/'.$banner->cover_image);
        }
        $banner->name = request('name');
        if($request->hasFile('cover_image')){
            $banner->cover_image = $fileNameToStore;
        }
        $banner->save(); //this will UPDATE the record

        return redirect("/admin/kelola-banner")->with("success","Banner was updated successfully");
    }

    public function storeLogo(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
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

        $logo = new Logo();
        $logo->title = request('title');
        $logo->cover_image = $fileNameToStore;
        $logo->save();

        return redirect("/admin/kelola-logo")->with('success',"Logo Created Successfully");
    }


    public function showEditLogo($id)
    {
        $logo = Logo::findOrFail($id);
        return view("admin.beranda.editlogo",['logo' => $logo]);
    }

    public function destroyLogo($id)
    {
        $logo = Logo::findOrFail($id);
        $logo->delete();

        if($logo->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$logo->cover_image);
        }

        return redirect("/admin/kelola-logo")->with("success","Logo Deleted Successfully");
    }

    public function update_recordLogo(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|nullable',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $logo = Logo::findOrFail($id);
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get title with the extension
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
            Storage::delete('public/cover_images/'.$logo->cover_image);
        }
        $logo->title = request('title');
        if($request->hasFile('cover_image')){
            $logo->cover_image = $fileNameToStore;
        }
        $logo->save(); //this will UPDATE the record

        return redirect("/admin/kelola-logo")->with("success","Logo was updated successfully");
    }

}
