<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat datang <?php echo $this->session->userdata('nama') ?>! </h5>
                          <p class="mb-4">
                            di halaman dashboard daftar ulang peserta didik SMA Negeri 1 Srengat.<br>Tetap semangat, <span class="fw-bold">ingat keluarga dirumah 🥰</span>
                          </p>

                          <a href="<?= base_url("admin/akunsiswa")?>" class="btn btn-sm btn-outline-primary">Buat akun siswa</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="<?php echo base_url("assets/img/illustrations/man-with-laptop-light.png") ?>"
                            height="140"
                            alt="View Badge User"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <?php foreach ($pengumuman as $tp) { ?>
                  <div class="card bg-primary text-white text-center p-3 mt-1">
                    <figure class="mb-0">
                      <blockquote class="blockquote">
                        <small><?php $tp->tgl ?></small>
                        <p><?php if ($tp->ket == "") { echo 'Tidak ada pengumuman untuk saat ini'; } else echo $tp->ket; ?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer mb-0 text-white">
                        Panitia <cite title="Source Title">PPDB <?= $profil[0]->nama ?></cite>
                      </figcaption>
                    </figure>
                  </div>
                  <?php } ?>
                </div>
                <div class="col-lg-8 col-md-6 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="card-info">
                              <p class="card-text">Akun Dibuat</p>
                              <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title text-primary mb-1 me-2"><?= $akuns ?></h4>
                                <small class="text-success">☕</small>
                              </div>
                              <a href="<?= base_url("admin/akunsiswa")?>" class="text-muted">Lihat</a>
                            </div>
                            <div class="card-icon">
                              <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-trending-up bx-sm"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="card-info">
                              <p class="card-text">Belum Verifikasi</p>
                              <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title text-primary mb-1 me-2"><?= $verifs ?></h4>
                                <small class="text-success">🌻</small>
                              </div>
                              <a href="<?= base_url("admin/verifikasi")?>" class="text-muted">Lihat</a>
                            </div>
                            <div class="card-icon">
                              <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-trending-up bx-sm"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 order-2 mb-4">
                  <div class="card">
                    <h5 class="card-header">Informasi</h5>
                    <div class="card-body">
                      <ul class="timeline">
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
                        <li class="timeline-end-indicator">
                          <i class="bx bx-check-circle text-success"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- / Content -->
            <script type="text/javascript"> document.title = "Dashboard admin";</script>
            <script type="text/javascript"> document.getElementById("dashboard").classList.add("active");</script>