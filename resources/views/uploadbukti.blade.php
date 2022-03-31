@extends('layouts.main')

@section('isiHalaman')

    <!-- ======= Header ======= -->
    @include('layouts.navbar')
    <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
          <h2>Upload Bukti Pembayaran</h2>
          <p> Upload Bukti Pembayaran </p>
        </div>
      </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing" style="height: 65vh;">
      <div class="container" data-aos="fade-up">

        <div class="row" >
            <form action="/uploadtransaksi" method="post" enctype="multipart/form-data">
              @csrf
           
                <div class="mb-3">

              
                  <label for="exampleInputEmail1" class="form-label" >Upload Bukti Pembayaran</label>
                  <input type="file" name="filebukti" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
              
                 
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="submit" class="btn btn-success">Bayar Sekarang</button>
                  </div>
            </form>

          

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  @endsection