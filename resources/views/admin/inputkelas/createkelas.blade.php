@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Kelas</h1>
</div>

<div class="col-lg-9">
    <form method="post" action="{{route('inputkelas.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Mata Pelajaran</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="namemapel">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Deskripsi Mata Pelajaran</label>
            <input type="text" class="form-control @error('deskripsimapel') is-invalid @enderror" id="name" name="deskmapel">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori Mapel</label>
            <select class="form-select" name="level">
                <option selected>Pilih Salah Satu</option>
                <option value="Desktop">Desktop</option>
                <option value="Website">Website</option>
                <option value="Mobile">Mobile</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Harga Mata Pelajaran</label>
            <input type="text" class="form-control @error('hargamapel') is-invalid @enderror" id="name" name="hargamapel">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        
        <div class="form-group">
             <label for="exampleInputfile">Input Gambar</label>
            <input type="file" class="form-control" id="gambar" name="file">
        </div>

        <button type="submit" class="mt-2 btn btn-primary">Tambah Data</button>
    </form>
</div>
@endsection