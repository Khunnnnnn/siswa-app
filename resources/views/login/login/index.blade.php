@extends ('layouts.main')

@section('isiHalaman')
<!-- ======= Header ======= -->
@include('layouts.navbar')
<!-- End Header -->

<div class="container mt-5" style="height: 78vh;">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <br><br>
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session ('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session ('loginError') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <main class="form-signin mt-5 mb-5">
        <h1 class="h3 mb-3 fw-normal text-center"> Form Login </h1>
        <form action="/login" method="post">
          @csrf


          <div class="form-floating">
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" autofocus required value="{{old('email')}}">
            <label for="email"> Email </label>
            @error('email')
            <div class="invalid-feedack">
              {{ $message }}
            </div>
            @enderror

          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
            <label for="password"> Password </label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        </form>
        <small class="d-block text-center mt-3">

          Don't have an account? <a href="/register"> Register Now </a>
        </small>
      </main>

    </div>
  </div>
</div>

</main>

@endsection