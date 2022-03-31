<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;

class ProfileController extends Controller
{
    public function index() {
        $data = array('title' => 'User Profil');
        return view('profile', $data);
    }

    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        return view('edit', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
    
    {
    $siswa= Siswa::where('id_user',auth()->user()->id)->first(); 


    $siswa->nama_siswa=$request->nama_siswa;
    $siswa->tgl_lahir_siswa=$request->tgl_lahir_siswa;
    $siswa->alamat_siswa=$request->alamat_siswa;
    $siswa->email_siswa=$request->email_siswa;
    $siswa->nomor_telepon_siswa=$request->nomor_telepon_siswa;
    $siswa->asal_sekolah_siswa=$request->asal_sekolah_siswa;
    $siswa->save();

    $user= User::find(auth()->user()->id); 
    $user->nama=$request->nama_siswa;
    $user->email=$request->email_siswa;
    $user->save();

    return redirect('/profile');
    }
}