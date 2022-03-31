@extends('layouts.main')
@include('layouts.navbar')

<main id="main" data-aos="fade-in">
    <br>
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="mt-5 courses">
        <div class="container" data-aos="fade-up">

<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">

        <form action="/updateprofile" method="post">
          @csrf
          <h3 class="profile-username text-center"> Profile  </h3>
      
          <hr>
       
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
           Nama Lengkap
          </strong>
          <input type="text" class="form-control" name="nama_siswa">
          
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email 
          </strong>
          <input type="text" class="form-control" name="email_siswa">
          <hr>
         
          <hr>

          <strong>
            <i class="fas fa-phone mr-2"></i>
            Tanggal Lahir
          </strong>
          <input type="date" class="form-control" name="tgl_lahir_siswa">
          <hr>

          <strong>
            <i class="fas fa-phone mr-2"></i>
            Alamat
          </strong>
          <input type="text" class="form-control" name="alamat_siswa">
          <hr>

          <strong>
            <i class="fas fa-phone mr-2"></i>
            Nomor Telepon
          </strong>
          <input type="text" class="form-control" name="nomor_telepon_siswa">

          <strong>
            <i class="fas fa-phone mr-2"></i>
            Asal Sekolah
          </strong>
          <input type="text" class="form-control" name="asal_sekolah_siswa">

          <hr>

          <button class="btn btn-primary btn-block" type="submit"> Setting </button>
        </form>
         
        </div>
      </div>      
    </div>
  </div>
</div></div>

</section><!-- End Courses Section -->

</main>
<!-- End #main -->