<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar layout-without-menu">
    <div class="layout-container">

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Brand -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a href="<?= base_url() ?>" class="app-brand-link">
                  <span class="app-brand-logo demo">
                    <img src="<?= base_url("assets/img/logo/") . $profil[0]->avatar ?>" width="40px">
                  </span>
                  <span class="app-brand-text text-dark fw-bold ms-2"><?= $profil[0]->nama ?></span>
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
                        <a href="https://www.instagram.com/<?= $profil[0]->instagram ?>" target="_blank" class="stretched-link">@<?= $profil[0]->instagram ?></a>
                        <small class="text-muted mb-0">instagram</small>
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
              <!-- test -->
              <div class="authentication-wrapper authentication-cover border-bottom border-light">
                <div class="authentication-inner row m-0">
                  <!-- /Left Text -->
                  <div class="header d-lg-flex col-lg-7 col-xl-8 align-items-center p-0">
                    <div class="w-100 p-1 p-lg-5 d-flex flex-column justify-content-center">
                      <h3 class="text-center m-5 text-white">Tata Cara Daftar Ulang PPDB 2024</h3>
                      <div id="accordionPopoutIcon" class="accordion mt-3 mx-3 accordion-popout accordion-header-primary">
                        <?php foreach ($infos as $tp) { ?>
                          <div class="accordion-item card">
                            <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionPopoutIcon<?= $tp->id ?>">
                              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionPopoutIcon-<?= $tp->id ?>" aria-expanded="true" aria-controls="accordionPopoutIcon-<?= $tp->id ?>">
                                <?= $tp->nama ?>
                              </button>
                            </h2>
                            <div id="accordionPopoutIcon-<?= $tp->id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionPopoutIcon">
                              <div class="accordion-body">
                                <?= $tp->ket ?>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <!-- /Left Text -->
                  <!-- login siswa -->
                  <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4" id="login">
                    <div class="w-px-400 mx-auto">

                      <h4 class="mb-2 center">Halo Siswa <?= $profil[0]->nama ?> <span class="wave">👋</span></h4>
                      <p class="mb-4">Silakan Masuk disini</p>

                      <form id="formAuthentication" class="mb-3" action="<?= base_url("auth/logins") ?>" method="POST">
                        <div class="mb-3">
                          <label for="jalur" class="form-label">Jalur Masuk</label>
                          <select class="selectpicker form-control" name="jalur" id="jalur" data-style="btn-default">
                            <option value="" disabled selected>Pilih</option>
                            <?php foreach ($jms as $jm) { ?>
                              <option value="<?= $jm->nama ?>"><?= $jm->nama ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="pass" class="form-label">Password</label>
                          <input type="text" class="form-control" id="pass" name="pass" placeholder="Masukkan Password" autofocus />
                        </div>

                        <div class="mb-3">
                          <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                        </div>
                      </form>
                      <?php if ($alert == 1) {
                        echo '<div class="alert alert-danger" role="alert" id="alert">Jalur Masuk atau Password salah! Jika ada masalah silakan menghubungi panitia</div>
                      <script>document.getElementById("pass").value = "' . $user['pass'] . '";
                        document.getElementById("jalur").value = "' . $user['jalur'] . '";</script>';
                      } ?>
                      <p class="text-center">
                        <span>Ada Masalah?</span>
                      </p>
                      <div class="d-flex justify-content-center">
                        <a class="btn btn-label-primary" href="<?= $profil[0]->panitia ?>">Hubungi Panitia</a>
                        <!-- <a class="btn btn-label-secondary" href="<?= base_url('home/list') ?>">Lihat Daftar Siswa</a> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /login siswa -->
              </div>
              <!-- /test -->
              <div class="d-flex justify-content-center border-bottom border-light">
                <div class="col-lg-10 p-0" style="width: 100%;">
                  <img src="<?= base_url("assets/img/banner/") . $profil[0]->banner ?>" class="img-fluid" style="width: 100%" alt="daftar-ulang-sman-1-srengat">
                </div>
              </div>

              <!-- kontak -->
              <div class="help-center-contact-us help-center-bg-alt">
                <div class="container-xl">
                  <div class="row justify-content-center py-5 my-3">
                    <div class="col-md-8 col-lg-6 text-center">
                      <h4>KONTAK KAMI</h4>
                      <p class="mb-4"><?= $profil[0]->nama . '<br>'
                                        . wordwrap($profil[0]->alamat, 50, "<br>") . '<br>
		    	Telp. ' . $profil[0]->telepon  ?>
                      </p>
                      <div class="d-flex justify-content-center flex-wrap gap-4">
                        <a href="mailto:<?= $profil[0]->email ?>" class="btn btn-label-primary d-grid"><?= $profil[0]->email ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /kontak -->
            </div>
          </div>
          <!-- / Content -->
          <script type="text/javascript">
            const col = document.getElementsByClassName("accordion-item card");
            col[0].classList.add('active');
            const body = document.getElementsByClassName("accordion-collapse collapse");
            body[0].classList.add('show');
          </script>

          <?php $this->load->view('layout/footer'); ?>