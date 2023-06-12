<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang /</span> Data Siswa</h4>
              <?php if ($this->session->flashdata('alert') == !""){ 
                $data = $this->session->flashdata('alert');
                  echo '<div class="alert alert-'.$data['tipe'].' alert-dismissible" role="alert">'.$data['isi'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
                };
                // echo var_dump($this->session->userdata());?>
              <!-- tabel responsive -->
              <div class="card mb-4">
                <div class="card-datatable table-responsive">
                  <table class="data border-top table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>No</th>
                        <th>No. Pendaftaran</th>
                        <th>NISN</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Nama Panggilan</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Prov. Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Kewarganegaraan</th>
                        <th>Anak Ke</th>
                        <th>Jumlah Saudara Kandung</th>
                        <th>Jumlah Saudara Tiri</th>
                        <th>Jumlah Saudara Angkat</th>
                        <th>Status Anak</th>
                        <th>Bahasa</th>
                        <th>Hobi</th>
                        <th>Tinggal</th>
                        <th>Alamat</th>
                        <th>Jarak</th>
                        <th>No. HP</th>
                        <th>Golongan Darah</th>
                        <th>Penyakit</th>
                        <th>Kelainan</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
                        <th>Alamat Orang Tua</th>
                        <th>Nama Ayah</th>
                        <th>NIK Ayah</th>
                        <th>TTL Ayah</th>
                        <th>Agama Ayah</th>
                        <th>Kewarganegaraan Ayah</th>
                        <th>Pendidikan Ayah</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Penghasilan Ayah</th>
                        <th>No. HP Ayah</th>
                        <th>Status Ayah</th>
                        <th>Nama Ibu</th>
                        <th>NIK Ibu</th>
                        <th>TTL Ibu</th>
                        <th>Agama Ibu</th>
                        <th>Kewarganegaraan Ibu</th>
                        <th>Pendidikan Ibu</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Penghasilan Ibu</th>
                        <th>No. HP Ibu</th>
                        <th>Status Ibu</th>
                        <th>Nama Wali</th>
                        <th>NIK Wali</th>
                        <th>TTL Wali</th>
                        <th>Agama Wali</th>
                        <th>Kewarganegaraan Wali</th>
                        <th>Pendidikan Wali</th>
                        <th>Pekerjaan Wali</th>
                        <th>Penghasilan Wali</th>
                        <th>No. HP Wali</th>
                        <th>Hub. Kel. dg. Wali</th>
                        <th>Alamat Wali</th>
                        <th>Asal Sekolah</th>
                        <th>No. Urut</th>
                        <th>Tgl dan No. Ijazah</th>
                        <th>Tgl dan No. SKL</th>
                        <th>Lama Belajar</th>
                        <th>No. Peserta UN</th>
                        <th>No. SKHU</th>
                        <th>Pindahan Asal</th>
                        <th>Alasan Pindah</th>
                        <th>Masuk Kelas</th>
                        <th>Jalur Masuk</th>
                        <th>Tanggal Masuk</th>
                        <th>No KKS</th>
                        <th>No PKH</th>
                        <th>No KIP</th>
                        <th>Kartu Keluarga</th>
                        <th>Akta Kelahiran</th>
                        <th>Ijazah</th>
                        <th>Bukti Diterima</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <!-- /tabel responsive -->
              
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
            <script type="text/javascript"> document.title = "Semua Data Siswa";document.getElementById("menu1").classList.add("active","open");document.getElementById("m1-4").classList.add("active");</script>
            <script src="<?php echo base_url("assets/js/datatables-data.js") ?>"></script>
            <script src="<?php echo base_url("assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/libs/datatables-bs5/buttons.colVis.min.js") ?>"></script>