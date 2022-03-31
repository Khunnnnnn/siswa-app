<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelamar.index'); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pelamar.lamaran",[
            'data_pelamar'=>Pelamar::where('id_user',auth()->user()->id)->first()

        ]); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'tgllahir' => 'required',
            'email' => 'required',
            'asalsekolah' => 'required',
            'ktm' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'profile' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'cv' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            
        ]);
        $path = $request->file('ktm')->store('dataPelamar');
        $path1 = $request->file('profile')->store('dataPelamar');
        $path2 = $request->file('cv')->store('dataPelamar');     

        $pelamar=Pelamar::where('id_user',auth()->user()->id)->first();
        
        $pelamar->id_user = $request->input('id_user');
        $pelamar->nama_pelamar = $request->input('name');
        $pelamar->tgl_lahir_pelamar = $request->input('tgllahir');
        $pelamar->email_pelamar = $request->input('email');
        $pelamar->asal_sekolah_pelamar = $request->input('asalsekolah');
        $pelamar->foto_ktm_pelamar = $path;
        $pelamar->foto_profile_pelamar = $path1;
        $pelamar->CV_pelamar = $path2;
        $pelamar->save();
        return redirect('pelamar')->with('success', 'Task Created Successfully!'); //
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
        //
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
