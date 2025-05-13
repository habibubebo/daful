            <!-- Footer --><?php foreach ($profil as $tp) { ?>
              <footer class="footer bg-footer-theme">
                <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-4">
                  <div><span class="footer-brand fw-bold"><?= $tp->nama ?></span> ©<script>
                      document.write(new Date().getFullYear());
                    </script>
                  </div>
                  <div>
                    <a hidden href="<?= $tp->website ?>" class="footer-link me-6" target="_blank">Website</a>
                    <a hidden href="https://instagram.com/<?= $tp->instagram ?>" class="footer-link me-6">Instagram</a>
                  </div>
                </div>
              </footer>
            <?php } ?>
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>

            </div>
            <!-- / Layout wrapper -->
            <!-- Core JS -->
            <script>
              const spinnerContainer = document.getElementById('spinner-container');

              function showLoading() {
                spinnerContainer.style.display = 'flex';
              }

              function hideLoading() {
                spinnerContainer.style.display = 'none';
              }
              document.getElementById('start-loading').addEventListener('click', () => {
                showLoading();
              });
              document.getElementById('stop-loading').addEventListener('click', () => {
                hideLoading();
              });
              window.addEventListener('load', () => {
                document.body.classList.add('loaded');
                spinnerContainer.style.display = 'none';
              });

              function getQueryParam(param) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(param);
              }

              function goBack() {
                const backUrl = getQueryParam('from');
                if (backUrl) {
                  window.location.href = backUrl;
                } else {
                  window.close();
                }
              }
            </script>
            <!-- build:js assets/vendor/js/core.js -->
            <script src="<?= base_url("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js") ?>"></script>
            <script src="<?= base_url("assets/vendor/libs/bootstrap-select/bootstrap-select.js") ?>"></script>
            <script src="<?= base_url("assets/vendor/js/menu.js") ?>"></script>
            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src="<?= base_url("assets/vendor/libs/popper/popper.js") ?>"></script>
            <script src="<?= base_url("assets/vendor/libs/pickr/pickr.js") ?>"></script>
            <!-- Main JS -->
            <script src="<?= base_url("assets/js/main.js") ?>"></script>

            <!-- Page JS -->
            <script src="<?= base_url("assets/js/dashboards-analytics.js") ?>"></script>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            </body>

            </html>