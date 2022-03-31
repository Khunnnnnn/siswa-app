@extends('layouts.main')

@section('isiHalaman')

    <!-- ======= Header ======= -->
    @include('layouts.navbar')
    <!-- End Header -->


    <main id="main" data-aos="fade-in">

      <br>
      <!-- ======= Courses Section ======= -->
      <section id="courses" class="mt-5 courses">
        <div class="container" data-aos="fade-up">
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
     
      @foreach ($transaksis as $transaksi)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{asset('/storage/' .$transaksi->cover_image)}}" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Dekstop</h4>
                    <p class="price">{{ $transaksi->harga_mapel }}</p>
                  </div>
  
                  <h3>{{ $transaksi->nama_mapel }}</h3>
                  <p>{{ $transaksi->deskripsi_mapel }}</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>Antonio</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;50
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                  </div>
                </div>
              </div>
               
            </div>
            @endforeach
         
  
          </div>
  
        </div>
      </section><!-- End Courses Section -->
  
    </main>
    <!-- End #main -->


@endsection
