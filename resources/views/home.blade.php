@extends('layouts.main')

@section('isiHalaman')

<!-- ======= Header ======= -->
@include('layouts.navbar')
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    <h1>Mulailah dari mana kamu berada.<br>Lakukan apa yang kamu bisa.</h1>
    <h2>Ingatlah bahwa kegagalan adalah sebuah peristiwa, bukan seseorang.</h2>
    <a href="courses.html" class="btn-get-started">Mulai Kelas</a>
  </div>
</section>
<!-- End Hero -->

<main id="main">

  <!-- ======= Penjelasan Pelatihan ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Kenapa Broz-coding Academy Berbeda</h3>
          <p class="fst-italic">
            Saatnya bijak memilih sumber belajar. Tak hanya materi yang terjamin, Broz-coding Academy juga memiliki reviewer profesional yang akan mengulas kode Anda.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Kurikulum Standar Industri Global</li>
            <li><i class="bi bi-check-circle"></i> Belajar Fleksibel Sesuai Jadwal Anda</li>
            <li><i class="bi bi-check-circle"></i> Code Review dari Developer Expert</li>
            <li><i class="bi bi-check-circle"></i> Alumni Terpercaya di Berbagai Perusahan</li>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <!-- End Penjelasan Pelatihan -->

  <!-- ======= Jumlah Peserta Pelatihan ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Siswa</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
          <p>Kelas</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
          <p>Mitra</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Pengajar</p>
        </div>

      </div>

    </div>
  </section>
  <!-- End Jumlah Peserta Pelatihan -->

  <!-- ======= Kelas Pelatihan ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Belajar dengan kelas standar industri global</h3>
            <p>
              Kelas di Broz-coding Academy tersedia bagi yang belum memiliki kemampuan programming (dasar) hingga yang sudah profesional.
            </p>
            <div class="text-center">
              <a href="about.html" class="more-btn">Lihat Semua Kelas <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>Java</h4>
                  <p>Java adalah bahasa berorientasi pada objek. Bahasa ini biasanya digunakan untuk menyelesaikan masalah-masalah yang rumit dengan lebih mudah</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>C + +</h4>
                  <p>Bahasa pemrograman C++ dikembangkan pada awal 1980. Pengembangannya berdasarkan bahasa C. Bahasa C++ banyak digunakan untuk sistem operasi desktop.</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>Phyton</h4>
                  <p>Python adalah sebuah bahasa pemrograman yang rilis pada tahun 1991. Struktur dari bahasa phyton ini sangat sederhana dan mirip dengan bahasa Inggris</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Kelas Pelatihan -->
  @endsection