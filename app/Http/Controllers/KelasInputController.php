<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class KelasInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.inputkelas.indexkelas', [
            'mapels' => Mapel::all(),
        ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inputkelas.createkelas');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $this->validate($request, [
            'namemapel'          => 'required',
            'deskmapel'          => 'required',
            'level'              => 'required',
            'hargamapel'          => 'required',
            'file'                => 'required'
            
        ]);

        //mengambil data file yang diupload
        $file = $request->file('file')->store('cover_image');

        
        $submission = new Mapel;
        $submission->nama_mapel = $request->input('namemapel');
        $submission->deskripsi_mapel = $request->input('deskmapel');
        $submission->kategori_mapel = $request->input('level');
        $submission->harga_mapel = $request->input('hargamapel');
        $submission->cover_image    = $file;
        
        
        //menyimpan data ke database
        $submission->save();

        //kembali ke halaman sebelumnya
        return redirect('/admin/inputkelas')->with('success', 'Data pengajar baru berhasil di tambahkan!');
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
    public function edit(Mapel $id)
    {
        return view('admin.inputkelas.editkelas', [
            'kelas' => $id,
        ]);
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
        //
    }
}
