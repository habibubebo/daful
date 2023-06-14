
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url("assets/") ?>" data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Daftar Ulang SMA Negeri 1 Srengat</title>
    <meta name="description" content="Web Daftar Ulang SMA Negeri 1 Srengat" />
    <meta name="keywords" content="smangat, sma srengat, sman 1 srengat, daftar ulang, srengat, blitar">
    <link rel="icon" type="image/x-icon" href="<?= base_url("assets/img/favicon/favicon.ico") ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("assets/vendor/fonts/boxicons.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/vendor/fonts/fontawesome.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/vendor/css/core.css") ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url("assets/vendor/css/theme-default.css") ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url("assets/css/demo.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/vendor/css/pages/page-home.css") ?>" />
    <script src="<?php echo base_url("assets/vendor/js/bootstrap.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/js/helpers.js") ?>"></script>
    <script src="<?= base_url("assets/js/config.js") ?>"></script>
    <style>
      .header {
        background: linear-gradient(rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url("<?php echo base_url("assets/img/illustrations/sma-negeri-1-srengat.webp") ?>");
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 600px !important
      }
    </style>
</head>

<body>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  layout-without-menu">
  <div class="layout-container">

    <!-- Layout container -->
    <div class="layout-page">
<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <!-- Brand -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
		  	<a href="<?= base_url()?>" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="<?= base_url("assets/img/logo_sma_srengat_low.png") ?>" width="40px">
              </span>
              <span class="app-brand-text text-dark fw-bold ms-2">SMA Negeri 1 Srengat</span>
            </a>
          </div>
        </div>
        <!-- /Brand -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          
          
          <!-- Quick links  -->
          <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class='bx bx-grid-alt bx-sm'></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0">
              <div class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto">Menu</h5>
                </div>
              </div>
              <div class="dropdown-shortcuts-list scrollable-container">
                <div class="row row-bordered overflow-visible g-0">
				          <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                    </span>
                    <a href="<?= base_url('dashboard') ?>" class="stretched-link">Dashboard</a>
                    <small class="text-muted mb-0"></small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bxl-instagram fs-4"></i>
                    </span>
                    <a href="https://www.instagram.com/smangatofficial/" target="_blank" class="stretched-link">@smangatofficial</a>
                    <small class="text-muted mb-0"></small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Quick links -->
        </ul>
      </div>  
  </nav>  
<!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card overflow-hidden">
              <div class="row d-flex justify-content-between">
                <div class="col-md-6 m-auto order-lg-0">
                  <h2 class="text-center p-3">Daftar Akun Siswa</h2>
                </div>
                <div class="section order-lg-2">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Jalur Masuk</th>
                          <th>Nomor Urut</th>
                          <th>Nama Siswa</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <?php foreach ($akuns as $tp) { ?>
                        <tr>
                          <td><?= $tp->masuk_jalur ?></td>
                          <td><?= $tp->no_urut ?></td>
                          <td><?= $tp->nama_lengkap ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-6 order-lg-1">
                  <div class="d-flex justify-content-center">
                    <img src="<?= base_url()?>assets/img/illustrations/web-sma-negeri-1-srengat.webp" class="img-fluid" alt="putra-putri-smangat" style="height: 25vh;">
                  </div>
                </div>
              </div>
            </div>
          <!-- / Content -->

<?php $this->load->view('layout/footer'); ?>
