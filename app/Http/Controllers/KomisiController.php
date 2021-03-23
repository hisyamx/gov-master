<?php

namespace App\Http\Controllers;

use App\Komisi;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class KomisiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // komisi
    public function showKelola(Request $request)
    {
        if($request->ajax()){
            $data = Komisi::get();
            // dd($data);
            return datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$row->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        $komisi = Komisi::orderBy('title')->paginate(20);
        return view("admin.akd.komisi",['komisi' => $komisi]);
    }

    public function showEdit($id)
    {
        $komisi = Komisi::findOrFail($id);
        return view("admin.akd.editkomisi",['komisi' => $komisi]);
        return response()->json();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'fraksi' => 'required',
            'jabatan' => 'required',
            'komisi' => 'required',
            'tingkat' => 'required'
            ]);

        $komisi = new Komisi();

        $komisi->nama = $request->nama;
        $komisi->fraksi = $request->fraksi;
        $komisi->jabatan = $request->jabatan;
        $komisi->komisi = $request->komisi;
        $komisi->tingkat = $request->tingkat;
        $komisi->save();

        // return redirect("/admin/kelola-komisi")->with('success',"Komisi Created Successfully");
        return response()->json('Berhasil Disimpan');
    }

    public function destroy($id)
    {
        $komisi = Komisi::findOrFail($id);
        $komisi->delete();
        return redirect("/admin/kelola-komisi")->with("success","Komisi Deleted Successfully");
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'fraksi' => 'required',
            'jabatan' => 'required',
            'komisi' => 'required',
            'tingkat' => 'required'
        ]);

        $komisi = Komisi::findOrFail($id);
        $komisi->nama = $request->nama;
        $komisi->fraksi = $request->fraksi;
        $komisi->jabatan = $request->jabatan;
        $komisi->komisi = $request->komisi;
        $komisi->tingkat = $request->tingkat;
        $komisi->save(); //this will UPDATE the record

        return redirect("/admin/kelola-komisi")->with("success","Komisi was updated successfully");
    }

}
