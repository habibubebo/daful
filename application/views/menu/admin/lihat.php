<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang /</span> Akun Siswa</h4>
              <?php if ($this->session->flashdata('alert') == !""){ 
                $data = $this->session->flashdata('alert');
                  echo '<div class="alert alert-'.$data['tipe'].' alert-dismissible" role="alert">'.$data['isi'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
                };
                // echo var_dump($this->session->userdata());?>
              <!-- tabel responsive -->
              <div class="card mb-4">
                <div class="card-datatable table-responsive">
                  <table class="datatables-projects border-top table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No. Pendaftaran</th>
                        <th>NISN</th>
                        <th class="w-px-200">Timestamp</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <!-- /tabel responsive -->
              
              <!-- Modal tambah -->
              <div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
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
                              <form action="<?php echo base_url() . 'aksi/tambahakun'; ?>" method="POST">
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
                <!-- Modal edit -->
                <div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Edit Akun Siswa</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <form action="<?php echo base_url() . 'aksi/updateakun'; ?>" method="POST">
                              <div class="modal-body">
                              <div class="row" hidden>
                                  <div class="col mb-3">
                                    <label for="id-siswa" class="form-label">Id</label>
                                    <input
                                      type="text"
                                      id="id-siswa"
                                      name="id-siswa"
                                      class="form-control"
                                      placeholder="Masukkan No. Pendaftaran"
                                    />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nopendEdit" class="form-label">No. Pendaftaran</label>
                                    <input
                                      type="text"
                                      id="nopendEdit"
                                      name="nopendEdit"
                                      class="form-control"
                                      placeholder="Masukkan No. Pendaftaran"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="nisnEdit" class="form-label">NISN</label>
                                    <input
                                      type="text"
                                      id="nisnEdit"
                                      name="nisnEdit"
                                      class="form-control"
                                      placeholder="NISN disini"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="namaEdit" class="form-label">Nama</label>
                                    <input
                                      type="text"
                                      id="namaEdit"
                                      name="namaEdit"
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
                                <button type="submit" class="btn btn-primary">Edit</button>
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
            <script>
              function get(nomor) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 &&
                    this.status == 200) {
                    var myObj = JSON.parse(this.responseText);
                    $.each(myObj, function(i) {
                        document.getElementById("id-siswa").value = myObj.data[0].id_siswa;
                        document.getElementById("nopendEdit").value = myObj.data[0].no_pendaftaran;
                        document.getElementById("nisnEdit").value = myObj.data[0].nisn;
                        document.getElementById("namaEdit").value = myObj.data[0].nama_lengkap;
                    });

                }
            };

            xmlhttp.open("GET", "<?= base_url("aksi/datasiswa/") ?>"+ nomor, true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send();
              }
            </script>

            