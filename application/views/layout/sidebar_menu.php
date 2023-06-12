<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <?php foreach ($profil as $tp) { ?>
            <a href="<?= base_url()?>" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="<?= base_url("assets/img/")?><?= $tp->avatar ?>" width="40px">
              </span>
              <span class="app-brand-text menu-text fw-bolder ms-2"><?= $tp->nama ?></span>
            </a>
            <?php } ?>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item" id="dashboard">
              <a href="<?= base_url('Dashboard')?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu</span></li>
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
                  <a href="<?= base_url("siswa/unduhan")?>" class="menu-link">
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
                <li class="menu-item" id="m1-2">
                  <a href="<?= base_url("admin/master")?>" class="menu-link">
                    <div data-i18n="Without menu">Data Master</div>
                  </a>
                </li>
                <li class="menu-item" id="m1-1">
                  <a href="<?= base_url("admin/akunsiswa")?>" class="menu-link">
                    <div data-i18n="Without menu">Akun siswa</div>
                  </a>
                </li>
                <li class="menu-item" id="m1-3">
                  <a href="<?= base_url("admin/verifikasi")?>" class="menu-link">
                    <div data-i18n="Without navbar">Verifikasi</div>
                  </a>
                </li>
                <li class="menu-item" id="m1-4">
                  <a href="<?= base_url("admin/data")?>" class="menu-link">
                    <div data-i18n="Without navbar">Data Siswa</div>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="menu-item" id="pengaturan" >
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Account Settings">Pengaturan</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item" id="p-profil">
                  <a href="<?= base_url("admin/profil")?>" class="menu-link">
                    <div data-i18n="Account">Profil</div>
                  </a>
                </li>
                <li class="menu-item" id="p-akun">
                  <a href="<?= base_url("admin/akun")?>" class="menu-link">
                    <div data-i18n="Notifications">Akun</div>
                  </a>
                </li>
              </ul>
            </li>
        <?php } ?>
        <!-- end of Menu admin -->
          </ul>
        </aside>