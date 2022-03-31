<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin-dashboard') ? 'active' : '' }}" aria-current="page" href="/admin-dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/siswa*') ? 'active' : '' }} " href="/admin/siswa">
          <span data-feather="users"></span>
          Data Siswa
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/datapelamar*') ? 'active' : '' }}" href="/admin/datapelamar">
          <span data-feather="users"></span>
          Data Pelamar
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/pengajar">
          <span data-feather="users"></span>
          Data Pengajar
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/datatransaksi*') ? 'active' : '' }}" href="/admin/datatransaksi">
          <span data-feather="users"></span>
          Data Transaksi
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/inputkelas*') ? 'active' : '' }}" href="/admin/inputkelas">
          <span data-feather="database"></span>
          Data Kelas
        </a>
      </li>
      
    </ul>

  
  </div>
</nav>