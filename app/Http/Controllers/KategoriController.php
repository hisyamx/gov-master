<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    // Index
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
		$kategori 	= Kategori::all()->orderBy('urutan','ASC')->get();

		$data = array(  'title'     => 'Kategori Berita',
						'kategori'	=> $kategori,
                        'content'   => 'admin/kategori/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah(Request $request)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_kategori' => 'required|unique:kategori'
					        ]);
    	$slug = str_slug($request->nama_kategori, '-');
        Kategori::all()->insert([
            'nama_kategori' => $request->nama_kategori,
            'slug'	=> $slug,
            'urutan'   		=> $request->urutan
        ]);
        return redirect('admin/kategori')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit(Request $request)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_kategori' => 'required',
					        'urutan' 		=> 'required',
					        ]);
    	$slug = str_slug($request->nama_kategori, '-');
        Kategori::all()->where('id',$request->id)->update([
            'nama_kategori' => $request->nama_kategori,
            'slug'	=> $slug,
            'urutan'   		=> $request->urutan
        ]);
        return redirect('admin/kategori')->with(['sukses' => 'Data telah diupdate']);
    }

    // Delete
    public function delete($id)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	Kategori::all()->where('id',$id)->delete();
    	return redirect('admin/kategori')->with(['sukses' => 'Data telah dihapus']);
    }
}
