<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Transaksi;
use App\Models\Mapel;


class SiswaController extends Controller
{
    public function index()
    {
        return view('admin.siswa.index', [
            'siswas' => Siswa::all(),
        ]);
    }

    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.edit', [
            'siswa' => $siswa,
        ]);
    }

    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required',
            'tgl_lahir_siswa' => 'required',
            'alamat_siswa' => 'required',
            'email_siswa' => 'required',
            'email_siswa' => 'required',
            'nomor_telepon_siswa' => 'required',
            'asal_sekolah_siswa' => 'required'
        ]);

        Siswa::where('id', $siswa->id)->update($validatedData);

        return redirect('/admin/siswa')->with('success', 'Data siswa berhasil di edit!');
    }
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);

        return redirect('/admin/siswa')->with('success', 'Data pelatihan berhasil di hapus!');
    }

    public function kelasku($id)
    {
        $siswa = Siswa::where('id_user', $id)->first();
        $transaksi = Transaksi::where('id_siswa', $siswa->id)->get();

        return view('kelassiswa', [
            'transaksis' => Transaksi::join('mapels', 'transaksis.id_mapel', '=', 'mapels.id')
                ->where('id_siswa', $siswa->id)->get()
        ]);
    }

    public function tugasku($id)
    {
        $siswa = Siswa::where('id_user', $id)->first();
        $transaksi = Transaksi::where('id_siswa', $siswa->id)->get();

        return view('submission', [
            'transaksis' => Transaksi::join('mapels', 'transaksis.id_mapel', '=', 'mapels.id')
                ->where('id_siswa', $siswa->id)->get()
        ]);
    }
}
