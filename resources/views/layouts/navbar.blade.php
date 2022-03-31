@extends('layouts.head')
<!-- .navbar -->
<header header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">Broz-coding</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

    <!-- navbar -->
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="active" href="/">Home</a></li>

        <li class="dropdown"><a href="#"><span>Academy</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            @if(isset(auth()->user()->user_level))
            @if(auth()->user()->user_level=="siswa")
            <li><a href="/kelassiswa/{{ (auth()->user()->id) }}">Kelas</a></li>
            @endif
            @else 
            <li><a href="#">Kelas</a></li>
            @endif
            <li><a href="/submission">Submission</a></li>
          </ul>
        </li>
        <li><a href="contact.html">Report</a></li>
        <li><a href="/mentor">Mentor</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    
    @if(isset(auth()->user()->user_level))
     @if(auth()->user()->user_level=="pelamar")
     @else
     <a href="/langganan"class="get-started-btn">Langganan</a></li>
     @endif
    @else
    <a href="/langganan"class="get-started-btn">Langganan</a></li>
    @endif
   
  
    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
           role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hallo {{ auth()->user()->nama }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/profile"><i class="bi bi-layout-text-sidebar-reverse"></i> My Profile </a></li>
          
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="/logout" method="post">
            @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout 

              </button>

            </form>  
            
          </ul>
        </li>

      @else
      <li class="nav-item">
                <a href="/login" class="nav-link  {{ ($tittle === "login") ? 'active': '' }} " ><i class="bi bi-box-arrow-right"></i> Login </a>
            </li>
      @endauth
      </ul>

  </div>
</header>