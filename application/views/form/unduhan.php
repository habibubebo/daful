<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 m-auto">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Form Unduhan Bukti</h5>
          </div>
          <div class="card-body">
            <p><b><?= $this->session->userdata('nama') ?></b>, anda akan dialihkan ke halaman unduhan bukti, sebelum itu...</p>
            <h6>Siapa yang akan tanda tangan?</h6>
            <form id="businessForm" action="<?php echo base_url() . 'siswa/formunduhan/submit'; ?>" method="POST">
              <div class="form-check custom-option custom-option-basic mb-3">
                <label class="form-check-label custom-option-content" for="customRadioAyah">
                  <input class="form-check-input" type="radio" name="customRadioTemp" value="ayah" id="customRadioAyah" checked />
                  <span class="custom-option-header pb-0">
                    <span class="fw-semibold">Ayah</span>
                    <span><?= $this->session->userdata('ayah') ?></span>
                  </span>
                </label>
              </div>
              <div class="form-check custom-option custom-option-basic mb-3">
                <label class="form-check-label custom-option-content" for="customRadioIbu">
                  <input class="form-check-input" type="radio" name="customRadioTemp" value="ibu" id="customRadioIbu"/>
                  <span class="custom-option-header pb-0">
                    <span class="fw-semibold">Ibu</span>
                    <span><?= $this->session->userdata('ibu') ?></span>
                  </span>
                </label>
              </div>
              <div class="form-check custom-option custom-option-basic mb-3">
                <label class="form-check-label custom-option-content" for="customRadioWali">
                <input class="form-check-input" type="radio" name="customRadioTemp" value="wali" id="customRadioWali"/>
                  <span class="custom-option-header pb-0">
                    <span class="fw-semibold">Wali</span>
                    <span><?= $this->session->userdata('wali') ?></span>
                  </span>
                </label>
              </div>
              <hr>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-100 d-grid">Lanjutkan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        document.title = "Unduhan Form <?= $this->session->userdata('nama') ?>";
        document.getElementById("menu1").classList.add("active", "open");
        document.getElementById("m1-2").classList.add("active");
      </script>
      <link rel="stylesheet" href="../../assets/vendor/libs/spinkit/spinkit.css" />
      <script src="../../assets/vendor/libs/block-ui/block-ui.js"></script>
      <script src="../../assets/js/extended-ui-blockui.js"></script>