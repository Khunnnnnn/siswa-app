@extends('admin.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Pelatihan</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive">
    <a href="/admin/training/create" class="btn btn-primary mt-1 mb-3">Tambah Data Pelatihan</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pelatihan</th>
          <th scope="col">Level Pelatihan</th>
          <th scope="col">Total Jam Pelatihan</th>
          <th scope="col">Teknologi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trainings as $training)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $training->name }}</td>
            <td>{{ $training->level }}</td>
            <td>{{ $training->hours }}</td>
            <td>{{ $training->technology }}</td>
            <td>
              <a href="/admin/training/{{ $training->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

              <form method="post" action="/admin/training/{{ $training->id }}" class="d-inline">
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

