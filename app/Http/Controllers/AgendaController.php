<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\AgendaBlog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Agenda;
use Yajra\DataTables\Facades\DataTables;

class AgendaController extends Controller
{
    // user
    public function agendadprd()
    {
        $agenda = Agenda::all();
        $agendablog = AgendaBlog::all();
        return view('users.agenda.agendadprd',compact('agenda','agendablog'));
    }
    public function agendasekretariat()
    {
        $agenda = Agenda::all();
        $agendablog = AgendaBlog::all();
        return view('users.agenda.agendasekre',compact('agenda','agendablog'));
    }
<<<<<<< HEAD
    public function blog()
    {
        $agenda = Agenda::orderBy('id','desc')->paginate();
        $agendablog = AgendaBlog::orderBy('id','desc')->paginate();
        return view('users/agendablog/index', compact('agendablog'));
    }
    public function blogdetail($slug)
    {
        $agendablog = AgendaBlog::where('slug', $slug)->first();
        return view('visitors/agendablog/show', compact('agendablog'));
    }

    //dashboardblog
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendablog = AgendaBlog::all();
        return view('admin/agendablog/index',compact('agendablog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/agendablog/create');
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
            $agendablog = new AgendaBlog;
            $agendablog -> judul = $judul;
            $agendablog -> slug = $slug;
            $agendablog -> tags = $tags;
            $agendablog -> author = $author;
            $agendablog -> tanggal_buat = $tanggal_buat;
            $agendablog -> tanggal_post = $tanggal_post;
            $agendablog -> foto = $filename;
            $agendablog -> deskripsi = $detail;

            $agendablog -> save();
            return redirect('/admin/agendablog');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AgendaBlog  $agendablog
     * @return \Illuminate\Http\Response
     */
    public function show(AgendaBlog $agendablog)
    {
        return view('admin/agendablog/show', compact('agendablog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AgendaBlog  $agendablog
     * @return \Illuminate\Http\Response
     */
    public function edit(AgendaBlog $agendablog)
    {
        return view('admin/agendablog/edit', compact('agendablog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AgendaBlog  $agendablog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgendaBlog $agendablog)
    {
        if($request->hasFile('foto') == "")
    	{
            $agendablog->foto=$agendablog->foto;

    	}
    	else if($request->hasFile('foto'))
    	{
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('images', $filename ,'public');
            $agendablog->foto = $filename;
        }
        $agendablog->save();
            AgendaBlog::where('id', $agendablog->id)
            ->update([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'tags' => $request->tags,
                'author' => $request->author,
                'tanggal_buat' => $request->tanggal_buat,
                'tanggal_post' => $request->tanggal_post,
                'deskripsi' => $request->deskripsi
            ]);
            return redirect('/admin/agendablog');
=======
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
>>>>>>> refs/remotes/origin/master
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  \App\AgendaBlog  $agendablog
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgendaBlog $agendablog)
    {
        AgendaBlog::destroy($agendablog->id);
        return redirect('/admin/agendablog')->with('sukses', 'Data berhasil dihapus');
=======
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
>>>>>>> refs/remotes/origin/master
    }
}
