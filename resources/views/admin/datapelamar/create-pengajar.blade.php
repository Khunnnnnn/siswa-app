@extends('admin.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Validasi Data Pengajar </h1>
  </div>

  <div class="col-lg-9">
    <form method="post" action="/admin/datapelamar" enctype="multipart/form-data">
      @csrf 
      <input type="hidden" class="form-control" name="id_user" value="{{ $pelamar->id_user}}">

      <input type="hidden" class="form-control" name="pelamar_id" value="{{ $pelamar->id }}">
      <div class="mb-3">
        <label for="nama_pengajar" class="form-label">Nama Pengajar</label>

        <input type="text" value="{{$pelamar-> nama_pelamar}}" disabled class="form-control  id="nama_pengajar" name="nama_pengajar">
        <input type="hidden" value="{{$pelamar-> nama_pelamar}}" class="form-control  id="nama_pengajar" name="nama_pengajar">
        @error('nama_pengajar')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      {{-- ambil dari tabel matkul  --}}
      <div class="mb-3">
        <label class="form-label">Matkul Pengajar</label>
        <select class="form-select" name="matkul_pengajar">
          <option selected>Pilih matkul</option>
          <option value="Java">Java</option>
          <option value="Phyton">Phyton</option>
          <option value="Android">Android</option>
        </select>
      </div>

      

      <div class="form-group">
        <label for="exampleInputEmail1"> Profile Pelamar </label>
        <input type="hidden" value="{{$pelamar-> foto_profile_pelamar}}" class="form-control  id="foto_pengajar" name="foto_pengajar">
        <img src="{{  asset('storage/'.$pelamar->foto_profile_pelamar) }}" width="200 px"class="image-preview img-fluid mb-2 d-block" >
    </div>
    {{-- pesan error  --}}
    @error('file')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="mt-2 btn btn-primary"name="konfirmasi" value="konfirmasi"> Konfirmasi </button>
      <button type="submit" class="mt-2 btn btn-primary" name="Ditolak" value="Ditolak"> Tolak </button>
    </form>    
  </div>
@endsection