<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Menampilkan Data Pelatihan (READ)
    public function index()
    {
        return view('admin.training.index', [
            'trainings' => Training::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Menampilkan Form Tambah Data
    public function create()
    {
        return view('admin.training.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Aksi dari Tambah Data (INSERT)
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'level' => 'required',
            'hours' => 'required',
            'technology' => 'required',
        ]);

        Training::create($validatedData);

        return redirect('/admin/training')->with('success', 'Data pelatihan baru berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */

    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */

    // Menampilkan Form Edit Data
    public function edit(Training $training)
    {
        return view('admin.training.edit', [
            'training' => $training,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Training $training)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'level' => 'required',
            'hours' => 'required',
            'technology' => 'required',
        ]);

        Training::where('id', $training->id)->update($validatedData);

        return redirect('/admin/training')->with('success', 'Data pelatihan berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */

    //Aksi dari hapus data (DELETE)
    public function destroy(Training $training)
    {
        Training::destroy($training->id);

        return redirect('/admin/training')->with('success', 'Data pelatihan berhasil di hapus!');
    }
}
