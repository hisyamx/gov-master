<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fraksi;

class FraksiController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fraksi(Request $request)
    {
        if($request->ajax()){
            $data = Fraksi::all()->get();
            return datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return response()->json($data);
        return view('admin.fraksi.fraksi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('foto')){
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('images', $filename ,'public');
        }
        $id = $request->id;
        
        $post   =   Fraksi::updateOrCreate(['id' => $id],
                    [
                        'fraksi_name' => $request->fraksi_name,
                        'fraksi_foto' => $filename,
                    ]); 

        return response()->json($post);
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
        $post  = Fraksi::where($where)->first();
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
        $post = Fraksi::where('id',$id)->delete();
        return response()->json($post);
    }
}