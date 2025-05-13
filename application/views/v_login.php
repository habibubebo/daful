<body>
  <!-- Content -->

  <div class="container-xxl h-100">
    <div class="container-p-y align-items-center justify-content-center">
      <div class="h-100 d-flex flex-column justify-content-center">
        <!-- Register -->
        <div class="card mw-50 m-auto">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4">
              <a href="<?= base_url() ?>" class="app-brand-link gap-2">
                <span class="app-brand-logo">
                  <img src="<?= base_url("assets/img/logo/") ?><?= $profil[0]->avatar ?>" width="60px">
                </span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2 center">Halo Admin! <span class="wave">👋</span></h4>

            <form id="formAuthentication" class="mb-3" action="<?= base_url("auth/login") ?>" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" class="form-control" id="email" name="user" placeholder="Masukkan username" autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
              </div>
            </form>
            <p class="text-center"><span>Lupa password?</span>
              <a href="#"><span>Hubungi administrator</span></a>
            </p>
            <hr>
            <div class="mb-3">
              <a class="btn btn-secondary d-grid w-100" href="<?= base_url() ?>">Kembali</a>
            </div>
            <p class="text-center mb-3">untuk login peserta didik</p>
            <?php if ($alert == 1) {
              echo '<div class="alert alert-danger" role="alert" id="alert">Username atau password salah!</div>';
            } ?>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->
  <?php $this->load->view('layout/footer'); ?>