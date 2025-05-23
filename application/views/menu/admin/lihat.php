<style>
  #copyPopup {
    visibility: hidden;
    background-color: #28a745;
    color: white;
    text-align: center;
    border-radius: 4px;
    padding: 0.5rem 1rem;
    position: fixed;
    bottom: 1rem;
    right: 1rem;
    font-weight: bold;
    z-index: 10000;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  #copyPopup.show {
    visibility: visible;
    opacity: 1;
  }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang /</span> Akun Siswa</h4>
    <?php if ($this->session->flashdata('alert') == !"") {
      $data = $this->session->flashdata('alert');
      echo '<div class="alert alert-' . $data['tipe'] . ' alert-dismissible" role="alert">' . $data['isi'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    };
    // echo var_dump($this->session->userdata());
    ?>
    <!-- tabel responsive -->
    <div class="card mb-4">
      <div class="card-datatable table-responsive">
        <table class="datatables-projects border-top table" id="table-account">
          <thead>
            <tr>
              <th></th>
              <th>No</th>
              <th>Nama</th>
              <th>Jalur Masuk</th>
              <th>No. Urut</th>
              <th>NISN</th>
              <th>Dibuat</th>
              <th>Aksi</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /tabel responsive -->

    <!-- Modal tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Tambah Akun Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?= base_url() . 'aksi/akun/tambah'; ?>" method="POST">
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="masuk-jalur" class="form-label">Jalur Masuk</label>
                  <select class="form-control" name="masuk-jalur" id="masuk-jalur" data-style="btn-default">
                    <option value="" disabled selected>Pilih</option>
                    <?php foreach ($jms as $jm) { ?>
                      <option value="<?= $jm->nama ?>"><?= $jm->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="no-urut" class="form-label">No. Urut</label>
                  <input type="text" id="no-urut" name="no-urut" class="form-control" placeholder="no. urut disini" />
                </div>
                <div class="col mb-0">
                  <label for="nisn" class="form-label">NISN</label>
                  <small class="text-primary">*Password default</small>
                  <input type="text" id="nisn" name="nisn" class="form-control" placeholder="NISN Siswa" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-0">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Siswa" />
                </div>
              </div>
            </div>
            <div class="modal-footer pb-0">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
          <div class="d-flex justify-content-start m-3 border-top">
            <?php echo form_open_multipart(site_url('aksi/akun/import'), 'class="mt-3"'); ?>
            <div class="d-flex d-inline-block">
              <a class="btn btn-label-primary me-2" data-bs-toggle="modal" data-bs-target="#modalI" data-toggle="tooltip" title="Lihat template import banyak akun"><i class='bx bx-table'></i></a>
              <input type="file" name="file" accept="text/csv" class="form-control me-2">
              <button type="submit" name="import" class="btn btn-primary">Import</button>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal -->
    <?php $this->load->view('form/import') ?>
    <!-- Modal edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Edit Akun Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?php echo base_url() . 'aksi/akun/update'; ?>" method="POST">
            <div class="modal-body">
              <div class="row" hidden>
                <div class="col mb-3">
                  <label for="id-siswa" class="form-label">Id</label>
                  <input type="text" id="id-siswa" name="id-siswa" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="masuk-jalurEdit" class="form-label">Jalur Masuk</label>
                  <select class="form-control" name="masuk-jalurEdit" id="masuk-jalurEdit" data-style="btn-default">
                    <option value="" disabled selected>Pilih</option>
                    <?php foreach ($jms as $jm) { ?>
                      <option value="<?= $jm->nama ?>"><?= $jm->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="col mb-0">
                  <label for="no-urutEdit" class="form-label">Nomor Urut</label>
                  <input type="text" id="no-urutEdit" name="no-urutEdit" class="form-control" placeholder="no urut disini" />
                </div>
                <div class="col mb-0">
                  <label for="nisnEdit" class="form-label">NISN</label>
                  <small class="text-primary">*Password default</small>
                  <input type="text" id="nisnEdit" name="nisnEdit" class="form-control" placeholder="NISN Siswa" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col mb-0">
                  <label for="namaEdit" class="form-label">Nama</label>
                  <input type="text" id="namaEdit" name="namaEdit" class="form-control" placeholder="Nama Siswa" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-0">
                  <label for="PinEdit" class="form-label">PIN Pendaftaran</label>
                  <div class="input-group">
                    <input type="text" id="PinEdit" name="PinEdit" class="form-control" placeholder="PIN Siswa" />
                    <span class="input-group-text"><a title="Copy Pin" id="copyBtn" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                        </svg></a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end modal -->
    <div id="copyPopup" role="alert" aria-live="assertive">Data telah disalin!</div>
    <hr class="my-5" />
    <script>
      const copyBtn = document.getElementById('copyBtn');
      const pinInput = document.getElementById('PinEdit');
      const popup = document.getElementById('copyPopup');

      copyBtn.addEventListener('click', () => {
        // Pastikan elemen tidak disabled, atau ambil value langsung
        const pinValue = pinInput.value;

        // Menggunakan Clipboard API
        navigator.clipboard.writeText(pinValue).then(() => {
          showPopup();
        }).catch(err => {
          alert('Gagal menyalin PIN: ' + err);
        });
      });

      function showPopup() {
        popup.classList.add('show');
        setTimeout(() => {
          popup.classList.remove('show');
        }, 2000);
      }
    </script>

    <script src="<?php echo base_url("assets/js/datatables.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/libs/datatables-bs5/buttons.colVis.min.js") ?>"></script>
    <script>
      document.title = "Daftar Akun Siswa";
      document.getElementById("menu1").classList.add("active", "open");
      document.getElementById("m1-1").classList.add("active");

      function get(nomor) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 &&
            this.status == 200) {
            var myObj = JSON.parse(this.responseText);
            $.each(myObj, function(i) {
              document.getElementById("id-siswa").value = myObj.data[0].id_siswa;
              document.getElementById("masuk-jalurEdit").value = myObj.data[0].masuk_jalur;
              document.getElementById("no-urutEdit").value = myObj.data[0].no_urut;
              document.getElementById("namaEdit").value = myObj.data[0].nama_lengkap;
              document.getElementById("nisnEdit").value = myObj.data[0].nisn;
              document.getElementById("PinEdit").value = myObj.data[0].no_pendaftaran;
            });
          }
        };
        xmlhttp.open("GET", "<?= base_url("aksi/data/siswa/") ?>" + nomor, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();
      };
    </script>