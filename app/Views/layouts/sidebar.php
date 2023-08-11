<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PT Barang</div>
  </a>

  <hr class="sidebar-divider my-0">

  <li class="nav-item <?= url_is('/') ? 'active' : '' ?>">
    <a class="nav-link" href="/">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider">

  <div class="sidebar-heading">
    DATA
  </div>


  <li class="nav-item <?= url_is('/barang-masuk') ? 'active' : '' ?>">
    <a class="nav-link" href="/barang-masuk">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Barang Masuk</span></a>
  </li>

  <li class="nav-item <?= url_is('/barang-keluar') ? 'active' : '' ?>">
    <a class="nav-link" href="/barang-keluar">
      <i class="fas fa-fw fa-table"></i>
      <span>Barang Keluar</span></a>
  </li>

  <hr class="sidebar-divider d-none d-md-block">

  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>



</ul>