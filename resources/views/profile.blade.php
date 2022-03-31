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
       
          <h3 class="profile-username text-center"> Profile  </h3>
      
          <hr>
       
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
           Nama Lengkap
          </strong>
          <p>
          {{ auth()->user()->nama}}
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email 
          </strong>
          <p class="text-muted">
          {{ auth()->user()->email}}
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            Status
          </strong>
          <p class="text-muted">
          {{ auth()->user()->user_level}}
          </p>
          <hr>
        
          <a href="/edit" class="btn btn-primary btn-block">Setting</a>
        </div>
      </div>      
    </div>
  </div>
</div></div>

</section><!-- End Courses Section -->

</main>
<!-- End #main -->