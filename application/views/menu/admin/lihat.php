<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang /</span> Akun Siswa</h4>
              <div class="m-2">
                    <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modalCenter">Tambah</button>
                </div>
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Pendaftaran</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><strong>1</strong></td>
                        <td>1234567890</td>
                        <td>1234567890</td>
                        <td>John Doe</td>
                        <td>
                          <div class="dropend">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->
              
              <!-- Modal tambah -->
              <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah Akun Siswa</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <form action="<?php echo base_url() . 'akun/tambah'; ?>" method="POST">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nopend" class="form-label">No. Pendaftaran</label>
                                    <input
                                      type="text"
                                      id="nopend"
                                      name="nopend"
                                      class="form-control"
                                      placeholder="Masukkan No. Pendaftaran"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input
                                      type="text"
                                      id="nisn"
                                      name="nisn"
                                      class="form-control"
                                      placeholder="NISN disini"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input
                                      type="text"
                                      id="nama"
                                      name="nama"
                                      class="form-control"
                                      placeholder="Nama Siswa"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Batal
                                </button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                <!-- end modal -->
              <hr class="my-5" />
            <script type="text/javascript"> document.title = "Daftar Akun Siswa";</script>
            <script type="text/javascript"> document.getElementById("menu1").classList.add("active","open");</script>
            <script type="text/javascript"> document.getElementById("m1-1").classList.add("active");</script>