<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? '' }}</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo2.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body class="bg-light-danger">
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo2.png" width="180" alt=""/>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Akun</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/pegawai" aria-expanded="false">
                <span>
                  <i class="fas fa-user-tie"></i> 
                </span>
                <span class="hide-menu">Pegawai</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/pelanggan" aria-expanded="false">
                <span>
                  <i class="fas fa-user"></i> 
                </span>
                <span class="hide-menu">Pelanggan</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Transaksi</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/pesanan" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-cart-shopping"></i>
                </span>
                <span class="hide-menu">Pesanan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/laporan-keuangan" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Laporan keuangan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/stok-barang" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-box-open"></i>
                </span>
                <span class="hide-menu">Stok Barang</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Prodak</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/kategori" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-list"></i>
                </span>
                <span class="hide-menu">Kategori</span>
              </a>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/login" aria-expanded="false">
                  <span>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  </span>
                  <span class="hide-menu">Log Out</span>
                </a>
            </li>
            </li>
          </ul>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <h4>Zhot-kun
                <p class="text-center" style="font-size: 50%;">Admin</p>
              </h4>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container-fluid">
        <!--  Row 1 -->

        @yield('content')
    
     <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/sidebarmenu.js"></script>
      <script src="../assets/js/app.min.js"></script>
      <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
      <script src="../assets/js/dashboard.js"></script>

      @yield('script')
  </body>
  
  </html>