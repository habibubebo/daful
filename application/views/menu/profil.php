<style>
  .avatar-container {
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    background: white;
  }

  .avatar-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 12px;
  }

  .avatar-label {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 6px 12px;
    color: white;
    font-weight: 600;
    font-size: 1rem;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
    border-bottom-left-radius: 12px;
    z-index: 5;
    user-select: none;
    text-align: left;
  }

  .upload-icon {
    position: absolute;
    bottom: 8px;
    right: 8px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    cursor: pointer;
    box-shadow: var(--bs-primary);
    transition: background-color 0.3s ease, color 0.3s ease;
    z-index: 6;
    border: none;
  }

  .upload-icon:hover {
    background-color: var(--bs-primary);
    color: white;
  }

  @media (max-width: 400px) {
    .avatar-container {
      width: 120px;
      height: 120px;
    }

    .upload-icon {
      width: 30px;
      height: 30px;
    }
  }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pengaturan /</span> Profil</h4>

    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-buildings me-1"></i> Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("admin/akun") ?>"><i class="bx bx-user me-1"></i> Akun</a>
          </li>
        </ul>
        <?php if ($this->session->flashdata('alert') == !"") {
          $data = $this->session->flashdata('alert');
          echo '<div class="alert alert-' . $data['tipe'] . ' alert-dismissible" role="alert">' . $data['isi'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        };
        // echo var_dump($this->session->userdata());
        ?>
        <?php foreach ($profil as $tp) { ?>
          <div class="card mb-4">
            <h5 class="card-header">Identitas</h5>
            <!-- Account -->
            <div class="card-body">
              <div class="d-flex align-items-start align-items-sm-center gap-4">
                <div class="container d-flex justify-content-start align-items-center flex-row gap-4">
                  <!-- Icon Upload -->
                  <div class="avatar-container" id="iconContainer">
                    <img id="iconImage" src="<?= base_url("assets/img/favicon/") ?><?= $tp->icon ?>" alt="Icon" height="100">
                    <div class="upload-icon btn btn-sm btn-info" id="uploadIconIcon" title="Upload Icon"><span class="icon-base bx bx-pencil"></span></div>
                    <div class="reset-icon btn btn-sm btn-info" id="resetIconIcon" title="Reset Icon"><span class="icon-base bx bx-reset"></span></div>
                    <div class="avatar-label">Icon</div>
                    <input type="file" id="iconInput" accept="image/x-icon, image/x-ico, image/vnd.microsoft.icon" hidden>
                  </div>

                  <!-- Logo Upload -->
                  <div class="avatar-container" id="logoContainer">
                    <img id="logoImage" src="<?= base_url("assets/img/logo/") ?><?= $tp->avatar ?>" alt="Logo" height="100">
                    <div class="upload-icon btn btn-sm btn-info" id="uploadLogoIcon" title="Upload Logo"><span class="icon-base bx bx-pencil"></span></div>
                    <div class="reset-icon btn btn-sm btn-info" id="resetLogoIcon" title="Reset Logo"><span class="icon-base bx bx-reset"></span></div>
                    <div class="avatar-label">Logo</div>
                    <input type="file" id="logoInput" accept="image/png, image/jpeg, image/webp" hidden>
                  </div>

                  <!-- Banner Upload -->
                  <div class="avatar-container" id="bannerContainer">
                    <img id="bannerImage" src="<?= base_url("assets/img/banner/") ?><?= $tp->banner ?>" alt="Banner" height="100">
                    <div class="upload-icon btn btn-sm btn-info" id="uploadBannerIcon" title="Upload Banner"><span class="icon-base bx bx-pencil"></span></div>
                    <div class="reset-icon btn btn-sm btn-info" id="resetBannerIcon" title="Reset Banner"><span class="icon-base bx bx-reset"></span></div>
                    <div class="avatar-label">Banner</div>
                    <input type="file" id="bannerInput" accept="image/png, image/jpeg, image/webp" hidden>
                  </div>

                  <!-- Background Upload -->
                  <div class="avatar-container" id="backgroundContainer">
                    <img id="backgroundImage" src="<?= base_url("assets/img/background/") ?><?= $tp->background ?>" alt="Background" height="100">
                    <div class="upload-icon btn btn-sm btn-info" id="uploadBackgroundIcon" title="Upload Background"><span class="icon-base bx bx-pencil"></span></div>
                    <div class="reset-icon btn btn-sm btn-info" id="resetBackgroundIcon" title="Reset Background"><span class="icon-base bx bx-reset"></span></div>
                    <div class="avatar-label">Background</div>
                    <input type="file" id="backgroundInput" accept="image/png, image/jpeg, image/webp" hidden>
                  </div>
                </div>

                <script>
                  // Function to handle file upload
                  function handleFileUpload(inputId, imageId, resetIconId, uploadIconId, uploadUrl, description) {
                    // Event listener for upload icon
                    document.getElementById(uploadIconId).addEventListener('click', function() {
                      document.getElementById(inputId).click();
                    });

                    // Event listener for file input change
                    document.getElementById(inputId).addEventListener('change', function(event) {
                      const file = event.target.files[0];
                      if (file) {
                        const formData = new FormData();
                        formData.append('file', file);
                        formData.append('description', description);

                        // Validasi file sebelum mengupload
                        if (file.size > 2048 * 1024) { // 2MB
                          alert('File size exceeds the maximum limit of 2MB.');
                          return;
                        }

                        // Upload ke server menggunakan AJAX
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', uploadUrl, true);
                        xhr.onload = function() {
                          if (xhr.status === 200) {
                            const response = JSON.parse(xhr.responseText);
                            if (response.status === 'success') {
                              const imgUrl = URL.createObjectURL(file);
                              document.getElementById(imageId).src = imgUrl;
                            } else {
                              alert(response.message);
                            }
                          } else {
                            alert('Upload failed. Please try again.');
                          }
                        };
                        xhr.send(formData);
                      } else {
                        alert('Please select a file to upload.');
                      }
                    });

                    document.getElementById(resetIconId).addEventListener('click', function() {
                      document.getElementById(imageId).src = '<?= base_url("assets/img/") ?>' + (description === 'logo' ? '<?= $tp->avatar ?>' : '<?= $tp->banner ?>');
                      document.getElementById(inputId).value = ''; // Reset input file
                    });
                  }

                  handleFileUpload('iconInput', 'iconImage', 'resetIconIcon', 'uploadIconIcon', '<?= base_url('aksi/upload') ?>', 'favicon');
                  handleFileUpload('logoInput', 'logoImage', 'resetLogoIcon', 'uploadLogoIcon', '<?= base_url('aksi/upload') ?>', 'logo');
                  handleFileUpload('bannerInput', 'bannerImage', 'resetBannerIcon', 'uploadBannerIcon', '<?= base_url('aksi/upload') ?>', 'banner');
                  handleFileUpload('backgroundInput', 'backgroundImage', 'resetBackgroundIcon', 'uploadBackgroundIcon', '<?= base_url('aksi/upload') ?>', 'background');
                </script>

              </div>

            </div>
            <hr class="my-0" />
            <div class="card-body">
              <form id="formAccountSettings" action="<?= base_url("admin/profil/update") ?>" method="POST">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label for="depan" class="form-label">Tampilan depan dan Warna Primer</label>
                    <div class="input-group">
                      <select class="form-select" name="depan" id="depan">
                        <option value="1" <?= $tp->depan == 1 ? 'selected' : '' ?>>Tampilan 1</option>
                        <option value="2" <?= $tp->depan == 2 ? 'selected' : '' ?>>Tampilan 2</option>
                      </select>
                      <input class="form-control form-control-color" type="color" id="warna" name="warna" value="<?= $tp->warna ?>" />
                    </div>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input class="form-control" type="text" id="nama" name="nama" autofocus value="<?= $tp->nama ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat" id="alamat" value="<?= $tp->alamat ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="<?= $tp->email ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="website" class="form-label">Website</label>
                    <input class="form-control" type="text" name="website" id="website" value="<?= $tp->website ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input class="form-control" type="text" name="telepon" id="telepon" value="<?= $tp->telepon ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="th-ajaran" class="form-label">Tahun Ajaran</label>
                    <input class="form-control" type="text" name="th-ajaran" id="th-ajaran" value="<?= $tp->th_ajaran ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="motto" class="form-label">Motto</label>
                    <input class="form-control" type="text" name="motto" id="motto" value="<?= $tp->motto ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="panitia" class="form-label">Link Kontak Panitia</label>
                    <input class="form-control" type="text" name="panitia" id="panitia" value="<?= $tp->panitia ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="instagram" class="form-label">Akun instagram</label>
                    <div class="input-group mt-1">
                      <span class="input-group-text">https://instagram.com/</span>
                      <input class="form-control" type="text" name="instagram" id="instagram" value="<?= $tp->instagram ?>" />
                    </div>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="icon" class="form-label" title="baca petunjuk">Nama file icon manual<span class="bx bx-info-circle text-info"></span></label>
                    <input class="form-control" type="text" name="icon" id="icon" value="<?= $tp->icon ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="avatar" class="form-label" title="baca petunjuk">Nama file logo manual<span class="bx bx-info-circle text-info"></span></label>
                    <input class="form-control" type="text" name="avatar" id="avatar" value="<?= $tp->avatar ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="banner" class="form-label" title="baca petunjuk">Nama file banner manual<span class="bx bx-info-circle text-info"></span></label>
                    <input class="form-control" type="text" name="banner" id="banner" value="<?= $tp->banner ?>" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="background" class="form-label" title="baca petunjuk">Nama file background manual
                      <span class="bx bx-info-circle text-info"></span>
                    </label>
                    <input class="form-control" type="text" name="background" id="background" value="<?= $tp->background ?>" />
                  </div>
                </div>
                <button type="button" class="btn text-nowrap" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="right" data-bs-html="true" data-bs-content="<p>copy file di folder<br>icon: 'assets/img/favicon/'<br>logo: 'assets/img/logo/'<br>banner: 'assets/img/banner/'<br>bg: 'assets/img/illustrations/'<br>dan input namanya manual</p>" data-bs-original-title="<i class='icon-base bx bx-bell icon-md'></i> Cara Manual">
                  <span class="bx bx-info-circle text-info"></span> Petunjuk
                </button>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2" accesskey="s">Simpan Perubahan</button>
                </div>
              </form>
            </div>
            <!-- /Account -->
          </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
<?php } ?>
<script type="text/javascript">
  document.title = "Pengaturan Profil";
  document.getElementById("pengaturan").classList.add("active", "open");
  document.getElementById("p-profil").classList.add("active");
  [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e) {
    return new bootstrap.Popover(e, {
      html: !0,
      sanitize: !1,
      trigger: 'focus'
    })
  });
</script>
<!-- <script src="<?= base_url() ?>assets/js/pages-account-settings-account.js"></script> -->