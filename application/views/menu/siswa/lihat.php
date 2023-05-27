<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Ulang/</span> Data diri</h4>
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
                          <label class="col-sm-4 col-form-label" for="basic-default-name">NISN</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="nisn" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">NIK</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="nik" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Nama lengkap</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="nama-lengkap" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Nama panggilan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="nama-panggilan" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Jenis Kelamin</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="jk" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Tempat lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="tempat-lahir" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Provinsi lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="prov-lahir" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">tanggal lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="tgl-lahir" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">agama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="agama" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">kewarganegaraan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="kw" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Anak ke</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="anak-ke" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Jumlah saudara kandung</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="jml-kd" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Jumlah saudara tiri</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="jml-tr" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">jumlah saudara angkat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="jml-ak" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Status anak</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="stat-anak" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Alamat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="alamat" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">No. Telepon / HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="notelp" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">golongan darah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="goldar" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Tinggi badan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="tb" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Berat badan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="bb" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Kegemaran / hobi</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="hobi" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">tinggal dengan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="tinggal" />
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl">
                  <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Calon Peserta Didik</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">No. Pendaftaran</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="no-pend" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">No. urut diterima</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="no-urut" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">asal sekolah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="asal" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Tanggal dan No. Ijazah SMP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="tgl-no-ijazah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Tanggal dan No. SKL</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="tgl-no-skl" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">lama belajar</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="lama" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">No. Peserta UNAS/UNBK</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="nopeserta-un" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">No. SKHUN</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="no-skhun" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Diterima di kelas</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="masuk-kelas" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Diterima lewat jalur</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="masuk-jalur" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">diterima tanggal</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="masuk-tgl" />
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
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Pindahan Dari sekolah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="pindahan-asal" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Alasan pindah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="pindahan-alasan" />
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
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Jarak tempat tinggal ke sekolah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="jarak" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Penyakit yang pernah diderita</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="penyakit" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">kelainan jasmani</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="kelainan" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Bahasa sehari-hari</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="bahasa" />
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
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="nama-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">tempat, tanggal lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="ttl-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">agama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="agama-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Kewarganegaraan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="kw-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Pendidikan terakhir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="pdd-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Pekerjaan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="pk-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Penghasilan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="ph-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">nomor telepon / HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="notelp-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Status</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="status-ayah" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Alamat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="alamat-ortu" />
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
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="nama-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">tempat, tanggal lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="ttl-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">agama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="agama-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Kewarganegaraan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="kw-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Pendidikan terakhir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="pdd-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Pekerjaan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="pk-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Penghasilan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="ph-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">nomor telepon / HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="notelp-ibu" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Status</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="status-ibu" />
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
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="nama-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">tempat, tanggal lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="ttl-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">agama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="agama-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Kewarganegaraan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="kw-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Pendidikan terakhir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="pdd-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Pekerjaan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="pk-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Penghasilan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="ph-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">nomor telepon / HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="notelp-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Alamat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="alamat-wali" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Hubungan keluarga dengan wali</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="basic-default-name" name="hub-wali" />
                          </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- end of data wali -->
            </div>
            <!-- / Content -->
            <script type="text/javascript"> document.title = "Biodata <?= $this->session->userdata('nama')?>";</script>
            <script type="text/javascript"> document.getElementById("menu1").classList.add("active","open");</script>
            <script type="text/javascript"> document.getElementById("m1-1").classList.add("active");</script>
            <!-- <script type="text/javascript"> 
            for (let isian of document.getElementsByTagName("input")) {
            isian.classList.replace("form-control","form-control-plaintext");
            }
            </script> -->