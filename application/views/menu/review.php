<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Review Aplikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .review-card {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            border: none;
        }

        .card-header {
            border-bottom: none;
            padding: 1.5rem;
        }

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

        .bi-star-fill{
            color: #ffc107;
        }
        .bi-star-half{
            color: #ffc107;
        }

        .star:hover{
            color: #ffc107;
        }


        .stars-outer {
            display: inline-block;
            position: relative;
            font-size: 2rem;
        }

        .stars-inner {
            position: absolute;
            top: 0;
            left: 0;
            white-space: nowrap;
            overflow: hidden;
            color: #ffc107;
            width: 0;
        }

        .stars-outer::before {
            content: "\F586 \F586 \F586 \F586 \F586";
            font-family: "bootstrap-icons";
            color: #dee2e6;
        }

        .stars-inner::before {
            content: "\F586 \F586 \F586 \F586 \F586";
            font-family: "bootstrap-icons";
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

        .submit-btn {
            border-radius: 10px;
            padding: 0.6rem 2rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(13, 110, 253, 0.2);
        }

        /* Styling untuk input range */
        .rating-slider {
            width: 100%;
            margin: 1rem 0;
        }

        .rating-slider input[type="range"] {
            width: 100%;
            -webkit-appearance: none;
            height: 10px;
            border-radius: 5px;
            background: #dee2e6;
            outline: none;
        }

        .rating-slider input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #0d6efd;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .rating-slider input[type="range"]::-webkit-slider-thumb:hover {
            background: #0b5ed7;
            transform: scale(1.2);
        }

        .rating-slider input[type="range"]::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #0d6efd;
            cursor: pointer;
            border: none;
            transition: all 0.2s ease;
        }

        .rating-slider input[type="range"]::-moz-range-thumb:hover {
            background: #0b5ed7;
            transform: scale(1.2);
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
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Card Title -->
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Berikan Penilaian Anda</h2>
                    <p class="text-muted">Bantu kami meningkatkan kualitas aplikasi</p>
                </div>

                <!-- Review Card -->
                <div class="card review-card">
                    <div class="card-header bg-primary bg-gradient text-white">
                        <h4 class="mb-0 fw-semibold"><i class="bi bi-star-fill me-2"></i>Form Review Aplikasi</h4>
                    </div>
                    <div class="card-body p-4">
                        <!-- Tampilkan pesan error jika ada -->
                        <?php if ($this->session->flashdata('error')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <?= $this->session->flashdata('error') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <!-- Tampilkan pesan sukses jika ada -->
                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                <?= $this->session->flashdata('success') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <!-- Form Review -->
                        <?= form_open('aksi/simpan_review', ['class' => 'needs-validation', 'novalidate' => '']) ?>

                        <div class="rating-container">
                            <label class="form-label mb-3 fw-semibold">Berikan Rating</label>

                            <div id="star-rating" class="d-flex justify-content-center gap-1 fs-2">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <i class="bi bi-star star" data-index="<?= $i ?>"></i>
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
                            <div class="form-text text-end">
                                <span id="charCount">0</span>/500 karakter
                            </div>
                            <?= form_error('review_text', '<div class="invalid-feedback d-block">', '</div>') ?>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary submit-btn">
                                <i class="bi bi-send-fill me-2"></i>Kirim Review
                            </button>
                            <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Kembali
                            </a>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>

                <div class="text-center mt-4 text-muted small">
                    <p>Terima kasih atas kontribusi Anda dalam meningkatkan kualitas aplikasi kami</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
            star.classList.remove('bi-star-fill', 'bi-star-half', 'bi-star');

            if (rating >= i) {
                star.classList.add('bi-star-fill');
            } else if (rating >= i - 0.5) {
                star.classList.add('bi-star-half');
            } else {
                star.classList.add('bi-star');
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

    // Inisialisasi tampilan
    updateStars(0);
});

    </script>
</body>

</html>