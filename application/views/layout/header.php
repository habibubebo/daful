<script>
  <?php
  $color = $profil[0]->warna;
  $key = "templateCustomizer-vertical-menu-template--Color";
  ?>
  const key = "<?= $key; ?>";
  var newValue = "<?= $color; ?>";
  const expiryKey = key + "_expiry"; 
  const ttl = 1000 * 60 * 60; // Masa kadaluarsa 1 jam (dalam milidetik)

  function setWithExpiry(key, value, expiryKey, ttl) {
    localStorage.setItem(key, value); 
    const now = new Date();
    const expiry = now.getTime() + ttl;
    localStorage.setItem(expiryKey, expiry); 
    // console.log(`Warna diset: ${key} = ${value}`);
  }

  // Fungsi untuk mengambil data dengan pemeriksaan kadaluarsa
  function getWithExpiry(key, expiryKey) {
    const value = localStorage.getItem(key);
    const expiry = localStorage.getItem(expiryKey);

    if (!value || !expiry) return null;

    const now = new Date();
    if (now.getTime() > parseInt(expiry)) {
      localStorage.removeItem(key); // Hapus key utama
      localStorage.removeItem(expiryKey); // Hapus key kadaluarsa
      return null;
    }
    return value;
  }

  // Logika utama
  const storedValue = getWithExpiry(key, expiryKey);
  if (storedValue === null) {
    setWithExpiry(key, newValue, expiryKey, ttl);
  } else {
    // console.log(`Warna sudah ada: ${storedValue}`);
  }
</script>
<!DOCTYPE html>
<html lang="en" class="layout-navbar-fixed layout-compact layout-menu-fixed" dir="ltr" data-app-path="<?= base_url() ?>" data-assets-path="<?= base_url("assets/") ?>" data-template="vertical-menu-template" data-theme="theme-default">

<head>
  <title>Web Daftar Ulang</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="description" content="Web Daftar Ulang <?= $profil[0]->nama ?>" />
  <meta name="keywords" content="Daftar ulang, srengat, <?= $profil[0]->nama ?>, daftar ulang">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url("assets/img/favicon/").$profil[0]->icon ?>" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?= base_url("assets/vendor/fonts/boxicons.css") ?>" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= base_url("assets/vendor/css/core.css") ?>" class="template-customizer-core-css" />
  <!-- <link rel="stylesheet" href="<?= base_url("assets/vendor/css/theme-default.css") ?>" class="template-customizer-theme-css" /> -->
  <link rel="stylesheet" href="<?= base_url("assets/css/demo.css") ?>" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/pickr/pickr-themes.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/typeahead-js/typeahead.css") ?>" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css") ?>" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/bs-stepper/bs-stepper.css") ?>" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/bootstrap-select/bootstrap-select.css") ?>" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/apex-charts/apex-charts.css") ?>" />
  <!-- <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/select2/select2.css") ?>" /> -->
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/formvalidation/dist/css/formValidation.min.css") ?>" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/datatables-bs5/responsive.bootstrap5.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/datatables-bs5/datatables.checkboxes.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/datatables-bs5/buttons.bootstrap5.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/dropzone/dropzone.css") ?>" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.min.css") ?>" />
  <!-- Page CSS -->
  <script src="<?= base_url("assets/vendor/libs/jquery/jquery.js") ?>"></script>
  <script src="<?= base_url("assets/vendor/js/bootstrap.js") ?>"></script>
  <!-- Helpers -->
  <script src="<?= base_url("assets/js/helpers.js") ?>"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!-- <link rel="stylesheet" href="<?= base_url("assets/vendor/css/template-customizer.css") ?>" /> -->
  <script src="<?= base_url() ?>assets/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= base_url("assets/js/config.js") ?>"></script>
  <style type="text/css">
    .txtedit {
      display: none;
      width: 100%;
    }

    #spinner-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(255, 255, 255, 0.75);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 999999;
    }

    .close {
      color: #aaa;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover {
      color: black;
    }

    .tutup {
      position: fixed;
      top: 28px;
      right: 44px;
      z-index: 7000;
    }
  </style>
  <style>
    .header {
      background: linear-gradient(rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url("<?= base_url("assets/img/background/") . $profil[0]->background ?>");
      background-size: cover;
      background-repeat: no-repeat;
      min-height: 600px !important
    }

    .wave {
      animation-name: wave-animation;
      animation-duration: 2.5s;
      animation-iteration-count: infinite;
      transform-origin: 70% 70%;
      display: inline-block;
    }

    @keyframes wave-animation {
      0% {
        transform: rotate(0.0deg)
      }

      10% {
        transform: rotate(14.0deg)
      }

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

      100% {
        transform: rotate(0.0deg)
      }
    }
  </style>
  <button hidden id="start-loading">Show Loading</button>
  <!-- <button hidden id="stop-loading">Hide Loading</button> -->
</head>
<div id="spinner-container">
  <div class="spinner-grow text-primary" role="status">
    <span class="visually-hidden">loading</span>
  </div>
  <span id="stop-loading" class="close tutup">&times;</span>
</div>