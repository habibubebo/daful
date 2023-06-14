<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang/</span> Unduhan</h4>
    <?php if ($this->session->flashdata('alert') == !"") {
      $data = $this->session->flashdata('alert');
      echo '<div class="alert alert-' . $data['tipe'] . ' alert-dismissible" role="alert">' . $data['isi'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    };
    // echo var_dump($this->session->userdata());
    ?>
    <style>
      @media (min-width: 300px) {
        .preview {
          height: 20vh;
        }
      }
      @media (min-width: 700px) {
        .preview {
          height: 100vh;
        }
      }
    </style>
    <div class="row">
      <div class="col-xl-9 col-md-8 col-12 mb-md-0">
        <div class="card overflow-hidden mb-4 preview">
          <div class="card-body m-0 p-0 d-flex align-content-center" id="both-scrollbars">
          <div class="spinner-grow text-primary m-auto" style="position: relative;" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <?php if ($tombol == 0) {
              echo '<object style="position: absolute;" data="'.base_url() . 'aksi/unduh/' . $this->session->userdata('nisn') . '/ayah#navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"></object>';
          } else if ($tombol == 1) {
            echo '<object style="position: absolute;" data="'.base_url() . 'aksi/unduh/' . $this->session->userdata('nisn') . '/ibu#navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"></object>';
          } else echo '<object style="position: absolute;" data="'.base_url() . 'aksi/unduh/' . $this->session->userdata('nisn') . '/wali#navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"></object>';  
            ?>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-4 col-12 invoice-actions">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <?php if ($tombol == 0) {
              echo '<a class="btn btn-primary btn-page-block-custom d-grid w-100 mb-3" href="' . base_url() . 'aksi/unduh/' . $this->session->userdata('nisn') . '/ayah">Unduh</a>';
            } else if ($tombol == 1) {
              echo '<a class="btn btn-primary btn-page-block-custom d-grid w-100 mb-3" href="' . base_url() . 'aksi/unduh/' . $this->session->userdata('nisn') . '/ibu">Unduh</a>';
            } else echo '<a class="btn btn-primary btn-page-block-custom d-grid w-100 mb-3" href="' . base_url() . 'aksi/unduh/' . $this->session->userdata('nisn') . '/wali">Unduh</a>'; ?>
            <div class="p-1">
              <h6 class="text-center">Siapa yang akan tanda tangan?</h6>
              <a href="../unduhan/ayah" class="btn btn-label-primary d-grid w-100 mb-3">Ayah</a>
              <a href="../unduhan/ibu" class="btn btn-label-primary d-grid w-100 mb-3">Ibu</a>
              <a href="../unduhan/wali" class="btn btn-label-primary d-grid w-100 mb-3">Wali</a>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        document.title = "Unduhan data <?= $this->session->userdata('nama') ?>";
        document.getElementById("menu1").classList.add("active", "open");
        document.getElementById("m1-2").classList.add("active");
      </script>
      <link rel="stylesheet" href="../../assets/vendor/libs/spinkit/spinkit.css" />
      <script src="../../assets/vendor/libs/block-ui/block-ui.js"></script>
      <script src="../../assets/js/extended-ui-blockui.js"></script>