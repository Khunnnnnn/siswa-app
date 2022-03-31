@extends('admin.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Siswa</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Alamat</th>
          <th scope="col">Email</th>
          <th scope="col">No. Telp</th>
          <th scope="col">Asal Sekolah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($siswas as $siswa)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $siswa->nama_siswa }}</td>
            <td>{{ $siswa->tgl_lahir_siswa }}</td>
            <td>{{ $siswa->alamat_siswa }}</td>
            <td>{{ $siswa->email_siswa }}</td>
            <td>{{ $siswa->nomor_telepon_siswa }}</td>
            <td>{{ $siswa->asal_sekolah_siswa }}</td>
            <td>
              <a href="/admin/siswa/{{ $siswa->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

              <form method="post" action="/admin/siswa/{{ $siswa->id }}" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="trash"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

