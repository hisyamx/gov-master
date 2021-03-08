<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{

    // User
    public function berita()
    {

        return view('users.berita.beritautama');
    }

    // kontak
    public function detailberita($slug_berita)
    {
        return view('users.berita.detailberita');
    }

    // Pressrelease
    public function pressrelease($slug_berita)
    {
        return view('users.berita.detailberita');
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
        $berita = berita::orderBy('id','desc')->paginate();
        return view('users/berita/index', compact('berita'));
    }
    public function beritadetail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('visitors/berita/show', compact('berita'));
    }

    //dashboardberita
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = berita::all();
        return view('admin/berita/index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/berita/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $judul = $request->judul;
        $slug = Str::slug($request->judul, '-');
        $detail = $request->deskripsi;
        $tags = $request->tags;
        $author = $request->author;
        $tanggal_buat = $request->tanggal_buat;
        $tanggal_post = $request->tanggal_post;
        $foto = $request->foto;

        $dom = new \domdocument();
        $dom -> loadHTML($detail, LIBXML_HTML_NOIMPLIED|LIBXML_HTML_NODEFDTD);

        $image = $dom->getElementsByTagName('img');

        foreach ($image as $key => $img) {
            $data = $img -> getattribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name = time().$key.'.png'.'.jpeg'.'.jpg';
            $path = public_path().'/storage/images/'.$image_name;

            file_put_contents($path, $data);
            $img->removeattribute('src');
            $img->setattribute('src', '/storage/images/'.$image_name);

        }
            $detail = $dom->savehtml();
                if($request->hasFile('foto')){
                    $filename = $request->foto->getClientOriginalName();
                    $request->foto->storeAs('images', $filename ,'public');
                }
            $berita = new berita;
            $berita -> judul = $judul;
            $berita -> slug = $slug;
            $berita -> tags = $tags;
            $berita -> author = $author;
            $berita -> tanggal_buat = $tanggal_buat;
            $berita -> tanggal_post = $tanggal_post;
            $berita -> foto = $filename;
            $berita -> deskripsi = $detail;

            $berita -> save();
            return redirect('/admin/berita');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(berita $berita)
    {
        return view('admin/berita/show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(berita $berita)
    {
        return view('admin/berita/edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $berita)
    {
        if($request->hasFile('foto') == "")
    	{
            $berita->foto=$berita->foto;

    	}
    	else if($request->hasFile('foto'))
    	{
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('images', $filename ,'public');
            $berita->foto = $filename;
        }
        $berita->save();
            berita::where('id', $berita->id)
            ->update([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'tags' => $request->tags,
                'author' => $request->author,
                'tanggal_buat' => $request->tanggal_buat,
                'tanggal_post' => $request->tanggal_post,
                'deskripsi' => $request->deskripsi
            ]);
            return redirect('/admin/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $berita)
    {
        berita::destroy($berita->id);
        return redirect('/admin/berita')->with('sukses', 'Data berhasil dihapus');
    }

}
