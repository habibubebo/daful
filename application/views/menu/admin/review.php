<?php
$totalRating = 0;
$fiveStarCount = 0;
$reviewCount = 0;

foreach ($reviews as $tp) {
  if (isset($tp['feedback']['rating']) && is_numeric($tp['feedback']['rating'])) {
    $rating = floatval($tp['feedback']['rating']);
    $totalRating += $rating;
    $reviewCount++;

    if ($rating == 5) {
      $fiveStarCount++;
    }
  }
}

$averageRating = $reviewCount > 0 ? $totalRating / $reviewCount : 0;
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row mb-4">
      <!-- single card  -->
      <div class="col-12">
        <div class="card">
          <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
              <div class="row gy-4 gy-sm-1">
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-center card-widget-1 border-end pb-4 pb-sm-0">
                    <div>
                      <h4 class="mb-0"><?= $akuns ?></h4>
                      <p class="mb-0">Siswa</p>
                    </div>
                    <div class="avatar me-sm-6">
                      <span class="avatar-initial rounded bg-label-secondary text-heading">
                        <i class="icon-base bx bx-user icon-26px"></i>
                      </span>
                    </div>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none me-6" />
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-center card-widget-2 border-end pb-4 pb-sm-0">
                    <div>
                      <h4 class="mb-0"><?= $reviewCount ?></h4>
                      <p class="mb-0">Review</p>
                    </div>
                    <div class="avatar me-lg-6">
                      <span class="avatar-initial rounded bg-label-secondary text-heading">
                        <i class="icon-base bx bx-file icon-26px"></i>
                      </span>
                    </div>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none" />
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-center border-end pb-4 pb-sm-0 card-widget-3">
                    <div>
                      <h4 class="mb-0"><?= $fiveStarCount ?></h4>
                      <p class="mb-0">Bintang 5</p>
                    </div>
                    <div class="avatar me-sm-6">
                      <span class="avatar-initial rounded bg-label-secondary text-warning">
                        <i class="icon-base bx bxs-star icon-26px"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h4 class="mb-0"><?= $averageRating ?></h4>
                      <p class="mb-0">Rating</p>
                    </div>
                    <div class="avatar">
                      <span class="avatar-initial rounded bg-label-secondary text-warning">
                        <i class="icon-base bx bxs-star icon-26px"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /single card  -->
    </div>
    <div class="row" data-masonry='{"percentPosition": true }'>
      <!-- <div class="row"> -->

      <?php foreach ($reviews as $tp) { ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card border border-primary text-start">
            <div class="border-bottom p-3 rounded-top">
              <div class="d-flex justify-content-between">
                <h5 class="text-primary mb-1"><?= $tp['nama_lengkap'] ?> <span class="text-<?php
                                                                                        if ($tp['verif'] == "0"):
                                                                                          echo "secondary";
                                                                                        elseif ($tp['verif'] == "1"):
                                                                                          echo "warning";
                                                                                        else:
                                                                                          echo "success";
                                                                                        endif;
                                                                                        ?>"><i class='bx bxs-badge-check'></i></span></h5>
                <div class="dropdown">
                  <button class="btn text-body-secondary p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-base bx bx-dots-vertical-rounded icon-sm"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryPerformance">
                    <a class="dropdown-item" href="<?= base_url('admin/verifikasi/lihat/') . $tp['nisn'] ?>" target="_blank">Lihat data</a>
                    <a class="dropdown-item" href="<?= wa_link($tp['notelp']) ?>">Kirim WA</a>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-between">
                <span class="small"><?= $tp['jalur'] ?></span>
                <span class="small"><?= date('d F Y', strtotime($tp['feedback']['tanggal'])) ?> - <?= date('H:i', strtotime($tp['feedback']['tanggal'])) ?></span>
              </div>
            </div>
            <figure class="text-center mb-0 p-3">
              <blockquote>
                <p><?= $tp['feedback']['review_text'] ?></p>
              </blockquote>
              <figcaption class="mb-0">
                <cite title="Source Title">
                  <div class="review-stars text-warning">
                    <?php
                    $rating = floatval($tp['feedback']['rating']);
                    $fullStars = floor($rating);
                    $halfStar = $rating - $fullStars >= 0.5;
                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

                    for ($i = 0; $i < $fullStars; $i++) {
                      echo '<i class="bx bxs-star me-1"></i>';
                    }

                    if ($halfStar) {
                      echo '<i class="bx bxs-star-half me-1"></i>';
                    }

                    for ($i = 0; $i < $emptyStars; $i++) {
                      echo '<i class="bx bx-star star-empty me-1"></i>';
                    }
                    ?>
                    <span class="badge badge-center text-bg-<?= ($rating <= 2) ? 'danger' : 'warning'; ?>"><?= $rating ?></span>
                  </div>
                </cite>
              </figcaption>
            </figure>
          </div>
        </div>
      <?php } ?>


    </div>

  </div>
  <!-- / Content -->
  <script type="text/javascript">
    document.title = "Review Siswa | <?= $this->config->item('app_name') ?>";
    document.querySelector('meta[name="description"]').setAttribute("content", "Review Siswa | <?= $this->config->item('app_name') ?>");
    document.getElementById("menu1").classList.add("active", "open");
    document.getElementById("m1-5").classList.add("active");
  </script>
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>