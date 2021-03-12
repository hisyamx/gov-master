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
		$kategori 	= Kategori::all()->orderBy('id','ASC')->get();
        return view('admin/kategori/index',compact('kategori'));
    }

    // tambah
    public function store(Request $request)
    {
    	request()->validate([
					        'kategori' => 'required|unique:kategori'
					        ]);
    	$slug = str_slug($request->kategori, '-');
        Kategori::all()->insert([
            'kategori' => $request->kategori,
            'slug'	=> $slug
        ]);
        return redirect('admin/kategori/index')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit(Request $request)
    {
    	request()->validate([
					        'kategori' => 'required'
					        ]);
    	$slug = str_slug($request->kategori, '-');
        Kategori::all()->where('id',$request->id)->update([
            'kategori' => $request->kategori,
            'slug'	=> $slug
        ]);
        return redirect('admin/kategori/edit')->with(['sukses' => 'Data telah diupdate']);
    }

    // Delete
    public function delete($id)
    {
    	Kategori::all()->where('id',$id)->delete();
    	return redirect('admin/kategori/index')->with(['sukses' => 'Data telah dihapus']);
    }
}
