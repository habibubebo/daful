<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?= base_url()?>" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="<?= base_url("assets/img/logo_sma_srengat_low.png") ?>" width="40px">
              </span>
              <span class="app-brand-text menu-text fw-bolder ms-2">SMAN 1 Srengat</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item" id="dashboard">
              <a href="<?= base_url()?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
       <?php if($this->session->userdata('role') < "1"){ ?>
              <!-- Menu siswa -->
            <li class="menu-item open" id="menu1">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Daftar ulang</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item" id="m1-1">
                  <a href="<?= base_url("siswa/data")?>" class="menu-link">
                    <div data-i18n="Without menu">Data diri</div>
                  </a>
                </li>
                <li class="menu-item" id="m1-2">
                  <a href="<?= base_url("pages/verifikasi")?>" class="menu-link">
                    <div data-i18n="Without navbar">Unduhan</div>
                  </a>
                </li>
              </ul>
            </li>
       <?php } else { ?>
            <!-- Menu admin -->
            <li class="menu-item open" id="menu1">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Daftar ulang</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item" id="m1-1">
                  <a href="<?= base_url("pages/akunsiswa")?>" class="menu-link">
                    <div data-i18n="Without menu">Akun siswa</div>
                  </a>
                </li>
                <li class="menu-item" id="m1-2">
                  <a href="<?= base_url("pages/verifikasi")?>" class="menu-link">
                    <div data-i18n="Without navbar">Verifikasi</div>
                  </a>
                </li>
              </ul>
            </li>
        <?php } ?>
        <!-- end of Menu admin -->
            <li class="menu-item" id="pengaturan" >
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Account Settings">Pengaturan</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item" id="p-profil">
                  <a href="<?= base_url("pages/profil")?>" class="menu-link">
                    <div data-i18n="Account">Profil</div>
                  </a>
                </li>
                <li class="menu-item" id="p-akun">
                  <a href="<?= base_url("pages/akun")?>" class="menu-link">
                    <div data-i18n="Notifications">Akun</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>