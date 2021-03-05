<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use Yajra\DataTables\Facades\DataTables;

class AnggotaController extends Controller
{
    public function anggota(Request $request){
        if($request->ajax()){
            $data = Anggota::get();
            // dd($data);
            return datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$row->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->addColumn('foto', function($row){
                            $image = url('public/storage/anggota/'.$row->foto);
                            return $image;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('admin.fraksi.anggota');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if($request->hasFile('foto')){
            $filename = $request->foto->getClientOriginalName();
            $filename = str_replace(' ','_',$filename);
            $request->foto->storeAs('anggota', $filename ,'public');
        }
        $model = new Anggota();
        $model->nama_anggota = $request->nama_anggota;
        $model->nama_fraksi = $request->nama_fraksi;
        $model->agama = $request->agama;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->jabatan_fraksi = $request->jabatan_fraksi;
        $model->komisi = $request->komisi;
        $model->jabatan_komisi = $request->jabatan_komisi;
        $model->akd = $request->akd;
        $model->jabatan_akd = $request->jabatan_akd;
        $model->dapil = $request->dapil;
        $model->foto = $filename;
        $model->save();

        return response()->json('Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Anggota::where($where)->first();
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Anggota::where('id',$id)->delete();
        return response()->json($post);
    }
}
