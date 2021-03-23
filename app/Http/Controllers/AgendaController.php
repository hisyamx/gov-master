<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use Yajra\DataTables\Facades\DataTables;

class AgendaController extends Controller
{
    public function agendadprd()
    {
        return view('users.agenda.agendadprd');
    }
    public function agendasekretariat()
    {
        return view('users.agenda.agendasekre');
    }
    public function agenda(Request $request){
        if($request->ajax()){
            $data = Agenda::get();
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
        return view('admin.agenda.agendadprd');
    }
    public function store(Request $request)
    {
        $model = new Agenda();
        $model->nama_agenda = $request->nama_agenda;
        $model->durasi = $request->durasi;
        $model->tempat = $request->tempat;
        $model->tanggal_buat = $request->tanggal_buat;
        $model->tanggal_post = $request->tanggal_post;
        $model->peserta = $request->peserta;
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
        $post = Agenda::find($id);
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
        $post = App\Agenda::find($id);
        $post -> delete();
        return response()->json('success delete');
    }
    public function agendasekre(){
        return view('admin.agenda.agendasekre');
    }
}
