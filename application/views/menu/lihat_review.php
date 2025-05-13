<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Review</title>
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
        
        .review-stars {
            color: #ffc107;
            font-size: 1.75rem;
            line-height: 1;
        }
        
        .review-stars .star-empty {
            color: #dee2e6;
        }
        
        .rating-badge {
            font-size: 1rem;
            vertical-align: middle;
            background-color: #ffc107;
            color: #212529;
            font-weight: 600;
            border-radius: 8px;
            padding: 0.35rem 0.65rem;
        }
        
        .review-meta {
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .action-btn {
            border-radius: 10px;
            transition: all 0.3s;
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        
        .review-text {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            font-size: 1.05rem;
            line-height: 1.6;
            border-left: 4px solid #0d6efd;
        }
        
        .empty-review {
            padding: 3rem 1rem;
            text-align: center;
        }
        
        .empty-review .bi {
            font-size: 4rem;
            color: #dee2e6;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Card Title -->
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Review Anda</h2>
                    <p class="text-muted">Terima kasih atas kontribusi Anda</p>
                </div>

                <!-- Review Card -->
                <div class="card review-card">
                    <div class="card-header bg-info bg-gradient text-white">
                        <h4 class="mb-0 fw-semibold"><i class="bi bi-chat-square-quote-fill me-2"></i>Detail Review</h4>
                    </div>
                    <div class="card-body p-4">
                        <?php if ($review): ?>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h5 class="fw-bold mb-2">Penilaian Anda</h5>
                                        <div class="review-stars">
                                            <?php
                                            // Tampilkan bintang sesuai rating
                                            $rating = floatval($review['rating']);
                                            $fullStars = floor($rating);
                                            $halfStar = $rating - $fullStars >= 0.5;
                                            $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                            
                                            // Bintang penuh
                                            for ($i = 0; $i < $fullStars; $i++) {
                                                echo '<i class="bi bi-star-fill me-1"></i>'; 
                                            }
                                            
                                            // Setengah bintang jika ada
                                            if ($halfStar) {
                                                echo '<i class="bi bi-star-half me-1"></i>';
                                            }
                                            
                                            // Bintang kosong
                                            for ($i = 0; $i < $emptyStars; $i++) {
                                                echo '<i class="bi bi-star star-empty me-1"></i>';
                                            }
                                            ?>
                                            <span class="rating-badge ms-2"><?= $rating ?></span>
                                        </div>
                                    </div>
                                    <div class="review-meta">
                                        <span class="d-block text-end"><i class="bi bi-calendar3 me-1"></i><?= date('d F Y', strtotime($review['tanggal'])) ?></span>
                                        <span class="d-block text-end"><i class="bi bi-clock me-1"></i><?= date('H:i', strtotime($review['tanggal'])) ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="fw-bold mb-3">Ulasan Anda</h5>
                                <div class="review-text">
                                    <?= nl2br(htmlspecialchars($review['review_text'])) ?>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                                <a href="<?= base_url('aksi/review_form') ?>" class="btn btn-primary action-btn flex-grow-1">
                                    <i class="bi bi-pencil-square me-2"></i>Edit Review
                                </a>
                                <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-secondary action-btn flex-grow-1">
                                    <i class="bi bi-arrow-left me-2"></i>Kembali
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="empty-review">
                                <i class="bi bi-chat-square-text"></i>
                                <h4 class="mt-3 mb-2">Belum Ada Review</h4>
                                <p class="text-muted mb-4">Anda belum memberikan review untuk aplikasi ini.</p>
                                <a href="<?= base_url('aksi/review_form') ?>" class="btn btn-primary action-btn">
                                    <i class="bi bi-star me-2"></i>Buat Review Sekarang
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>