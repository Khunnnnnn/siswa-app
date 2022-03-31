@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Pelamar</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pelamar</th>
                <th scope="col">Email Pelamar</th>
                <th scope="col">Asal Sekolah Pelamar</th>
                <th scope="col">Kartu Tanda Pelajar</th>
                <th scope="col">Profile</th>
                <th scope="col">CV Pelamar</th>
                <th scope="col">Status Pelamar</th>
  
            </tr>
        </thead>
        <tbody>
            @foreach ($pelamars as $pelamar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pelamar->nama_pelamar }}</td>
                <td>{{ $pelamar->email_pelamar }}</td>
                <td>{{ $pelamar->asal_sekolah_pelamar }}</td>
                <td><img src="{{asset('/storage/' .$pelamar->foto_ktm_pelamar)}}" height="75px" width="100px"></td>
                <td><img src="{{asset('/storage/' .$pelamar->foto_profile_pelamar)}}" height="75px" width="100px"></td>
                <td><img src="{{asset('/storage/' .$pelamar->CV_pelamar)}}" height="75px" width="100px"></td>

                @if($pelamar->status_pelamar=="Ditolak")
                <td><a href="#" class="badge bg-primary"> Ditolak </a></td>
                @else
                <td><a href="/admin/datapelamar/{{ $pelamar->id }}" class="badge bg-primary">Belum Diisi</a></td>
                @endif
              
              
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection