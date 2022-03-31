@extends('layouts.main')

@section('isiHalaman')

<!-- ======= Header ======= -->
@include('layouts.navbar')
<!-- End Header -->

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Mentor</h2>
            <p>Ini adalah para pengajar terkompeten dari Broz-Coding</p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach($pengajars as $pengajar)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="{{asset('/storage/' .$pengajar->foto_pengajar)}}" class="img-fluid" alt="...">
                        <div class="member-content">
                            <h4> {{ $pengajar->nama_pengajar }} </h4>
                            <span> {{ $pengajar->matkul_pengajar }}</span>
                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Trainers Section -->

</main>
@endsection