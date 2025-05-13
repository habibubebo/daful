<?php ($akuns != 0) ? $akuns : 1; ?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- <div class="row" data-masonry='{"percentPosition": true }'> -->
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Selamat datang, <span class="h4 text-primary"><?php echo $this->session->userdata('nama') ?></span>! 👋🏻</h5>
                <p class="mb-4">
                  Dashboard daftar ulang peserta didik <?= $profil[0]->nama ?>.<br>Tetap semangat, <span class="fw-bold" id="semangat"></span>
                </p>

                <a href="<?= base_url("admin/verifikasi") ?>" class="btn btn-sm btn-outline-primary">Verifikasi</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img src="<?php echo base_url("assets/img/illustrations/man-with-laptop-light.png") ?>" height="140" alt="View Badge User" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <?php foreach ($pengumuman as $tp) { ?>
          <div class="card bg-primary text-white text-center p-3 mt-1">
            <figure class="mb-0">
              <blockquote class="blockquote text-start">
                <small><?php $tp->tgl ?></small>
                <p><?php if ($tp->ket == "") {
                      echo 'Tidak ada pengumuman untuk saat ini';
                    } else echo $tp->ket; ?></p>
              </blockquote>
              <figcaption class="text-end blockquote-footer mb-0 text-white">
                Panitia <cite title="Source Title"><?= $profil[0]->nama ?></cite>
              </figcaption>
            </figure>
          </div>
        <?php } ?>
      </div>

      <!-- Vehicles overview -->
      <div class="col-lg-8 mb-4 order-2">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2">Ringkasan</h5>
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="vehiclesOverview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="vehiclesOverview">
                <a class="dropdown-item" href="<?= base_url("admin/verifikasi") ?>">Verifikasi</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-none d-lg-flex mb-6">
              <div class="px-4" style="width: <?= $sudah = (($akuns != 0) ? $sudahverif / $akuns : 0) * '100' ?>%;"><?php echo ($sudah > 0) ? 'Sudah' : '0'; ?></div>
              <div class="px-2" style="width: <?= $proses = (($akuns != 0) ? $prosesverif / $akuns : 0) * '100' ?>%;"><?php echo ($proses > 0) ? 'Proses' : ''; ?></div>
              <div class="px-2" style="width: <?= $belum = (($akuns != 0) ? $belumverif / $akuns : 0) * '100' ?>%;"><?php echo ($belum > 0) ? 'Belum' : ''; ?></div>
            </div>
            <div class="progress rounded-3 mb-6 bg-transparent overflow-hidden" style="height: 46px;">
              <div class="progress-bar fw-medium text-start shadow-none bg-primary px-4 rounded-0" role="progressbar" style="width: <?= $sudah ?>%" aria-valuenow="<?= $sudah ?>" aria-valuemin="0" aria-valuemax="100"><?= $sudah ?>%</div>
              <div class="progress-bar fw-medium text-start shadow-none text-bg-secondary px-4" role="progressbar" style="width: <?= $proses ?>%" aria-valuenow="<?= $proses ?>" aria-valuemin="0" aria-valuemax="100"><?= $proses ?>%</div>
              <div class="progress-bar fw-medium text-start shadow-none bg-light px-2 px-sm-4 rounded-0" role="progressbar" style="width: <?= $belum ?>%" aria-valuenow="<?= $belum ?>" aria-valuemin="0" aria-valuemax="100"><?= $belum ?>%</div>
            </div>
            <div class="table-responsive">
              <table class="table card-table table-border-top-0">
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td class="w-50 ps-0">
                      <div class="d-flex justify-content-start align-items-center">
                        <div class="me-2">
                          <i class='bx bx-md bxs-user-check'></i>
                        </div>
                        <h6 class="mb-0 fw-normal">Sudah Daftar Ulang</h6>
                      </div>
                    </td>
                    <td class="text-end pe-0 text-nowrap">
                      <h6 class="mb-0"><?= $sudahverif ?></h6>
                    </td>
                    <td class="text-end pe-0">
                      <span><?= $sudah ?>%</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="w-50 ps-0">
                      <div class="d-flex justify-content-start align-items-center">
                        <div class="me-2">
                          <i class='bx bx-md bxs-user-detail'></i>
                        </div>
                        <h6 class="mb-0 fw-normal">Proses Mengisi Data</h6>
                      </div>
                    </td>
                    <td class="text-end pe-0 text-nowrap">
                      <h6 class="mb-0"><?= $prosesverif ?></h6>
                    </td>
                    <td class="text-end pe-0">
                      <span><?= $proses ?>%</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="w-50 ps-0">
                      <div class="d-flex justify-content-start align-items-center">
                        <div class="me-2">
                          <i class='bx bx-md bxs-user-x'></i>
                        </div>
                        <h6 class="mb-0 fw-normal">Belum Mengisi Data</h6>
                      </div>
                    </td>
                    <td class="text-end pe-0 text-nowrap">
                      <h6 class="mb-0"><?= $belumverif ?></h6>
                    </td>
                    <td class="text-end pe-0">
                      <span><?= $belum ?>%</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!--/ Vehicles overview -->


      <div class="col-lg-8 col-md-6 order-1">
        <div class="row">
          <div class="col-md">
            <div class="card mb-3">
              <div class="card-header header-elements">
                <h5 class="mb-0 me-2">Akun</h5>

                <div class="card-header-elements ms-auto">
                  <a href="<?= base_url("admin/akunsiswa") ?>" class="btn btn-xs btn-primary">Lihat</a>
                </div>
              </div>
              <div class="card-body">
                <p class="card-text">Jumlah akun yang sudah dibuat: <?= $akuns ?></p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-3">
              <div class="card-header header-elements">
                <h5 class="mb-0 me-2">Belum Verifikasi</h5>

                <div class="card-header-elements ms-auto">
                  <a href="<?= base_url("admin/verifikasi") ?>" class="btn btn-xs btn-primary">Lihat</a>
                </div>
              </div>
              <div class="card-body">
                <p class="card-text">Jumlah siswa yang belum: <?= $verifs ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8 order-2 mb-4">
        <div class="card">
          <h5 class="card-header">Informasi</h5>
          <div class="card-body">
            <ul class="timeline timeline-outline">
              <?php foreach ($infos as $tp) { ?>
                <li class="timeline-item timeline-item-transparent">
                  <span class="timeline-point timeline-point-primary"></span>
                  <div class="timeline-event">
                    <div class="timeline-header mb-sm-0 mb-3">
                      <h6 class="mb-0"><?= $tp->nama ?></h6>
                    </div>
                    <div class="mt-2">
                      <?= $tp->ket ?>
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- / Content -->
  <script type="text/javascript">
    document.title = "Dashboard admin";
  </script>
  <script type="text/javascript">
    document.getElementById("dashboard").classList.add("active");


    document.addEventListener('DOMContentLoaded', function() {
      const semangatSpan = document.getElementById('semangat');

      if (!semangatSpan) {
        console.error('Elemen dengan id "semangat" tidak ditemukan');
        return;
      }
      const motivationalPhrases = [
        "Ingat keluarga di rumah 🥰",
        "Kerja keras hari ini, bahagia di masa depan ✨",
        "Jangan menyerah, kamu pasti bisa! 💪",
        "Setiap langkah kecil membawa perubahan besar 🌈"
      ];
      semangatSpan.classList.add('rotating-motivation');
      const styleSheet = document.createElement("style");
      styleSheet.innerText = `
        .rotating-motivation {
            transition: opacity 0.5s ease;
        }
    `;
      document.head.appendChild(styleSheet);
      let currentIndex = 0;

      function rotateMotivation() {
        semangatSpan.style.opacity = 0;

        setTimeout(() => {
          semangatSpan.textContent = motivationalPhrases[currentIndex];
          semangatSpan.style.opacity = 1;
          currentIndex = (currentIndex + 1) % motivationalPhrases.length;
        }, 300);
      }

      rotateMotivation();
      setInterval(rotateMotivation, 5000);
    });
  </script>