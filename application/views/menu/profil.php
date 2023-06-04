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
                      <a class="nav-link" href="<?= base_url("admin/akun")?>"
                        ><i class="bx bx-user me-1"></i> Akun</a
                      >
                    </li>
                  </ul>
                  <?php if ($this->session->flashdata('alert') == !""){ 
                $data = $this->session->flashdata('alert');
                  echo '<div class="alert alert-'.$data['tipe'].' alert-dismissible" role="alert">'.$data['isi'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
                };
                // echo var_dump($this->session->userdata());?>
                  <?php foreach ($profil as $tp) { ?>
                  <div class="card mb-4">
                    <h5 class="card-header">Identitas</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="../<?= $tp->avatar ?>"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload baru</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">*hanya .JPG/.PNG</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" action="<?= base_url("admin/profil/update") ?>" method="POST">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" id="nama" name="nama" autofocus value="<?= $tp->nama ?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="<?= $tp->alamat ?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" name="email" id="email" value="<?= $tp->email ?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="website" class="form-label">Website</label>
                            <input class="form-control" type="text" name="website" id="website" value="<?= $tp->website ?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input class="form-control" type="text" name="telepon" id="telepon" value="<?= $tp->telepon ?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="th-ajaran" class="form-label">Tahun Ajaran</label>
                            <input class="form-control" type="text" name="th-ajaran" id="th-ajaran" value="<?= $tp->th_ajaran ?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="kepsek" class="form-label">Kepala Sekolah</label>
                            <input class="form-control" type="text" name="kepsek" id="kepsek" value="<?= $tp->kepsek ?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="nip-kepsek" class="form-label">NIP Kepala Sekolah</label>
                            <input class="form-control" type="text" name="nip-kepsek" id="nip-kepsek" value="<?= $tp->nip_kepsek ?>"/>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card" hidden>
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
            <?php } ?>
            <script type="text/javascript"> document.title = "Pengaturan Profil";document.getElementById("pengaturan").classList.add("active","open");document.getElementById("p-profil").classList.add("active");</script>