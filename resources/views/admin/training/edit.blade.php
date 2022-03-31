@extends('admin.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Pelatihan</h1>
  </div>

  <div class="col-lg-9">
    <form method="post" action="/admin/training/{{ $training->id }}">
      @method('put')
      @csrf 
      <div class="mb-3">
        <label for="name" class="form-label">Nama Pelatihan</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $training->name) }}">
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      
      <div class="mb-3">
      <label class="form-label">Level Pelatihan</label>
      <select class="form-select" name="level">
        <option selected>Pilih level pelatihan</option>
        <option value="Pemula">Pemula</option>
        <option value="Menengah">Menengah</option>
        <option value="Profesional">Profesional</option>
      </select>
      </div>

      <div class="mb-3">
        <label for="hours" class="form-label">Total Jam Pelatihan</label>
        <input type="number" class="form-control @error('hours') is-invalid @enderror" id="hours" name="hours" value="{{ old('hours', $training->hours) }}">
        @error('hours')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Teknologi Pelatihan</label>
        <select class="form-select" name="technology">
          <option selected>Pilih teknologi pelatihan</option>
          <option value="Website">Website</option>
          <option value="Android">Android</option>
          <option value="iOS">iOS</option>
        </select>
      </div>

      <button type="submit" class="mt-2 btn btn-primary">Ubah Data</button>
    </form>    
  </div>
@endsection