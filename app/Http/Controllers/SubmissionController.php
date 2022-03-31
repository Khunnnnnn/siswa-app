<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Transaksi;
use App\Models\Submission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mapel;

class SubmissionController extends Controller
{
    public function index(){
        //ambil data dari database
        $data = Submission::all();

        //passing data ke view
        return view('submission')->with('data', $data);
    }

    public function store(Request $request){

        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $this->validate($request, [
            'file'          => 'required',
            'keterangan'    => 'required'
        ]);

        //mengambil data file yang diupload
        $file           = $request->file('file');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('file_upload',$file->getClientOriginalName());


        $submission = new Submission;
        $submission->file       = $nama_file;
        $submission->keterangan = $request->input('keterangan');

        //menyimpan data ke database
        $submission->save();

        //kembali ke halaman sebelumnya
        return back();
    }


    public function destroy(Submission $submission)
    {
        Submission::destroy($submission->id);

        return redirect('/submission')->with('success', 'Data pelatihan berhasil di hapus!');
    }

    public function siswaku($id)
    {
         $siswa = Siswa::where('id_user',$id)->first();
      
         return view('submission',[
           'mapels' => Mapel::all()
         ]);
        
    }
}

