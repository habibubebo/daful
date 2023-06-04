<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <?php foreach ($tgl as $tp) { ; if ($tp->status_verifikasi == 0){ ?>
                <!-- step1 -->
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat <?php echo $this->session->userdata('nama') ?>! 🎉</h5>
                          <p class="mb-4">
                            Kamu telah diterima sebagai siswa di <span class="fw-bold">SMA Negeri 1 Srengat</span>, lengkapi data dirimu untuk melakukan daftar ulang!
                          </p>
        
                          <a href="<?= base_url("siswa")?>" class="btn btn-sm btn-outline-primary">Isi data diri</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="././assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <?php } else if ($tp->status_verifikasi == 1){ ?>
                  <!-- step2 -->
                <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-4 pt-3 text-center">
                          <img src="././assets/img/illustrations/superman-flying-light.png" width="100" height="140" class="rounded-start" alt="upgrade account" data-app-dark-img="illustrations/superman-flying-dark.png" data-app-light-img="illustrations/superman-flying-light.png">
                        </div>
                        <div class="col-8 text-center">
                          <div class="card-body">
                            <h6 class="card-title mb-1">Hore! langkah terakhir</h6>
                            <small class="d-block mb-3">Cetak dan serahkan bukti telah melakukan daftar ulang ke petugas.</small>

                            <h5 class="card-title text-info mb-1">Semangat, <?php echo $this->session->userdata('nama') ?> 💐</h5>
                            <small class="d-block mb-3 text-muted">sedikit lagi selesai</small>

                            <a href="<?= base_url("siswa/unduhan")?>" class="btn btn-sm btn-info">Cetak disini</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div> <?php } else {?>
                <!-- step3 -->
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-8">
                        <div class="card-body">
                          <h6 class="card-title mb-3 text-nowrap">Terima kasih!✨</h6>
                          
                          <h5 class="card-title text-primary mb-1"><?php echo $this->session->userdata('nama') ?></h5>
                          <small class="d-block mb-3 text-nowrap">Anda telah daftar ulang sebagai siswa di SMA Negeri 1 Srengat</small>
                          <small class="d-block mb-3 text-muted">Pada tanggal <?= $tp->tgl_verif ?></small>
                        </div>
                      </div>
                      <div class="col-4 pt-3 ps-0">
                        <img src="././assets/img/illustrations/prize-light.png" width="90" height="140" class="rounded-start" alt="View Sales">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /step3 --> <?php } }?>
                <!-- pengumuman -->
                <div class="col-md-8 col-md-4 col-lg-4 order-lg-1 order-2 mb-4">
                <?php foreach ($pengumuman as $tp) { ?>
                  <div class="card bg-primary text-white text-center p-1">
                    <figure class="mb-0">
                      <blockquote class="blockquote">
                        <small><?php $tp->tgl ?></small>
                        <p><?php if ($tp->ket == "") { echo 'Tidak ada pengumuman untuk saat ini'; } else echo $tp->ket; ?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer mb-0 text-white">
                        Panitia <cite title="Source Title">PPDB SMA Negeri 1 Srengat</cite>
                      </figcaption>
                    </figure>
                  </div>
                  <?php } ?>
                </div>
                
              </div>
            <!-- / Content -->
            <script type="text/javascript"> document.title = "Dashboard Siswa - <?= $this->session->userdata("nama")?>";</script>
            <script type="text/javascript"> document.getElementById("dashboard").classList.add("active");</script>