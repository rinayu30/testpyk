<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <!-- <div class="sidebar-brand-text  mx-1 mb-2 mt-2">
          <img class="img-profile rounded-circle" src="http://localhost/tokocahayaagung/assets_user/img/gallery/caa3.svg" style="width:5em;height:5em">
        </div><br> -->
        <div class="sidebar-brand-text mx-1 mb-2 ">TP PKK Payakumbuh</div><br>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <h6 align="center">MENU</h6>
      </div>
      <hr class="sidebar-divider my-1">
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- Divider -->
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><a href="#"> <i class="fas fa-fw fa-inbox"></i>
                <span># </span></a></h6>
            <h6 class="collapse-header"><a href="#"><i class="fas fa-fw fa-hand-holding-usd"></i>
                <span>#</span></a></h6>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/anggota') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Anggota</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/kelola') ?>">
          <i class="fas fa-fw fa-database"></i>
          <span>Kelola User</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('logout') ?>">
          <i class="fas fa-fw fa-power-off"></i>
          <span>Logout</span></a>
      </li>


      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/pengaturan') ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Pengaturan</span></a>
      </li> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white1 topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="sidebar-brand-text mx-1 mb-2 ">
              <!-- <input type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2"> -->
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>


              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->

          </ul>

        </nav>
        <!-- End of Topbar -->