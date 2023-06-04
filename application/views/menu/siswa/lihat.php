<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="d-flex justify-content-between">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang/</span> Data diri</h4> 
                <div class="flex-column my-auto">
                <a href="<?= base_url("siswa")?>" class="btn btn-outline-primary">
                <i class="bx bx-edit me-sm-1"></i> <span class="d-none d-sm-inline-block" >Edit</span>
                </a>
                </div>
              </div>
              <?php if ($this->session->flashdata('alert') == !""){ 
                $data = $this->session->flashdata('alert');
                  echo '<div class="alert alert-'.$data['tipe'].' alert-dismissible" role="alert">'.$data['isi'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
                };
                // echo var_dump($this->session->userdata());?>
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Biodata Siswa</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nisn">NISN</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nisn" name="nisn" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nik">NIK</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nik" name="nik" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nama-lengkap">Nama lengkap</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nama-panggilan">Nama panggilan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama-panggilan" name="nama-panggilan" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="jk">Jenis Kelamin</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jk" name="jk" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="tempat-lahir">Tempat lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tempat-lahir" name="tempat-lahir" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="prov-lahir">Provinsi lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="prov-lahir" name="prov-lahir" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="tanggal-lahir">tanggal lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tanggal-lahir" name="tgl-lahir" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="agama">agama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="agama" name="agama" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="kw">kewarganegaraan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kw" name="kw" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="anak-ke">Anak ke</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="anak-ke" name="anak-ke" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="jml-kd">Jumlah saudara kandung</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jml-kd" name="jml-kd" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="jml-tr">Jumlah saudara tiri</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jml-tr" name="jml-tr" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="jml-ak">jumlah saudara angkat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jml-ak" name="jml-ak" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="stat-anak">Status anak</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="stat-anak" name="stat-anak" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="notelp">No. Telepon / HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="notelp" name="notelp" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="goldar">golongan darah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="goldar" name="goldar" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="tb">Tinggi badan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tb" name="tb" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="bb">Berat badan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="bb" name="bb" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="hobi">Kegemaran / hobi</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="hobi" name="hobi" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="tinggal">tinggal dengan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tinggal" name="tinggal" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
                          <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl">
                  <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Peserta Didik</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="no-pend">No. Pendaftaran</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="no-pend" name="no-pend" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="no-urut">No. urut diterima</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="no-urut" name="no-urut" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="asal">asal sekolah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="asal" name="asal" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="tgl-no-ijazah">Tanggal dan No. Ijazah SMP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tgl-no-ijazah" name="tgl-no-ijazah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="tgl-no-skl">Tanggal dan No. SKL</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tgl-no-skl" name="tgl-no-skl" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="lama">lama belajar</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="lama" name="lama" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nopeserta-un">No. Peserta UNAS/UNBK</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nopeserta-un" name="nopeserta-un" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="no-skhu">No. SKHUN</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="no-skhu" name="no-skhu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="masuk-kelas">Diterima di kelas</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="masuk-kelas" name="masuk-kelas" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="masuk-jalur">Diterima lewat jalur</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="masuk-jalur" name="masuk-jalur" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="masuk-tgl">diterima tanggal</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="masuk-tgl" name="masuk-tgl" />
                          </div>
                        </div>
                    </div>
                  </div>
                    <div class="card mb-4">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Jika Pindahan</h5>
                      </div>
                      <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pindahan-asal">Pindahan Dari sekolah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pindahan-asal" name="pindahan-asal" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pindahan-alasan">Alasan pindah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pindahan-alasan" name="pindahan-alasan" />
                          </div>
                        </div>

                      </div>
                    </div>
                  <!-- bawah -->
                    <div class="card mb-4">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Data Tambahan</h5>
                      </div>
                      <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="jarak">Jarak tempat tinggal ke sekolah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jarak" name="jarak" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="penyakit">Penyakit yang pernah diderita</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="penyakit" name="penyakit" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="kelainan">kelainan jasmani</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kelainan" name="kelainan" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="bahasa">Bahasa sehari-hari</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="bahasa" name="bahasa" />
                          </div>
                        </div>

                    </div>
                </div>
              </div>
              <div class="row">
                <!-- data ayah -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Ayah</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nama-ayah">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama-ayah" name="nama-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="ttl-ayah">tempat, tanggal lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="ttl-ayah" name="ttl-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="agama-ayah">agama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="agama-ayah" name="agama-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="kw-ayah">Kewarganegaraan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kw-ayah" name="kw-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pdd-ayah">Pendidikan terakhir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pdd-ayah" name="pdd-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pk-ayah">Pekerjaan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pk-ayah" name="pk-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="ph-ayah">Penghasilan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="ph-ayah" name="ph-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="notelp-ayah">nomor telepon / HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="notelp-ayah" name="notelp-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="stat-ayah">Status</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="stat-ayah" name="stat-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="alamat-ortu">Alamat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat-ortu" name="alamat-ortu" />
                          </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- data ibu -->
              <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Ibu</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nama-ibu">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama-ibu" name="nama-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="ttl-ibu">tempat, tanggal lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="ttl-ibu" name="ttl-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="agama-ibu">agama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="agama-ibu" name="agama-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="kw-ibu">Kewarganegaraan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kw-ibu" name="kw-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pdd-ibu">Pendidikan terakhir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pdd-ibu" name="pdd-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pk-ibu">Pekerjaan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pk-ibu" name="pk-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="ph-ibu">Penghasilan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="ph-ibu" name="ph-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="notelp-ibu">nomor telepon / HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="notelp-ibu" name="notelp-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="stat-ibu">Status</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="stat-ibu" name="stat-ibu" />
                          </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- data wali -->
              <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Wali</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nama-wali">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama-wali" name="nama-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="ttl-wali">tempat, tanggal lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="ttl-wali" name="ttl-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="agama-wali">agama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="agama-wali" name="agama-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="kw-wali">Kewarganegaraan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kw-wali" name="kw-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pdd-wali">Pendidikan terakhir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pdd-wali" name="pdd-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pk-wali">Pekerjaan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pk-wali" name="pk-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="ph-wali">Penghasilan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="ph-wali" name="ph-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="notelp-wali">nomor telepon / HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="notelp-wali" name="notelp-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="alamat-wali">Alamat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat-wali" name="alamat-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="hub-wali">Hubungan keluarga dengan wali</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="hub-wali" name="hub-wali" />
                          </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- end of data wali -->
            </div>
            <div class="row">
              <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data </h5>
                    </div>
                    <div class="card-body">
                        <div class="col-6">
                          <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="kks">No. KKS</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kks" name="kks" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="pkh">No. PKH</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pkh" name="pkh" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="kip">No. KIP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kip" name="kip" />
                          </div>
                        </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            <!-- / Content -->
            <!-- upload -->
            <div class="content-header mb-1">
              <h6 class="mb-0">Upload Berkas</h6>
              <small>Mohon cek sekali lagi</small>
            </div>
            <?php $id = str_replace(' ','-',$this->session->userdata('id'));
            $data = $this->db->query("SELECT kk,akta,ijazah,bukti FROM siswa WHERE id_siswa = $id")->result();
                            foreach ($data as $tp) { ?>
            <div class="row">
              <div class="col-sm-3">
                <div class="card mt-2">
                  <p class="text-center m-auto">KK</p>
                  <img class="img-fluid" src="../file/uploads/<?= str_replace(' ','-',$this->session->userdata('no_pendaftaran')).'/'.$tp->kk ?>">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card mt-2">
                <p class="text-center m-auto">Akta Kelahiran</p>
                  <img class="img-fluid" src="../file/uploads/<?= str_replace(' ','-',$this->session->userdata('no_pendaftaran')).'/'.$tp->akta ?>">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card mt-2">
                <p class="text-center m-auto">Ijazah SMP</p>
                  <img class="img-fluid" src="../file/uploads/<?= str_replace(' ','-',$this->session->userdata('no_pendaftaran')).'/'.$tp->ijazah ?>">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card mt-2">
                <p class="text-center m-auto">Bukti diterima</p>
                  <img class="img-fluid" src="../file/uploads/<?= str_replace(' ','-',$this->session->userdata('no_pendaftaran')).'/'.$tp->bukti ?>">
                </div>
              </div>
            </div>         
            <?php } ?>   
              <!-- /upload  -->
            <script type="text/javascript"> 
              document.title = "Biodata <?= $this->session->userdata('nama')?>";
              document.getElementById("menu1").classList.add("active","open");
              document.getElementById("m1-1").classList.add("active");
              const imgs = document.getElementsByTagName('img');
              for (let img of imgs){
                img.addEventListener('error', function handleError() {
                  img.src = '../assets/img/default.webp';
                });
              };
              setTimeout(()=> {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 &&
                    this.status == 200) {
                    var myObj = JSON.parse(this.responseText);
                    $.each(myObj, function(i) {
                        document.getElementById("nama-lengkap").value = myObj.data[0].nama_lengkap;
                        document.getElementById("nama-panggilan").value = myObj.data[0].nama_panggilan;
                        document.getElementById("nisn").value = myObj.data[0].nisn;
                        document.getElementById("nik").value = myObj.data[0].nik;
                        document.getElementById("jk").value = myObj.data[0].jk;
                        document.getElementById("tempat-lahir").value = myObj.data[0].tempat_lahir;
                        document.getElementById("prov-lahir").value = myObj.data[0].prov_lahir;
                        document.getElementById("tanggal-lahir").value = myObj.data[0].tgl_lahir;
                        document.getElementById("agama").value = myObj.data[0].agama;
                        document.getElementById("kw").value = myObj.data[0].kw;
                        document.getElementById("anak-ke").value = myObj.data[0].anak_ke;
                        document.getElementById("stat-anak").value = myObj.data[0].status_anak;
                        document.getElementById("alamat").value = "Jl. "+myObj.data[0].jalan+" RT "+myObj.data[0].rt+" RW "+myObj.data[0].rw+" Desa "+myObj.data[0].desa+" Kec. "+myObj.data[0].kec+" Kab/Kota "+myObj.data[0].kab+" Prov. "+myObj.data[0].prov;
                        document.getElementById("notelp").value = myObj.data[0].notelp;
                        document.getElementById("goldar").value = myObj.data[0].goldar;
                        document.getElementById("tb").value = myObj.data[0].tinggi_badan+" cm";
                        document.getElementById("bb").value = myObj.data[0].berat_badan+" Kg";
                        document.getElementById("hobi").value = myObj.data[0].hobi_kes;
                        document.getElementById("tinggal").value = myObj.data[0].tinggal;
                        document.getElementById("nama-ayah").value = myObj.data[0].nama_ayah;
                        document.getElementById("ttl-ayah").value = myObj.data[0].ttl_ayah;
                        document.getElementById("agama-ayah").value = myObj.data[0].agama_ayah;
                        document.getElementById("kw-ayah").value = myObj.data[0].kw_ayah;
                        document.getElementById("pdd-ayah").value = myObj.data[0].pdd_ayah;
                        document.getElementById("pk-ayah").value = myObj.data[0].pk_ayah;
                        document.getElementById("ph-ayah").value = myObj.data[0].ph_ayah;
                        document.getElementById("notelp-ayah").value = myObj.data[0].notelp_ayah;
                        document.getElementById("stat-ayah").value = myObj.data[0].status_ayah;
                        document.getElementById("alamat-ortu").value = myObj.data[0].alamat_ortu;
                        document.getElementById("nama-ibu").value = myObj.data[0].nama_ibu;
                        document.getElementById("ttl-ibu").value = myObj.data[0].ttl_ibu;
                        document.getElementById("agama-ibu").value = myObj.data[0].agama_ibu;
                        document.getElementById("kw-ibu").value = myObj.data[0].kw_ibu;
                        document.getElementById("pdd-ibu").value = myObj.data[0].pdd_ibu;
                        document.getElementById("pk-ibu").value = myObj.data[0].pk_ibu;
                        document.getElementById("ph-ibu").value = myObj.data[0].ph_ibu;
                        document.getElementById("notelp-ibu").value = myObj.data[0].notelp_ibu;
                        document.getElementById("stat-ibu").value = myObj.data[0].status_ibu;
                        document.getElementById("nama-wali").value = myObj.data[0].nama_wali;
                        document.getElementById("ttl-wali").value = myObj.data[0].ttl_wali;
                        document.getElementById("agama-wali").value = myObj.data[0].agama_wali;
                        document.getElementById("kw-wali").value = myObj.data[0].kw_wali;
                        document.getElementById("pdd-wali").value = myObj.data[0].pdd_wali;
                        document.getElementById("pk-wali").value = myObj.data[0].pk_wali;
                        document.getElementById("ph-wali").value = myObj.data[0].ph_wali;
                        document.getElementById("notelp-wali").value = myObj.data[0].notelp_wali;
                        document.getElementById("hub-wali").value = myObj.data[0].hub_wali;
                        document.getElementById("alamat-wali").value = myObj.data[0].alamat_wali;
                        document.getElementById("no-pend").value = myObj.data[0].no_pendaftaran;
                        document.getElementById("no-urut").value = myObj.data[0].no_urut;
                        document.getElementById("asal").value = myObj.data[0].asal;
                        document.getElementById("tgl-no-ijazah").value = myObj.data[0].tgl_no_ijazah;
                        document.getElementById("tgl-no-skl").value = myObj.data[0].tgl_no_skl;
                        document.getElementById("lama").value = myObj.data[0].lama_belajar;
                        document.getElementById("nopeserta-un").value = myObj.data[0].nopeserta_un;
                        document.getElementById("no-skhu").value = myObj.data[0].no_skhu;
                        document.getElementById("masuk-kelas").value = myObj.data[0].masuk_kelas;
                        document.getElementById("masuk-jalur").value = myObj.data[0].masuk_jalur;
                        document.getElementById("masuk-tgl").value = myObj.data[0].masuk_tgl;
                        document.getElementById("pindahan-asal").value = myObj.data[0].pindahan_asal;
                        document.getElementById("pindahan-alasan").value = myObj.data[0].pindahan_alasan;
                        document.getElementById("jml-kd").value = myObj.data[0].jml_saudara_kd;
                        document.getElementById("jml-tr").value = myObj.data[0].jml_saudara_tr;
                        document.getElementById("jml-ak").value = myObj.data[0].jml_saudara_ak;
                        document.getElementById("jarak").value = myObj.data[0].jarak;
                        document.getElementById("penyakit").value = myObj.data[0].penyakit;
                        document.getElementById("kelainan").value = myObj.data[0].kelainan;
                        document.getElementById("bahasa").value = myObj.data[0].bahasa;
                        document.getElementById("kks").value = myObj.data[0].no_kks;
                        document.getElementById("pkh").value = myObj.data[0].no_pkh;
                        document.getElementById("kip").value = myObj.data[0].no_kip;
                      });

                }
            };

            xmlhttp.open("GET", appPath+"aksi/datasendiri", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send();
            },1000);
            for (let isian of document.getElementsByTagName("input")) {
            isian.readOnly = true
            };
            </script>