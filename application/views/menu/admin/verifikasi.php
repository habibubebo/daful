<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex">
      <h4 class="fw-bold py-3 my-auto me-auto"><span class="text-muted fw-light">Daftar Ulang /</span> Verifikasi</h4>
      <div class="card me-2">
        <div class="row m-auto">
          <div class="col card-separator">
            <div class="mt-1" id="clear-filter" style="cursor: pointer">
              <p class="card-text text-primary text-center mb-0">Total</p>
              <h4 class="text-primary text-center mb-0"><?= $sudahverif + $prosesverif + $belumverif ?></h4>
            </div>
          </div>
          <div class="col card-separator">
            <div class="mt-1" id="filter-sudah" style="cursor: pointer">
              <p class="card-text text-success text-center mb-0">Sudah</p>
              <h4 class="text-success text-center mb-0"><?= $sudahverif ?></h4>
            </div>
          </div>
          <div class="col card-separator">
            <div class="mt-1" id="filter-proses" style="cursor: pointer">
              <p class="card-text text-warning text-center mb-0">Proses</p>
              <h4 class="text-warning text-center mb-0"><?= $prosesverif ?></h4>
            </div>
          </div>
          <div class="col">
            <div class="mt-1" id="filter-belum" style="cursor: pointer">
              <p class="card-text text-info text-center mb-0">Belum</p>
              <h4 class="text-info text-center mb-0"><?= $belumverif ?></h4>
            </div>
          </div>
        </div>
      </div>
      <style>
        body {
          overflow-x: hidden;
        }

        video {
          -webkit-transform: scaleX(-1);
          transform: scaleX(-1);
          border-radius: 10px;
          width: 100%;
          height: 100%;
          object-fit: cover;
          display: block;
          vertical-align: bottom;
        }

        .scanner-container {
          width: 100px;
          height: 80px;
          overflow: hidden;
          position: relative;
          display: block;
          line-height: 0;
        }

        #scan-overlay {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          pointer-events: none;
          display: none;
        }

        .scan-line {
          position: absolute;
          width: 100%;
          height: 2px;
          background: linear-gradient(90deg, transparent, rgb(60, 131, 238), transparent);
          animation: scan 2s linear infinite;
        }

        @keyframes scan {
          0% {
            top: 5%;
          }

          50% {
            top: 95%;
          }

          100% {
            top: 5%;
          }
        }

        #menu-toggle {
          display: none;
        }

        .btn-menu-label {
          width: 22px;
          height: 22px;
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 50%;
          color: rgb(255, 255, 255);
          transition: all 0.2s ease;
          position: absolute;
          top: 0px;
          right: 0px;
          z-index: 100;
          cursor: pointer;
        }

        .btn-menu-label:hover {
          background-color: rgba(233, 236, 239, 0.64);
          color: rgb(0, 0, 0);
          transform: scale(1.05);
        }

        .settings-panel {
          position: absolute;
          top: 0;
          right: 0;
          width: 150px;
          background-color: rgba(255, 255, 255, 0.95);
          border-radius: 8px;
          padding: 12px;
          box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
          z-index: 90000;
          margin: 5px;
          visibility: hidden;
        }

        #menu-toggle:checked~.settings-panel {
          visibility: visible;
        }

        .close-panel-label {
          position: absolute;
          top: 5px;
          right: 5px;
          font-size: 16px;
          color: #6c757d;
          cursor: pointer;
          background: none;
          border: none;
        }
      </style>
      <div class="card" id="demo-content" width="220" height="80">
        <div class="position-relative">
          <div class="scanner-container">
            <video id="video" autoplay="true" muted="true" playsinline="true"></video>
            <div id="scan-overlay">
              <div class="scan-line"></div>
            </div>
          </div>

          <input type="checkbox" id="menu-toggle">

          <label for="menu-toggle" class="btn-menu-label">
            <i class='bx bx-dots-vertical-rounded'></i>
          </label>

          <div class="settings-panel" id="sourceSelectPanel">
            <label for="menu-toggle" class="close-panel-label">
              <i class='bx bx-x'></i>
            </label>

            <div class="mb-3">
              <p class="settings-label">Pilih Kamera</p>
              <select class="form-control" id="sourceSelect"></select>
            </div>

            <div class="d-grid gap-2">
              <a class="btn btn-sm btn-success text-white d-flex align-items-center justify-content-center" id="startButton">
                <i class='bx bx-play me-1'></i> Mulai
              </a>
              <a class="btn btn-sm btn-danger text-white d-flex align-items-center justify-content-center" id="resetButton">
                <i class='bx bx-stop me-1'></i> Berhenti
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <pre><code class="btn-label-danger" id="result"></code></pre>
    <?php if ($this->session->flashdata('alert') == !"") {
      $data = $this->session->flashdata('alert');
      echo '<div class="alert alert-' . $data['tipe'] . ' alert-dismissible" role="alert">' . $data['isi'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    };
    ?>
    <script type="text/javascript" src="https://unpkg.com/@zxing/library@latest/umd/index.min.js"></script>
    <script type="text/javascript">
      window.addEventListener('load', function() {
        let selectedDeviceId;
        const codeReader = new ZXing.BrowserMultiFormatReader();
        const savedDeviceId = localStorage.getItem('selectedDeviceId');

        codeReader.listVideoInputDevices()
          .then((videoInputDevices) => {
            const sourceSelect = document.getElementById('sourceSelect');

            if (savedDeviceId) {
              selectedDeviceId = savedDeviceId;
            } else {
              selectedDeviceId = videoInputDevices[0].deviceId;
            }

            if (videoInputDevices.length >= 1) {
              videoInputDevices.forEach((element) => {
                const sourceOption = document.createElement('option');
                sourceOption.text = element.label;
                sourceOption.value = element.deviceId;
                sourceSelect.appendChild(sourceOption);
              });

              sourceSelect.value = selectedDeviceId;

              sourceSelect.onchange = () => {
                selectedDeviceId = sourceSelect.value;
                localStorage.setItem('selectedDeviceId', selectedDeviceId);
              };

              const sourceSelectPanel = document.getElementById('sourceSelectPanel');
              sourceSelectPanel.style.display = 'block';
            }

            document.getElementById('startButton').addEventListener('click', () => {
              document.getElementById('scan-overlay').style.display = 'block';
              codeReader.decodeFromVideoDevice(selectedDeviceId, 'video', (result, err) => {
                if (result) {
                  console.log(result);
                  document.getElementById('demo-content').classList.add('btn-label-success');
                  open(result.text);
                }
                if (err && !(err instanceof ZXing.NotFoundException)) {
                  console.error(err);
                  document.getElementById('result').textContent = err;
                  document.getElementById('demo-content').classList.add('btn-label-danger');
                }
              });
            });

            document.getElementById('resetButton').addEventListener('click', () => {
              codeReader.reset();
              document.getElementById('result').textContent = '';
              document.getElementById('scan-overlay').style.display = 'none';
            });

          })
          .catch((err) => {
            console.error(err);
          });
      });

      function open(data) {
        location.replace(appPath + "admin/verifikasi/lihat/" + data + "?from=" + window.location.href);
      }
    </script>
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
      }, 2000);
    </script>
    <script src="<?php echo base_url("assets/js/datatables-verify.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/libs/datatables-bs5/buttons.colVis.min.js") ?>"></script>