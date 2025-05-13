<style>
  .rating-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 1rem 0;
  }

  /* Sistem Rating Bintang yang Baru */
  .star {
    cursor: pointer;
    transition: color 0.2s;
    color: #dee2e6;
  }

  .bxs-star {
    color: #ffc107;
  }

  .bxs-star-half {
    color: #ffc107;
  }

  .star:hover {
    color: #ffc107;
  }

  .rating-text {
    margin-top: 0.5rem;
    font-size: 1.1rem;
    font-weight: 500;
    color: #6c757d;
  }

  .review-textarea {
    border-radius: 10px;
    resize: none;
    border-color: #dee2e6;
    padding: 1rem;
    transition: border-color 0.2s;
  }

  .review-textarea:focus {
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
  }

  .rating-ticks {
    display: flex;
    justify-content: space-between;
    margin-top: 5px;
    padding: 0 10px;
    font-size: 0.75rem;
    color: #6c757d;
  }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <?php foreach ($tgl as $tp) {;
        if ($tp->status_verifikasi == 0) { ?>
          <!-- step1 -->
          <div class="col-lg-8 mb-4 order-0">
            <div class="card">
              <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                  <div class="card-body">
                    <h5 class="card-title text-primary">Selamat <?php echo $this->session->userdata('nama') ?>! 🎉</h5>
                    <p class="mb-4">
                      Kamu telah diterima sebagai siswa di <span class="fw-bold"><?= $profil[0]->nama ?></span>, lengkapi data dirimu untuk melakukan daftar ulang!
                    </p>

                    <a href="<?= base_url("siswa") ?>" class="btn btn-sm btn-outline-primary">Isi data diri</a>
                  </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                  <div class="card-body pb-0 px-0 px-md-4">
                    <img src="././assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" />
                  </div>
                </div>
              </div>
            </div>
          </div> <?php } else if ($tp->status_verifikasi == 1) { ?>
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

                    <a href="<?= base_url("siswa/unduhan") ?>" class="btn btn-sm btn-info">Cetak disini</a>
                  </div>
                </div>
              </div>
            </div>
          </div> <?php } else { ?>
          <!-- step3 -->
          <div class="col-lg-8 mb-4 order-0">
            <div class="card">
              <div class="d-flex align-items-end row">
                <div class="col-8">
                  <div class="card-body">
                    <h6 class="card-title mb-3 text-nowrap">Terima kasih!✨</h6>
                    <h5 class="card-title text-primary mb-1"><?php echo $this->session->userdata('nama') ?></h5>
                    <small class="d-block">Anda telah daftar ulang sebagai siswa di <?= $profil[0]->nama ?></small>
                    <small class="d-block mb-3 text-muted">pada tanggal <?= $tp->tgl_verif ?></small>
                    <a href="<?= 'https://instagram.com/' . $profil[0]->instagram ?>" target="_blank" class="btn btn-sm btn-primary"><i class='bx bxl-instagram'></i> Follow Instagram @<?= $profil[0]->instagram ?></a>
                  </div>
                </div>
                <div class="col-4 pt-3 ps-0">
                  <img src="././assets/img/illustrations/prize-light.png" width="90" height="140" class="rounded-start" alt="View Sales">
                </div>
              </div>
            </div>
          </div>
          <!-- /step3 --> <?php }
                      } ?>
      <!-- pengumuman -->
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
      <div class="col-lg-8 order-2 mb-4">
        <div class="card review-card">
          <div class="card-header bg-primary bg-gradient text-white">
            <h5 class="mb-0 text-white fw-semibold">Beri Masukanmu</h5>
          </div>
          <div class="card-body p-4">
            <?php if ($review): ?>
              <div class="mb-4">

                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <h5 class="fw-bold mb-2">Penilaian</h5>
                    <div class="d-flex align-items-center gap-2 mb-1">
                      <h2 class="mb-0 me-2"><?php $rating = floatval($review['rating']);
                                        echo $rating ?></h2>
                      <div class="ratings">
                        <?php
                        $fullStars = floor($rating);
                        $halfStar = $rating - $fullStars >= 0.5;
                        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

                        for ($i = 0; $i < $fullStars; $i++) {
                          echo '<i class="icon-base icon-lg bx bxs-star me-1"></i>';
                        }
                        if ($halfStar) {
                          echo '<i class="icon-base icon-lg bx bxs-star-half me-1"></i>';
                        }
                        for ($i = 0; $i < $emptyStars; $i++) {
                          echo '<i class="icon-base icon-lg bx bx-star me-1"></i>';
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="review-meta">
                    <span class="d-block text-end"><i class="bx bx-calendar3 me-1"></i><?= date('d F Y', strtotime($review['tanggal'])) ?></span>
                    <span class="d-block text-end"><i class="bx bx-clock me-1"></i><?= date('H:i', strtotime($review['tanggal'])) ?></span>
                  </div>
                </div>
              </div>

              <div class="mb-4">
                <h5 class="fw-bold mb-3">Ulasan</h5>
                <div class="review-text">
                  <?= nl2br(htmlspecialchars($review['review_text'])) ?>
                </div>
              </div>

              <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                <a href="<?= base_url('aksi/hapus_review') ?>" class="btn btn-sm btn-outline-secondary flex-grow-1">
                  <i class="bx bx-pencil-square me-2"></i>Hapus
                </a>
                <a href="<?= base_url('aksi/review_form') ?>" class="btn btn-sm btn-outline-primary flex-grow-1">
                  <i class="bx bx-pencil-square me-2"></i>Ulasan Baru
                </a>
              </div>
            <?php else: ?>
              <!-- buat review -->
              <?php $flashDataErr = $this->session->flashdata('error');
              $flashDataSucc = $this->session->flashdata('success');
              if ($flashDataErr) :
                $message = $flashDataErr;
                $color = 'danger';
              elseif ($flashDataSucc) :
                $message = $flashDataSucc;
                $color = 'success';
              endif;

              if ($flashDataErr || $flashDataSucc) : ?>
                <div class="alert alert-<?= $color ?> alert-dismissible fade show" role="alert">
                  <i class="bx bx-exclamation-triangle-fill me-2"></i>
                  <?= $message ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>

              <?= form_open('aksi/simpan_review', ['class' => 'needs-validation', 'novalidate' => '']) ?>

              <div class="rating-container">

                <div id="star-rating" class="d-flex justify-content-center gap-1 fs-2">
                  <?php for ($i = 1; $i <= 5; $i++): ?>
                    <i class="bx bx-star star bx-lg" data-index="<?= $i ?>"></i>
                  <?php endfor; ?>
                </div>

                <input type="hidden" name="rating" id="rating-value-input" value="0" required>

                <div class="rating-text mt-2">
                  <span id="rating-text-display">Pilih Rating</span>
                </div>

                <?= form_error('rating', '<div class="invalid-feedback d-block text-center mt-2">', '</div>') ?>
              </div>

              <div class="mb-4 mt-4">
                <label for="review_text" class="form-label fw-semibold">Ulasan Anda</label>
                <textarea class="form-control review-textarea" id="review_text" name="review_text" rows="4" placeholder="Bagikan pengalaman dan saran Anda..." required><?= set_value('review_text') ?></textarea>
                <?= form_error('review_text', '<div class="invalid-feedback d-block">', '</div>') ?>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-primary">
                  <i class="bx bx-send-fill me-2"></i>Kirim Review
                </button>
              </div>
              <?= form_close() ?>
            <?php endif; ?>
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
            </ul>
          </div>
        </div>
      </div>

    </div>
    <!-- / Content -->
    <script type="text/javascript">
      document.title = "Dashboard Siswa - <?= $this->session->userdata("nama") ?>";
      document.getElementById("dashboard").classList.add("active");
      document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('#star-rating .star');
        const ratingInput = document.getElementById('rating-value-input');
        const ratingTextDisplay = document.getElementById('rating-text-display');

        const ratingTexts = {
          '0.5': 'Sangat Buruk',
          '1': 'Buruk',
          '1.5': 'Kurang',
          '2': 'Kurang +',
          '2.5': 'Cukup',
          '3': 'Cukup +',
          '3.5': 'Baik',
          '4': 'Baik +',
          '4.5': 'Sangat Baik',
          '5': 'Sempurna'
        };

        function updateStars(rating) {
          stars.forEach((star, index) => {
            let i = index + 1;
            star.classList.remove('bxs-star', 'bxs-star-half', 'bx-star');

            if (rating >= i) {
              star.classList.add('bxs-star');
            } else if (rating >= i - 0.5) {
              star.classList.add('bxs-star-half');
            } else {
              star.classList.add('bx-star');
            }
          });
        }

        stars.forEach(star => {
          star.addEventListener('mousemove', (e) => {
            const rect = star.getBoundingClientRect();
            const offsetX = e.clientX - rect.left;
            const isHalf = offsetX < rect.width / 2;
            const index = parseInt(star.getAttribute('data-index'));
            const hoverRating = isHalf ? index - 0.5 : index;
            updateStars(hoverRating);
          });

          star.addEventListener('mouseleave', () => {
            updateStars(parseFloat(ratingInput.value));
          });

          star.addEventListener('click', (e) => {
            const rect = star.getBoundingClientRect();
            const offsetX = e.clientX - rect.left;
            const isHalf = offsetX < rect.width / 2;
            const index = parseInt(star.getAttribute('data-index'));
            const selectedRating = isHalf ? index - 0.5 : index;

            ratingInput.value = selectedRating;
            ratingTextDisplay.textContent = ratingTexts[selectedRating.toString()] || `Rating: ${selectedRating}`;
            updateStars(selectedRating);
          });
        });
        updateStars(0);
      });
    </script>