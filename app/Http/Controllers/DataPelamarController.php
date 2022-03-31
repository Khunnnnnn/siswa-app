<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use App\Models\Pengajar;
use Illuminate\Http\Request;


class DataPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.datapelamar.index', [
            'pelamars' => Pelamar::all(),
        ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $validatedData = $request->validate([
                'matkul_pengajar' => 'required',
            ]);
    
            if ($request->input('konfirmasi')=="konfirmasi"){
                Pengajar::create([
                    'id_user' => $request->id_user,
                    'nama_pengajar' => $request->nama_pengajar,
                    'matkul_pengajar' => $request->matkul_pengajar,
                    'foto_pengajar' => $request->foto_pengajar
                ]);
        
                $pelamar=Pelamar::find($request->pelamar_id);
                $pelamar->delete();
            }
            elseif($request->input('Ditolak')=="Ditolak"){
                $data_pengajar=Pelamar::find($request->pelamar_id);
                $data_pengajar->status_pelamar="Ditolak";
                $data_pengajar->save();
    
            }
        return redirect('/admin/datapelamar')->with('success', 'Data pengajar baru berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("admin.datapelamar.create-pengajar", [
            'pelamar' => Pelamar::find($id) // Untuk mencari data berdasarkan id primary key
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.datapelamar.edit-pelamar', [
            'pelamar' => $id,
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
        $validatedData = $request->validate([
            'nama_pengajar' => 'required|max:100',
            'matkul_pengajar' => 'required',
            'foto_pengajar' => 'required',
        ]);

        Pelamar::where('id', $id)->update($validatedData);

        return redirect('/admin/datapelamar')->with('success', 'Data pelamar berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelamar::destroy($id);

        return redirect('/admin/datapelamar')->with('success', 'Data pelatihan berhasil di hapus!');
    }
}
