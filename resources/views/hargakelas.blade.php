@extends('layouts.main')

@section('isiHalaman')

<!-- Navbar -->
@include('layouts.navbar')
<!-- END Navbar -->

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Harga Kelas</h2>
            <p>Ini Adalah Harga Kelas</p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <h3>Reguler</h3>
                        <h4><sup>Rp</sup>150.000<span> 30 Hari </span></h4>
                        <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
                    <div class="btn-wrap">
                        <form action="/formBayar" method="post">
                            @csrf
                            <input type="hidden" value="{{$id_mapel}}" name="id_mapel">
                            <input type="hidden" value="150000" name="harga_langganan">
                            <button class="btn-buy" type="submit">Buy Now</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ">
                    <div class="box featured">
                        <h3>Medium</h3>
                        <h4><sup>Rp</sup>300.000<span> 60 Hari </span></h4>
                        <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
                        <div class="btn-wrap">
                        <form action="/formBayar" method="post">
                            @csrf
                            <input type="hidden" value="{{$id_mapel}}" name="id_mapel">
                            <input type="hidden" value="300000" name="harga_langganan">
                            <button class="btn-buy" type="submit">Buy Now</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <h3>Expert</h3>
                        <h4><sup>Rp</sup>450.000<span> 90 Hari</span></h4>
                        <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
                </ul> -->
                        <div class="btn-wrap">
                        <form action="/formBayar" method="post">
                            @csrf
                            <input type="hidden" value="{{$id_mapel}}" name="id_mapel">
                            <input type="hidden" value="450000" name="harga_langganan">
                            <button class="btn-buy" type="submit">Buy Now</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <span class="advanced">Advanced</span>
                        <h3>Ultimate</h3>
                        <h4><sup>Rp</sup>550.000<span> 120 Hari</span></h4>
                        <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
                </ul> -->
                        <div class="btn-wrap">
                        <form action="/formBayar" method="post">
                            @csrf
                            <input type="hidden" value="{{$id_mapel}}" name="id_mapel">
                            <input type="hidden" value="550000" name="harga_langganan">
                            <button class="btn-buy" type="submit">Buy Now</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

</main><!-- End #main -->