@extends ('layouts.main')

@section('isiHalaman')
<!-- ======= Header ======= -->
@include('layouts.navbar')
<!-- End Header -->

<div class="container mt-5 mb-4" style="height: 100vh;">

  <div class="row justify-content-center">
    <div class="mt-5 col">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session ('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>
  </div>
  <div class="row justify-content-center">

    <div class="col-lg-6">
      <br>
      <main class="form-registration">
        <h1 class="h3 mb-5 fw-normal text-center"> Registration Account </h1>
        <form action="/register" method="post">
          @csrf

          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" required value="{{old('nama')}}">
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Level</label>
            <select class="form-select mb-3" name="user_level">
              <option selected>Pilih status registrasi</option>
              <option value="siswa">Siswa</option>
              <option value="pelamar">Pelamar</option>
            </select>
          </div>

          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit"> Register</button>

        </form>
        <small class="d-block text-center mt-4">

          Already Registered? <a href="/login"> Login </a>
        </small>
      </main>

    </div>
  </div>

</div>

@endsection