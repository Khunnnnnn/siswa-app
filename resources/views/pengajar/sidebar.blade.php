@extends('pelamar.head')

<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            Pengajar
            <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a href="/pelamar">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{route('index.create')}}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Upload Lamaran</p>
                </a>
            </li>
            <!-- <li>
                <a href="./map.html">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Upload Lamaran</p>
                </a>
            </li> -->
            <li>
                <a href="/pengajar/upload">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Kotak Masuk</p>
                </a>
            </li>
            <li>
                <a href="./user.html">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Lihat Profile</p>
                </a>
            </li>
            <!-- <li>
                <a href="./tables.html">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Typography</p>
                </a>
            </li> -->
            <!-- <li class="active-pro">
                <a href="./upgrade.html">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>