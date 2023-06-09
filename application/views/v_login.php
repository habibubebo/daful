<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url("assets/") ?>" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login Admin</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url("assets/img/favicon/favicon.ico") ?>" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?= base_url("assets/vendor/fonts/boxicons.css") ?>" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= base_url("assets/vendor/css/core.css") ?>" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/css/theme-default.css") ?>" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= base_url("assets/css/demo.css") ?>" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css") ?>" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?= base_url("assets/vendor/css/pages/page-auth.css") ?>" />
  <!-- Helpers -->
  <script src="<?= base_url("assets/vendor/js/helpers.js") ?>"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= base_url("assets/js/config.js") ?>"></script>
  <style>
    .wave {
      animation-name: wave-animation;
      /* Refers to the name of your @keyframes element below */
      animation-duration: 2.5s;
      /* Change to speed up or slow down */
      animation-iteration-count: infinite;
      /* Never stop waving :) */
      transform-origin: 70% 70%;
      /* Pivot around the bottom-left palm */
      display: inline-block;
    }

    @keyframes wave-animation {
      0% {
        transform: rotate(0.0deg)
      }

      10% {
        transform: rotate(14.0deg)
      }

      /* The following five values can be played with to make the waving more or less extreme */
      20% {
        transform: rotate(-8.0deg)
      }

      30% {
        transform: rotate(14.0deg)
      }

      40% {
        transform: rotate(-4.0deg)
      }

      50% {
        transform: rotate(10.0deg)
      }

      60% {
        transform: rotate(0.0deg)
      }

      /* Reset for the last half to pause */
      100% {
        transform: rotate(0.0deg)
      }
    }
  </style>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="<?= base_url() ?>" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="<?= base_url("assets/img/logo_sma_srengat_low.png") ?>" width="60px">
                </span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2 center">Halo Admin! <span class="wave">👋</span></h4>
            <p class="mb-4">untuk login peserta didik silahkan <a href="<?= base_url() ?>">klik disini</a></p>

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
            <?php if ($alert == 1) {
              echo '<div class="alert alert-danger" role="alert" id="alert">Username atau password salah!</div>';
            } ?>
            <p class="text-center">
              <span>Lupa password?</span>
              <a href="#">
                <span>Hubungi administrator</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?= base_url("assets/vendor/libs/jquery/jquery.js") ?>"></script>
  <script src="<?= base_url("assets/vendor/libs/popper/popper.js") ?>"></script>
  <script src="<?= base_url("assets/vendor/js/bootstrap.js") ?>"></script>
  <script src="<?= base_url("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js") ?>"></script>

  <script src="<?= base_url("assets/vendor/js/menu.js") ?>"></script>
  <!-- endbuild -->
  <!-- Main JS -->
  <script src="<?= base_url("assets/js/main.js") ?>"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>