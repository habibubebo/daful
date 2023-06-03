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
                </div>
                <div class="col-md-8 col-md-4 col-lg-4 order-lg-1 order-1 mb-4">
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
                <div class="col-md-8 col-md-4 col-lg-8 order-lg-2 order-2 mb-4">
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-4 pt-3 text-center">
                          <img src="././assets/img/illustrations/superman-flying-light.png" width="100" height="140" class="rounded-start" alt="upgrade account" data-app-dark-img="illustrations/superman-flying-dark.png" data-app-light-img="illustrations/superman-flying-light.png">
                        </div>
                        <div class="col-8 text-center">
                          <div class="card-body">
                            <h6 class="card-title mb-1">Hore! langkah terakhir</h6>
                            <small class="d-block mb-3">Cetak dan serahkan bukti telah melakukan daftar ulang ke petugas.</small>

                            <h5 class="card-title text-info mb-1">Semangat 💐</h5>
                            <small class="d-block mb-3 text-muted">sedikit lagi selesai</small>

                            <a href="<?= base_url("siswa/unduhan")?>" class="btn btn-sm btn-info">Cetak disini</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="row">
  <!-- Timeline Left-->
  <div class="col-xl-6 mb-4 mb-xl-0">
    <div class="card">
      <h5 class="card-header">Timeline</h5>
      <div class="card-body">
        <ul class="timeline">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header border-bottom mb-3">
                <h6 class="mb-0">Membuat akun</h6>
                <small class="text-muted">3rd October</small>
              </div>
              <div class="d-flex justify-content-between flex-wrap mb-2">
                <div>
                  <span>Charles de Gaulle Airport, Paris</span>
                  <i class="bx bx-right-arrow-alt scaleX-n1-rtl mx-3"></i>
                  <span>Heathrow Airport, London</span>
                </div>
                <div>
                  <span class="text-muted">6:30 AM</span>
                </div>
              </div>
              <a href="javascript:void(0)">
                <i class="bx bx-link"></i>
                bookingCard.pdf
              </a>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-sm-0 mb-3">
                <h6 class="mb-0">Design Review</h6>
                <small class="text-muted">4th October</small>
              </div>
              <p>
                Weekly review of freshly prepared design for our new
                application.
              </p>
              <div class="d-flex justify-content-between">
                <h6>New Application</h6>
                <div class="d-flex">
                  <div class="avatar avatar-xs me-2">
                    <img src="././assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div class="avatar avatar-xs">
                    <img src="././assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-danger"></span>
            <div class="timeline-event">
              <div class="d-flex flex-sm-row flex-column">
                <img src="././assets/img/elements/16.jpg" class="rounded mb-sm-0 mb-3 me-3" alt="Shoe img" height="62" width="62" />
                <div>
                  <div class="timeline-header flex-wrap mb-2">
                    <h6 class="mb-0">Sold Puma POPX Blue Color</h6>
                    <small class="text-muted">5th October</small>
                  </div>
                  <p>
                    PUMA presents the latest shoes from its collection. Light &
                    comfortable made with highly durable material.
                  </p>
                </div>
              </div>
              <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column text-sm-center">
                <div class="customer mb-sm-0 mb-2">
                  <p class="mb-0">Customer</p>
                  <span class="text-muted">Micheal Scott</span>
                </div>
                <div class="price mb-sm-0 mb-2">
                  <p class="mb-0">Price</p>
                  <span class="text-muted">$375.00</span>
                </div>
                <div class="price">
                  <p class="mb-0">Quantity</p>
                  <span class="text-muted">1</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Interview Schedule</h6>
                <small class="text-muted">6th October</small>
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Possimus quos, voluptates voluptas rem veniam expedita.
              </p>
              <hr />
              <div class="d-flex justify-content-between flex-wrap gap-2">
                <div class="d-flex flex-wrap">
                  <div class="avatar me-3">
                    <img src="././assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <p class="mb-0">Rebecca Godman</p>
                    <span class="text-muted">Javascript Developer</span>
                  </div>
                </div>
                <div class="d-flex flex-wrap align-items-center cursor-pointer">
                  <i class="bx bx-message me-2"></i>
                  <i class="bx bx-phone-call"></i>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-warning"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">2 Notifications</h6>
                <small class="text-muted">7th October</small>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 my-3 me-2">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="././assets/img/avatars/5.png" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="././assets/img/avatars/12.png" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="././assets/img/avatars/6.png" alt="Avatar" />
                      </li>
                    </ul>
                    <span>Commented on your post.</span>
                  </div>
                  <button class="btn btn-primary btn-sm my-sm-0 my-3">
                    View
                  </button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap pb-0 px-0">
                  <div class="d-flex align-items-center">
                    <img src="././assets/img/avatars/4.png" class="rounded-circle me-3" alt="avatar" height="24" width="24" />
                    <div class="user-info">
                      <p class="my-0">Dwight repaid you</p>
                      <span class="text-muted">30 minutes ago</span>
                    </div>
                  </div>
                  <h5 class="mb-0">$20</h5>
                </li>
              </ul>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Timeline Left-->
            </div>
            <!-- / Content -->
            <script type="text/javascript"> document.title = "Dashboard Siswa - <?= $this->session->userdata("nama")?>";</script>
            <script type="text/javascript"> document.getElementById("dashboard").classList.add("active");</script>