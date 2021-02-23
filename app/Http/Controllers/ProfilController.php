<?php

namespace App\Http\Controllers;

use App\Tentang;
use App\Visimisi;
use App\Tugasfungsi;
use App\PejabatStruktural;
use App\StrukturOrganisasi;
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
        $tentang = Tentang::orderBy('title')->paginate(20);
        return view("admin.profil.tentang",['tentang' => $tentang]);
    }
    public function showKelolaVisimisi()
    {
        $visimisi = Visimisi::orderBy('title')->paginate(20);
        return view("admin.profil.visimisi",['visimisi' => $visimisi]);
    }
    public function showKelolaTugasfungsi()
    {
        $tugasfungsi = Tugasfungsi::orderBy('title')->paginate(20);
        return view("admin.profil.tugasfungsi",['tugasfungsi' => $tugasfungsi]);
    }
    public function showKelolaStukturorganisasi()
    {
        $strukturorganisasi = StrukturOrganisasi::orderBy('title')->paginate(20);
        return view("admin.profil.stukturorganisasi",['strukturorganisasi' => $strukturorganisasi]);
    }
    public function showKelolaPejabatstruktural()
    {
        $pejabatstruktural = PejabatStruktural::orderBy('title')->paginate(20);
        return view("admin.profil.pejabatstruktural",['pejabatstruktural' => $pejabatstruktural]);
    }

    // tentang
    public function showEditTentang($id)
    {
        $tentang = Tentang::findOrFail($id);
        // $karyawan = Karyawan::all();
        return view("admin.profil.edittentang",['tentang' => $tentang]);
    }

    public function storeTentang(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:999',
            'cover_image' => 'image|nullable|max:1999'
            ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginaltitle();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $tentang = new Tentang();

        $tentang->title = request('title');
        $tentang->description = request('description');
        $tentang->cover_image = $filenameToStore;

        $tentang->save();

        return redirect("/admin/profil/tentang")->with('success',"profil Created Successfully");
    }

    public function destroyTentang($id)
    {
        $tentang = Tentang::findOrFail($id);
        $tentang->delete();

        if($tentang->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$tentang->cover_image);
        }

        return redirect("/admin/profil/kelola-tentang")->with("success","profil Deleted Successfully");
    }

    public function update_recordTentang(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:999',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $tentang = Tentang::findOrFail($id);
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginaltitle();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);
            // Delete file if exists
            Storage::delete('public/cover_images/'.$tentang->cover_image);
        }

        $tentang->title = request('title');
        $tentang->description = request('description');
        if($request->hasFile('cover_image')){
            $tentang->cover_image = $filenameToStore;
        }

        $tentang->save(); //this will UPDATE the record

        return redirect("/admin/profil/kelola-tentang")->with("success","Account was updated successfully");
    }

    // tugasfungsi
    public function showEditTugasfungsi($id)
    {
        $tugasfungsi = Tugasfungsi::findOrFail($id);
        return view("admin.profil.edittugasfungsi",['tugasfungsi' => $tugasfungsi]);
    }

    public function storeTugasfungsi(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:999'
            ]);

        $tugasfungsi = new Tugasfungsi();

        $tugasfungsi->title = request('title');
        $tugasfungsi->description = request('description');
        $tugasfungsi->save();

        return redirect("/admin/profil/kelola-tugasfungsi")->with('success',"Tugas fungsi Created Successfully");
    }

    public function destroyTugasfungsi($id)
    {
        $tugasfungsi = Tugasfungsi::findOrFail($id);
        $tugasfungsi->delete();
        return redirect("/admin/profil/kelola-tugasfungsi")->with("success","Tugas fungsi Deleted Successfully");
    }

    public function update_recordTugasfungsi(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:999'
        ]);

        $tugasfungsi = Tugasfungsi::findOrFail($id);
        $tugasfungsi->title = request('title');
        $tugasfungsi->description = request('description');
        $tugasfungsi->save(); //this will UPDATE the record

        return redirect("/admin/profil/kelola-tugasfungsi")->with("success","Tugas fungsi was updated successfully");
    }

    // Pejabatstruktural
    public function showEditPejabatstruktural($id)
    {
        $pejabatstruktural = PejabatStruktural::findOrFail($id);
        return view("admin.profil.editpejabatstruktural",['pejabatstruktural' => $pejabatstruktural]);
    }

    public function storePejabatstruktural(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:999'
            ]);

        $pejabatstruktural = new PejabatStruktural();

        $pejabatstruktural->title = request('title');
        $pejabatstruktural->description = request('description');
        $pejabatstruktural->save();

        return redirect("/admin/profil/kelola-pejabatstruktural")->with('success',"profil Created Successfully");
    }

    public function destroyPejabatstruktural($id)
    {
        $pejabatstruktural = PejabatStruktural::findOrFail($id);
        $pejabatstruktural->delete();
        return redirect("/admin/profil/kelola-pejabatstruktural")->with("success","pejabatstruktural Deleted Successfully");
    }

    public function update_recordPejabatstruktural(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:999'
        ]);

        $pejabatstruktural = PejabatStruktural::findOrFail($id);
        $pejabatstruktural->title = request('title');
        $pejabatstruktural->description = request('description');
        $pejabatstruktural->save(); //this will UPDATE the record

        return redirect("/admin/profil/kelola-pejabatstruktural")->with("success","pejabatstruktural was updated successfully");
    }

    // strukturorganisasi
    public function showEditstrukturorganisasi($id)
    {
        $strukturorganisasi = StrukturOrganisasi::findOrFail($id);
        return view("admin.profil.editstrukturorganisasi",['strukturorganisasi' => $strukturorganisasi]);
    }

    public function storestrukturorganisasi(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:999'
            ]);

        $strukturorganisasi = new StrukturOrganisasi();

        $strukturorganisasi->title = request('title');
        $strukturorganisasi->description = request('description');
        $strukturorganisasi->save();

        return redirect("/admin/profil/kelola-strukturorganisasi")->with('success',"Struktur Organisasi Created Successfully");
    }

    public function destroystrukturorganisasi($id)
    {
        $strukturorganisasi = StrukturOrganisasi::findOrFail($id);
        $strukturorganisasi->delete();
        return redirect("/admin/profil/kelola-strukturorganisasi")->with("success","Struktur Organisasi Deleted Successfully");
    }

    public function update_recordstrukturorganisasi(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:999'
        ]);

        $strukturorganisasi = StrukturOrganisasi::findOrFail($id);
        $strukturorganisasi->title = request('title');
        $strukturorganisasi->description = request('description');
        $strukturorganisasi->save(); //this will UPDATE the record

        return redirect("/admin/profil/kelola-strukturorganisasi")->with("success","Struktur Organisasi was updated successfully");
    }

}
