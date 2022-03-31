@extends('layouts.main')

@section('isiHalaman')

<!-- Navbar -->
@include('layouts.navbar')
<!-- END Navbar -->

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2> Metode Pembayaran </h2>
            <p>Ini Adalah Harga Kelas</p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <h3>BNI</h3>
                        <h4> 97439865767 </h4>    
                    <h5> Nomor Virtual Account </h5>
                    
                    <div class="btn-wrap">
                    <a href="/uploadbuktipembayaran" class="btn-buy"> Bayar </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ">
                    <div class="box featured">
                    <h3>MANDIRI</h3>
                    <h4> 97439865767 </h4>    
                    <h5> Nomor Virtual Account </h5>
                  

                        <div class="btn-wrap">
                        <a href="/uploadbuktipembayaran" class="btn-buy"> Bayar </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                    <h3>BCA</h3>
                    <h4> 97439865767 </h4>    
                    <h5> Nomor Virtual Account </h5>
                        
               
                        <div class="btn-wrap">
                        <a href="/uploadbuktipembayaran" class="btn-buy"> Bayar </a>
                        </div>
                    </div>
                </div>

               
                      
                       
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

</main><!-- End #main -->