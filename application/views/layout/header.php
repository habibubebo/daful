<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-navbar-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-app-path="<?php echo base_url() ?>"
  data-assets-path="<?php echo base_url("assets/") ?>"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Daftar Ulang</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/img/favicon/favicon.ico") ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/fonts/boxicons.css") ?>"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/css/core.css") ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/css/theme-default.css") ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/demo.css") ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/typeahead-js/typeahead.css") ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css") ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/bs-stepper/bs-stepper.css") ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/bootstrap-select/bootstrap-select.css") ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/apex-charts/apex-charts.css") ?>" />
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/select2/select2.css") ?>" /> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/formvalidation/dist/css/formValidation.min.css") ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/datatables-bs5/responsive.bootstrap5.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/datatables-bs5/datatables.checkboxes.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/datatables-bs5/buttons.bootstrap5.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/dropzone/dropzone.css") ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.min.css") ?>" />
    <!-- Page CSS -->
    <script src="<?php echo base_url("assets/vendor/libs/jquery/jquery.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/js/bootstrap.js") ?>"></script>
    <!-- Helpers -->
    <script src="<?php echo base_url("assets/vendor/js/helpers.js") ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url("assets/js/config.js") ?>"></script>
    <style type="text/css">
    .txtedit{
      display: none;
      width: 98%;
    }
   </style>
  </head>
