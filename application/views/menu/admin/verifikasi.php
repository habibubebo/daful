<style>
  video {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
  }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex">
      <h4 class="fw-bold py-3 me-auto"><span class="text-muted fw-light">Daftar Ulang /</span> Verifikasi</h4>
      <div class="card me-2">
        <div class="row m-auto">
          <div class="col card-separator">
            <div class="mt-1">
              <p class="card-text text-center mb-0">Total</p>
              <h4 class="text-primary text-center mb-0"><?= $sudahverif + $belumverif ?></h4>

            </div>
          </div>
          <div class="col card-separator">
            <div class="d-flex justify-content-between m-auto">
              <div class="card-icon p-1">
                <span class="badge bg-label-success rounded p-2">
                  <i class='bx bxs-user-check bx-md bx-tada-hover'></i>
                </span>
              </div>
              <div class="card-info p-1">
                <p class="card-text mb-0">Sudah</p>
                <div class="d-flex align-items-end mb-0">
                  <h4 class="text-success mb-0"><?= $sudahverif ?></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="d-flex justify-content-between m-auto">
              <div class="card-icon p-1">
                <span class="badge bg-label-info rounded p-2">
                  <i class='bx bxs-user-x bx-md bx-tada-hover'></i>
                </span>
              </div>
              <div class="card-info p-1">
                <p class="card-text mb-0">Belum</p>
                <div class="d-flex align-items-end mb-0">
                  <h4 class="text-info mb-0"><?= $belumverif ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card overflow-hidden" id="demo-content" width="220" height="80">
        <div class="d-flex justify-content-between">
          <video id="video" width="100" height="80"></video>
          <div class="column m-auto">
            <div class="row m-1" id="sourceSelectPanel" style="display:none">
              <select class="form-control" id="sourceSelect" style="max-width:110px">
              </select>
            </div>
            <a class="btn m-auto" id="startButton"><i class='bx bx-play'></i></a>
            <a class="btn m-auto" id="resetButton"><i class='bx bx-stop'></i></a>
          </div>
        </div>
      </div>
    </div>
    <pre><code class="btn-label-danger" id="result"></code></pre>
    <?php if ($this->session->flashdata('alert') == !"") {
      $data = $this->session->flashdata('alert');
      echo '<div class="alert alert-' . $data['tipe'] . ' alert-dismissible" role="alert">' . $data['isi'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    };
    // echo var_dump($this->session->userdata());
    ?>
    <!-- qr reader -->
    <script type="text/javascript" src="https://unpkg.com/@zxing/library@latest/umd/index.min.js"></script>
    <script type="text/javascript">
      window.addEventListener('load', function() {
        let selectedDeviceId;
        const codeReader = new ZXing.BrowserMultiFormatReader()
        codeReader.listVideoInputDevices()
          .then((videoInputDevices) => {
            const sourceSelect = document.getElementById('sourceSelect')
            selectedDeviceId = videoInputDevices[0].deviceId
            if (videoInputDevices.length >= 1) {
              videoInputDevices.forEach((element) => {
                const sourceOption = document.createElement('option')
                sourceOption.text = element.label
                sourceOption.value = element.deviceId
                sourceSelect.appendChild(sourceOption)
              })

              sourceSelect.onchange = () => {
                selectedDeviceId = sourceSelect.value;
              };

              const sourceSelectPanel = document.getElementById('sourceSelectPanel')
              sourceSelectPanel.style.display = 'block'
            }

            document.getElementById('startButton').addEventListener('click', () => {
              codeReader.decodeFromVideoDevice(selectedDeviceId, 'video', (result, err) => {
                if (result) {
                  console.log(result)
                  document.getElementById('demo-content').classList.add('btn-label-success');
                  open(result.text);
                }
                if (err && !(err instanceof ZXing.NotFoundException)) {
                  console.error(err)
                  document.getElementById('result').textContent = err
                  document.getElementById('demo-content').classList.add('btn-label-danger');
                }
              })
              // console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
            })

            document.getElementById('resetButton').addEventListener('click', () => {
              codeReader.reset()
              document.getElementById('result').textContent = '';
            })

          })
          .catch((err) => {
            console.error(err)
          })
      });

      function open(data) {
        location.replace(appPath + "admin/verifikasi/lihat/" + data)
      }
    </script>
    <!-- /QR reader -->
    <!-- tabel responsive -->
    <div class="card mb-4">
      <div class="card-datatable table-responsive">
        <table class="verifikasi border-top table">
          <thead>
            <tr>
              <th></th>
              <th>No</th>
              <th>Nama</th>
              <th>Jalur / No. Urut</th>
              <th>NISN</th>
              <th>Status</th>
              <th>Tanggal Verifikasi</th>
              <th>Aksi</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /tabel responsive -->

    <!-- Modal tambah -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Tambah Akun Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?php echo base_url() . 'akun/tambah'; ?>" method="POST">
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nopend" class="form-label">No. Pendaftaran</label>
                  <input type="text" id="nopend" name="nopend" class="form-control" placeholder="Masukkan No. Pendaftaran" />
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="nisn" class="form-label">NISN</label>
                  <input type="text" id="nisn" name="nisn" class="form-control" placeholder="NISN disini" />
                </div>
                <div class="col mb-0">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Siswa" />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end modal -->
    <hr class="my-5" />
    <script type="text/javascript">
      document.title = "Verifikasi Data Siswa";
      document.getElementById("menu1").classList.add("active", "open");
      document.getElementById("m1-3").classList.add("active");
      setTimeout(() => {
        document.getElementById('startButton').click();
        console.log('jalan');
      }, 5000);
    </script>
    <script src="<?php echo base_url("assets/js/datatables-verify.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/libs/datatables-bs5/buttons.colVis.min.js") ?>"></script>