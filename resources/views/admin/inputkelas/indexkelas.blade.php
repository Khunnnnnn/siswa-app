@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Kelas</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive">
    <a href="{{route('inputkelas.create')}}" class="btn btn-primary mt-1 mb-3">Tambah Data Kelas</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pelajaran</th>
                <th scope="col">Deskripsi Mata Pelajaran</th>
                <th scope="col">Kategori Mata Pelajaran</th>
                <th scope="col">Harga Mata Pelajaran</th>
                <th scope="col">Gambar Mata Pelajaran</th>
                <th scope="col"> Aksi </th>
                
            </tr>
        </thead>

        <tbody>
        @foreach ($mapels as $mapel)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mapel->nama_mapel }}</td>
            <td>{{ $mapel->deskripsi_mapel }}</td>
            <td>{{ $mapel->kategori_mapel }}</td>
            <td>{{ $mapel->harga_mapel }}</td>
            <td><img src="{{asset('/storage/' .$mapel->cover_image)}}" height="75px" width="100px"></td>
            <td>
              <a href="/admin/inputkelas/{{ $mapel->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

              <form method="post" action="/admin/inputkelas/{{ $mapel->id }}" class="d-inline">
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