@extends('layouts.main')
@include('layouts.navbar')

<main id="main" data-aos="fade-in">
    <br>
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="mt-5 courses">
        <div class="container" data-aos="fade-up">


        <div class="card" style="width: 30rem;">
        
     <div class="card-body">
    <h3 class="card-title" > Data Transaksi </h3>
    <h5 class="card-title"> Nama Siswa      : {{ $riwayattransaksi-> nama_siswa }}</h5>
    <h5 class="card-title"> Kelas           : {{ $riwayattransaksi-> nama_mapel }}</h5>
    <h5 class="card-title"> Jumlah Tagihan  :  {{ $riwayattransaksi-> jumlah_tagihan }}</h5>
    <h5 class="card-title"> Status          : {{ $riwayattransaksi-> status }}</h5>
    

    <p class="card-text"></p>


    @if($riwayattransaksi->status=='Menunggu')
    <a href="/metode" class="btn btn-primary"> Pilih Metode Bayar </a>
     @else

     @endif
    </div>
    </div>
    </div>


    </section><!-- End Courses Section -->

</main>
<!-- End #main -->