@extends('admin.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Edit Data Siswa</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="col-lg-9">
    <form method="post" action="/admin/siswa/{{ $siswa->id }}">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="nama_siswa" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}">
        @error('nama_siswa')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="tgl_lahir_siswa" class="form-label">Nama Siswa</label>
        <input type="date" class="form-control @error('tgl_lahir_siswa') is-invalid @enderror" id="tgl_lahir_siswa" name="tgl_lahir_siswa" value="{{ old('tgl_lahir_siswa', $siswa->tgl_lahir_siswa) }}">
        @error('tgl_lahir_siswa')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="alamat_siswa" class="form-label">Alamat Siswa</label>
        <input type="text" class="form-control @error('alamat_siswa') is-invalid @enderror" id="alamat_siswa" name="alamat_siswa" value="{{ old('alamat_siswa', $siswa->alamat_siswa) }}">
        @error('alamat_siswa')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email_siswa" class="form-label">Email Siswa</label>
        <input type="text" class="form-control @error('email_siswa') is-invalid @enderror" id="email_siswa" name="email_siswa" value="{{ old('email_siswa', $siswa->email_siswa) }}">
        @error('email_siswa')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="nomor_telepon_siswa" class="form-label">Nomor Telepon Siswa</label>
        <input type="text" class="form-control @error('nomor_telepon_siswa') is-invalid @enderror" id="nomor_telepon_siswa" name="nomor_telepon_siswa" value="{{ old('nomor_telepon_siswa', $siswa->nomor_telepon_siswa) }}">
        @error('nomor_telepon_siswa')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="asal_sekolah_siswa" class="form-label">Asal Sekolah Siswa</label>
        <input type="text" class="form-control @error('asal_sekolah_siswa') is-invalid @enderror" id="asal_sekolah_siswa" name="asal_sekolah_siswa" value="{{ old('asal_sekolah_siswa', $siswa->asal_sekolah_siswa) }}">
        @error('asal_sekolah_siswa')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <button type="submit" class="mt-2 btn btn-primary">Ubah Data</button>
    </form>
  </div>
  
@endsection

