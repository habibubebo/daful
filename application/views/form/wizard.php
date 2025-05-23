<div class="container-xxl flex-grow-1 container-p-y">


  <!-- Default -->
  <div class="row">
    <div class="col-12">
      <?php if ($this->session->flashdata('alert') == !"") {
        $data = $this->session->flashdata('alert');
        echo '<div class="alert alert-' . $data['tipe'] . ' alert-dismissible" role="alert">' . $data['isi'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      }; // echo var_dump($this->session->userdata());
      ?>
      <h5>Form Data Peserta Didik</h5>
    </div>
    <!-- Validation Wizard -->
    <div class="col-12 mb-4">
      <small class="text-light fw-semibold">Harap cek kembali data anda sebelum ke langkah berikutnya, isi dengan (-) jika data kosong</small>
      <div id="wizard-validation" class="bs-stepper wizard-modern mt-2">
        <div class="flex-row bs-stepper-header">
          <div class="step" data-target="#data1">
            <button type="button" class="step-trigger p-0">
              <span class="bs-stepper-circle">1</span>
              <span class="bs-stepper-label mt-1 d-sm-block d-none">
                <span class="bs-stepper-title d-sm-block">Biodata</span>
                <span class="bs-stepper-subtitle">diri siswa</span>
              </span>
            </button>
          </div>
          <div class="line">
            <i class="bx bx-chevron-right"></i>
          </div>
          <div class="step" data-target="#data2">
            <button type="button" class="step-trigger p-0">
              <span class="bs-stepper-circle">2</span>
              <span class="bs-stepper-label mt-1 d-sm-block d-none">
                <span class="bs-stepper-title d-sm-block">Data Orang Tua</span>
                <span class="bs-stepper-subtitle">dan wali</span>
              </span>
            </button>
          </div>
          <div class="line">
            <i class="bx bx-chevron-right"></i>
          </div>
          <div class="step" data-target="#data3">
            <button type="button" class="step-trigger p-0">
              <span class="bs-stepper-circle">3</span>
              <span class="bs-stepper-label mt-1 d-sm-block d-none">
                <span class="bs-stepper-title d-sm-block">Data Peserta Didik</span>
                <span class="bs-stepper-subtitle">untuk siswa</span>
              </span>
            </button>
          </div>
          <div class="line">
            <i class="bx bx-chevron-right"></i>
          </div>
          <div class="step" data-target="#data4">
            <button type="button" class="step-trigger p-0">
              <span class="bs-stepper-circle">4</span>
              <span class="bs-stepper-label mt-1 d-sm-block d-none">
                <span class="bs-stepper-title d-sm-block">Data tambahan</span>
                <span class="bs-stepper-subtitle">untuk siswa</span>
              </span>
            </button>
          </div>
        </div>
        <div class="card bs-stepper-content">
          <form id="wizard-validation-form" onSubmit="return false" action="<?= base_url() . 'siswa/proses'; ?>" method="POST">
            <!-- Biodata -->
            <div id="data1" class="content">
              <div class="content-header mb-3">
                <h6 class="text-primary mb-0">Biodata</h6>
                <small>Isi sesuai keadaan sekarang.</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6" hidden>
                  <input type="text" name="id" id="id" class="form-control" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="nama-lengkap">Nama Lengkap</label>
                  <input type="text" name="nama-lengkap" id="nama-lengkap" class="form-control" placeholder="Nama lengkap" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="nama-panggilan">Nama Panggilan</label>
                  <input type="text" name="nama-panggilan" id="nama-panggilan" class="form-control" placeholder="Nama Panggilan" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="nisn">NISN</label>
                  <input type="number" name="nisn" id="nisn" class="form-control" placeholder="NISN" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="nik">NIK</label>
                  <input type="number" name="nik" id="nik" class="form-control" placeholder="NIK" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="jk">Jenis Kelamin</label>
                  <select id="jk" name="jk" class="selectpicker form-control" data-style="btn-default">
                    <option value="">Pilih</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="tempat-lahir">Tempat Lahir</label>
                  <input type="text" name="tempat-lahir" id="tempat-lahir" class="form-control" placeholder="Tempat Lahir" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="prov-lahir">Provinsi Lahir</label>
                  <select class="selectpicker form-control" name="prov-lahir" id="prov-lahir" data-style="btn-default" data-live-search="true">
                    <option value="">Pilih</option>
                    <option value="Aceh">Aceh</option>
                    <option value="Bali">Bali</option>
                    <option value="Banten">Banten</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                    <option value="Daerah Khusus Ibukota Jakarta">Daerah Khusus Ibukota Jakarta</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Lampung">Lampung</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                    <option value="Papua">Papua</option>
                    <option value="Papua Barat">Papua Barat</option>
                    <option value="Papua Barat Daya">Papua Barat Daya</option>
                    <option value="Papua Pegunungan">Papua Pegunungan</option>
                    <option value="Papua Selatan">Papua Selatan</option>
                    <option value="Papua Tengah">Papua Tengah</option>
                    <option value="Riau">Riau</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Sumatra Barat">Sumatra Barat</option>
                    <option value="Sumatra Selatan">Sumatra Selatan</option>
                    <option value="Sumatra Utara">Sumatra Utara</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="tanggal-lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control simple-date2" name="tanggal-lahir" id="tanggal-lahir">
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="agama">Agama</label>
                  <select class="selectpicker form-control" name="agama" id="agama" data-style="btn-default">
                    <option value="">Pilih agama yang dianut</option>
                    <?php foreach ($agamas as $ag) { ?>
                      <option value="<?= $ag->nama ?>"><?= $ag->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="kw">Kewarganegaraan</label>
                  <input type="text" name="kw" id="kw" class="form-control" placeholder="Kewarganegaraan" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="anak-ke">Anak ke</label>
                  <input type="number" name="anak-ke" id="anak-ke" class="form-control" placeholder="Anak ke" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="stat-anak">Status Anak</label>
                  <select class="selectpicker form-control" name="stat-anak" id="stat-anak" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <option value="Yatim">Yatim</option>
                    <option value="Piatu">Piatu</option>
                    <option value="Yatim Piatu">Yatim Piatu</option>
                    <option value="<s>Yatim / Piatu / Yatim Piatu</s>">Tidak Semuanya</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="notelp">No. Telepon / HP</label>
                  <input type="number" name="notelp" id="notelp" class="form-control" placeholder="No. Telepon / HP" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="goldar">Golongan Darah</label>
                  <select class="selectpicker form-control" name="goldar" id="goldar" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <option value="O">O</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="Tidak tahu">Tidak tahu</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="tinggal">Tinggal Dengan</label>
                  <select class="selectpicker form-control" name="tinggal" id="tinggal" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <option value="Orang Tua">Orang Tua</option>
                    <option value="Wali">Wali</option>
                    <option value="Saudara">Saudara</option>
                    <option value="Kos">Kos</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="tb">Tinggi Badan</label>
                  <div class="input-group mt-1">
                    <input type="number" name="tb" id="tb" class="form-control" placeholder="Tinggi Badan" />
                    <span class="input-group-text">cm</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="email">E-mail</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="email.anda@gmail.com" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="bb">Berat Badan</label>
                  <div class="input-group mt-1">
                    <input type="number" name="bb" id="bb" class="form-control" placeholder="Berat Badan" />
                    <span class="input-group-text">Kg</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="jalan">Alamat</label>
                  <div class="input-group">
                    <span class="input-group-text">Jalan</span>
                    <input type="text" class="form-control" name="jalan" id="jalan" placeholder="Merdeka No. 17">
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text">RT / RW</span>
                    <input type="number" class="form-control" name="rt" id="rt" placeholder="RT">
                    <input type="number" class="form-control" name="rw" id="rw" placeholder="RW">
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text">Desa</span>
                    <input type="text" class="form-control" name="desa" id="desa" placeholder="Desa">
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text">Kecamatan</span>
                    <input type="text" class="form-control" name="kec" id="kec" placeholder="Kecamatan">
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text">Kab/Kota</span>
                    <input type="text" class="form-control" name="kab" id="kab" placeholder="Kab. Blitar">
                  </div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="hobi-kes">Kegemaran / hobi</label>
                  <div class="input-group mt-1">
                    <span class="input-group-text">Kesenian</span>
                    <input type="text" class="form-control" name="hobi-kes" id="hobi-kes" placeholder="Kesenian" />
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text">Olahraga</span>
                    <input type="text" class="form-control" name="hobi-or" id="hobi-or" placeholder="Olahraga" />
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text">Kemasyarakatan</span>
                    <input type="text" class="form-control" name="hobi-masy" id="hobi-masy" placeholder="Ormas" />
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text">Lain-lain</span>
                    <input type="text" class="form-control" name="hobi-lain" id="hobi-lain" placeholder="Lain-lain" />
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                  </button>
                  <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Selanjutnya</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- data2 -->
            <div id="data2" class="content">
              <div class="content-header mb-3">
                <h6 class="text-primary mb-0">Data Ayah</h6>
                <small>Isi sesuai kondisi sekarang.</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="nama-ayah">Nama</label>
                  <input type="text" name="nama-ayah" id="nama-ayah" class="form-control" placeholder="Nama" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="ttl-ayah">Tempat, Tanggal lahir</label>
                  <input type="text" name="ttl-ayah" id="ttl-ayah" class="form-control" placeholder="Tempat, 17 Agustus 1945" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="agama-ayah">Agama</label>
                  <select class="selectpicker form-control" name="agama-ayah" id="agama-ayah" data-style="btn-default">
                    <option value="">Pilih agama yang dianut</option>
                    <?php foreach ($agamas as $ag) { ?>
                      <option value="<?= $ag->nama ?>"><?= $ag->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="kw-ayah">Kewarganegaraan</label>
                  <input type="text" name="kw-ayah" id="kw-ayah" class="form-control" placeholder="Kewarganegaraan" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pdd-ayah">Pendidikan Terakhir</label>
                  <select class="selectpicker form-control" name="pdd-ayah" id="pdd-ayah" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <?php foreach ($pdds as $pdd) { ?>
                      <option value="<?= $pdd->nama ?>"><?= $pdd->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pk-ayah">Pekerjaan</label>
                  <select class="selectpicker form-control" name="pk-ayah" id="pk-ayah" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <?php foreach ($pks as $pk) { ?>
                      <option value="<?= $pk->nama ?>"><?= $pk->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="ph-ayah">Penghasilan</label>
                  <select class="selectpicker form-control" name="ph-ayah" id="ph-ayah" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <?php foreach ($phs as $ph) { ?>
                      <option value="<?= $ph->nama ?>"><?= $ph->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="notelp-ayah">No. Telepon / HP</label>
                  <input type="number" name="notelp-ayah" id="notelp-ayah" class="form-control" placeholder="No. Telepon / HP" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="stat-ayah">Status Ayah</label>
                  <input type="text" name="stat-ayah" id="stat-ayah" class="form-control" placeholder="Masih hidup/sudah meninggal tahun" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="alamat-ortu">Alamat</label>
                  <div id="chk" class="form-check form-check-primary form-check-inline ms-2">
                    <input class="form-check-input" type="checkbox" name="alamatcheck" id="alamatcheck" onclick="alamat()">
                    <label class="form-check-label" for="alamatcheck">Sama dengan alamat siswa</label>
                  </div>
                  <input type="text" name="alamat-ortu" id="alamat-ortu" class="form-control" placeholder="Alamat" />
                </div>
              </div>
              <hr class="my-4 mx-n4" />
              <!-- ibu -->
              <div class="content-header mb-3">
                <h6 class="text-primary mb-0">Data Ibu</h6>
                <small>Isi sesuai kondisi sekarang.</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="nama-ibu">Nama</label>
                  <input type="text" name="nama-ibu" id="nama-ibu" class="form-control" placeholder="Nama" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="ttl-ibu">Tempat, Tanggal lahir</label>
                  <input type="text" name="ttl-ibu" id="ttl-ibu" class="form-control" placeholder="Tempat, 17 Agustus 1945" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="agama-ibu">Agama</label>
                  <select class="selectpicker form-control" name="agama-ibu" id="agama-ibu" data-style="btn-default">
                    <option value="">Pilih agama yang dianut</option>
                    <?php foreach ($agamas as $ag) { ?>
                      <option value="<?= $ag->nama ?>"><?= $ag->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="kw-ibu">Kewarganegaraan</label>
                  <input type="text" name="kw-ibu" id="kw-ibu" class="form-control" placeholder="Kewarganegaraan" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pdd-ibu">Pendidikan Terakhir</label>
                  <select class="selectpicker form-control" name="pdd-ibu" id="pdd-ibu" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <?php foreach ($pdds as $pdd) { ?>
                      <option value="<?= $pdd->nama ?>"><?= $pdd->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pk-ibu">Pekerjaan</label>
                  <select class="selectpicker form-control" name="pk-ibu" id="pk-ibu" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <?php foreach ($pks as $pk) { ?>
                      <option value="<?= $pk->nama ?>"><?= $pk->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="ph-ibu">Penghasilan</label>
                  <select class="selectpicker form-control" name="ph-ibu" id="ph-ibu" data-style="btn-default">
                    <option value="" selected>Pilih</option>
                    <?php foreach ($phs as $ph) { ?>
                      <option value="<?= $ph->nama ?>"><?= $ph->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="notelp-ibu">No. Telepon / HP</label>
                  <input type="number" name="notelp-ibu" id="notelp-ibu" class="form-control" placeholder="No. Telepon / HP" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="stat-ibu">Status Ibu</label>
                  <input type="text" name="stat-ibu" id="stat-ibu" class="form-control" placeholder="Masih hidup/sudah meninggal tahun" />
                </div>
              </div>
              <hr class="my-4 mx-n4" />
              <div class="row g-3 mb-3">
                <div class="col-sm-6">
                  <div class="form-check form-check-primary mt-3">
                    <input class="form-check-input" type="checkbox" name="walicheck" id="walicheck" onclick="wali()">
                    <label class="form-check-label" for="walicheck">Saya Memiliki Wali Selain Ayah dan Ibu</label>
                  </div>
                </div>
              </div>
              <!-- wali -->
              <div id="wali" style="display:none">
                <div class="content-header mb-3">
                  <h6 class="text-primary mb-0">Data Wali</h6>
                  <small>Isi sesuai kondisi sekarang.</small>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="nama-wali">Nama</label>
                    <input type="text" name="nama-wali" id="nama-wali" class="form-control" placeholder="Nama" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="ttl-wali">Tempat, Tanggal lahir</label>
                    <input type="text" name="ttl-wali" id="ttl-wali" class="form-control" placeholder="Tempat, 17 Agustus 1945" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="agama-wali">Agama</label>
                    <select class="selectpicker form-control" name="agama-wali" id="agama-wali" data-style="btn-default">
                      <option value="-" selected>Pilih agama yang dianut</option>
                      <?php foreach ($agamas as $ag) { ?>
                        <option value="<?= $ag->nama ?>"><?= $ag->nama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="kw-wali">Kewarganegaraan</label>
                    <input type="text" name="kw-wali" id="kw-wali" class="form-control" placeholder="Kewarganegaraan" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="pdd-wali">Pendidikan Terakhir</label>
                    <select class="selectpicker form-control" name="pdd-wali" id="pdd-wali" data-style="btn-default">
                      <option value="-" selected>Pilih</option>
                      <?php foreach ($pdds as $pdd) { ?>
                        <option value="<?= $pdd->nama ?>"><?= $pdd->nama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="pk-wali">Pekerjaan</label>
                    <select class="selectpicker form-control" name="pk-wali" id="pk-wali" data-style="btn-default">
                      <option value="-" selected>Pilih</option>
                      <?php foreach ($pks as $pk) { ?>
                        <option value="<?= $pk->nama ?>"><?= $pk->nama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="ph-wali">Penghasilan</label>
                    <select class="selectpicker form-control" name="ph-wali" id="ph-wali" data-style="btn-default">
                      <option value="-" selected>Pilih</option>
                      <?php foreach ($phs as $ph) { ?>
                        <option value="<?= $ph->nama ?>"><?= $ph->nama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="notelp-wali">No. Telepon / HP</label>
                    <input type="text" name="notelp-wali" id="notelp-wali" class="form-control" placeholder="No. Telepon / HP" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="hub-wali">Hubungan keluarga dengan wali</label>
                    <input type="text" name="hub-wali" id="hub-wali" class="form-control" placeholder="" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="jalan-wali">Alamat</label>
                    <div class="input-group">
                      <span class="input-group-text">Jalan</span>
                      <input type="text" class="form-control" name="jalan-wali" id="jalan-wali" placeholder="Jalan A No. 12">
                    </div>
                    <div class="input-group mt-1">
                      <span class="input-group-text">RT</span>
                      <input type="text" class="form-control" name="rt-wali" id="rt-wali" placeholder="RT">
                    </div>
                    <div class="input-group mt-1">
                      <span class="input-group-text">RW</span>
                      <input type="text" class="form-control" name="rw-wali" id="rw-wali" placeholder="RW">
                    </div>
                    <div class="input-group mt-1">
                      <span class="input-group-text">Desa</span>
                      <input type="text" class="form-control" name="desa-wali" id="desa-wali" placeholder="Desa">
                    </div>
                    <div class="input-group mt-1">
                      <span class="input-group-text">Kec.</span>
                      <input type="text" class="form-control" name="kec-wali" id="kec-wali" placeholder="Kecamatan">
                    </div>
                    <div class="input-group mt-1">
                      <span class="input-group-text">Kab/Kota</span>
                      <input type="text" class="form-control" name="kab-wali" id="kab-wali" placeholder="Kab Blitar">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row g-3 mt-2">
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                  </button>
                  <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Selanjutnya</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- Data3 -->
            <div id="data3" class="content">
              <div class="content-header mb-3">
                <h6 class="text-primary mb-0">Data Peserta Didik</h6>
                <small>Harap diisi dengan teliti.</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="no-pend">PIN Pendaftaran</label><br>
                  <small class="text-primary">Ingat! ini akan menjadi password baru di akun anda</small>
                  <input type="text" id="no-pend" name="no-pend" class="form-control" placeholder="PIN pendaftaran" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="no-urut">Nomor urut ketika diterima</label>
                  <input type="number" id="no-urut" name="no-urut" class="form-control" readonly placeholder="Nomor urut ketika diterima" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="asal">Asal SMP/MTs</label>
                  <input type="text" id="asal" name="asal" class="form-control" placeholder="Asal SMP/Mts" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="smp-npsn">NPSN SMP/MTs</label>
                  <small class="text-primary"><a href="https://dapo.kemdikbud.go.id/pencarian" target="_blank">dicari disini</a></small>
                  <input type="number" id="smp-npsn" name="smp-npsn" class="form-control" placeholder="npsn SMP/MTs" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="smp-no">No. Ijazah SMP/MTs</label><br>
                  <small class="text-primary">diisi dengan nomor SKL jika belum memiliki ijazah</small>
                  <input type="text" id="smp-no" name="smp-no" class="form-control" placeholder="No. Ijazah SMP/MTs" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="smp-tgl">Tanggal Ijazah SMP/MTs</label>
                  <input type="date" class="form-control simple-date2" name="smp-tgl" id="smp-tgl">
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="sd-asal">Asal SD/MI</label>
                  <input type="text" id="sd-asal" name="sd-asal" class="form-control" placeholder="Asal SD/MI" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="sd-npsn">NPSN SD/MI</label>
                  <small class="text-primary"><a href="https://dapo.kemdikbud.go.id/pencarian" target="_blank">dicari disini</a></small>
                  <input type="number" id="sd-npsn" name="sd-npsn" class="form-control" placeholder="npsn SD/MI" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="smp-no">No. Ijazah SD/MI</label>
                  <input type="text" id="sd-no" name="sd-no" class="form-control" placeholder="No. Ijazah SD/MI" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="sd-tgl">Tanggal Ijazah SD/MI</label>
                  <input type="date" class="form-control simple-date2" name="sd-tgl" id="sd-tgl">
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="no-akta">No. Akta Kelahiran</label>
                  <input type="text" id="no-akta" name="no-akta" class="form-control" placeholder="No. Akta Kelahiran" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="no-kk">No. Kartu Keluarga</label>
                  <input type="text" id="no-kk" name="no-kk" class="form-control" placeholder="No. Kartu Keluarga" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="masuk-kelas">Diterima di Kelas</label>
                  <select id="masuk-kelas" name="masuk-kelas" class="selectpicker form-control" data-style="btn-default">
                    <option value="X">X (sepuluh)</option>
                    <option value="XI">XI (sebelas)</option>
                    <option value="XII">XII (dua belas)</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="masuk-jalur">Diterima Lewat Jalur</label>
                  <input type="text" id="masuk-jalur" name="masuk-jalur" class="form-control" readonly placeholder="Diterima Lewat Jalur" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="masuk-tgl">Diterima Tanggal</label>
                  <small class="text-primary"><br>14 Juni 2024 - untuk Tahap I<br>20 Juni 2024 - untuk Tahap II (Nilai akademik)<br>29 Juni 2024 - untuk Tahap IV (Zonasi)</small>
                  <input type="date" class="form-control simple-date2" name="masuk-tgl" id="masuk-tgl">
                </div>
              </div>
              <hr class="my-4 mx-n4" />
              <!-- Jika Pindahan -->
              <div class="content-header mb-3">
                <h6 class="text-primary mb-0">Diisi Jika Pindahan</h6>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="pindahan-asal">Pindahan Dari Sekolah</label>
                  <input type="text" id="pindahan-asal" name="pindahan-asal" class="form-control" placeholder="Pindahan Dari Sekolah" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pindahan-alasan">Alasan Pindah</label>
                  <input type="text" id="pindahan-alasan" name="pindahan-alasan" class="form-control" placeholder="Alasan" />
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                  </button>
                  <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Selanjutnya</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- data4 -->
            <div id="data4" class="content">
              <div class="content-header mb-3">
                <h6 class="text-primary mb-0">Data Tambahan</h6>
                <small>Isi sesuai kondisi sekarang.</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="jml-kd">Jumlah Saudara Kandung</label>
                  <input type="number" name="jml-kd" id="jml-kd" class="form-control" placeholder="Jumlah Saudara Kandung" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="jml-tr">Jumlah Saudara Tiri</label>
                  <input type="number" name="jml-tr" id="jml-tr" class="form-control" placeholder="Jumlah Saudara Tiri" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="jml-ak">Jumlah Saudara Angkat</label>
                  <input type="number" name="jml-ak" id="jml-ak" class="form-control" placeholder="Jumlah Saudara Angkat" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="jarak">Jarak Tempat Tinggal ke Sekolah</label>
                  <div class="input-group">
                    <input type="number" step="any" id="jarak" name="jarak" class="form-control" placeholder="10" />
                    <span class="input-group-text">km</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="transport">Transportasi ke Sekolah</label>
                  <input type="text" id="transport" name="transport" class="form-control" placeholder="Sepeda" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="penyakit">Penyakit yang pernah diderita</label>
                  <input type="text" id="penyakit" name="penyakit" class="form-control" placeholder="penyakit yang pernah diderita" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="kelainan">Kelainan Jasmani</label>
                  <input type="text" id="kelainan" name="kelainan" class="form-control" placeholder="Kelainan jasmani" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="bahasa">Bahasa Sehari-hari</label><br>
                  <small class="text-primary">dapat memilih lebih dari satu</small>
                  <select id="bahasa" name="bahasa[]" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
                    <option>Indonesia</option>
                    <option>Jawa</option>
                    <option>Sunda</option>
                    <option>Inggris</option>
                    <option>Mandarin</option>
                    <option>Arab</option>
                  </select>
                </div>
              </div>
              <hr class="my-4 mx-n4" />
              <!-- Jika memiliki -->
              <div class="content-header mb-3">
                <h6 class="text-primary mb-0">Diisi Jika Memiliki</h6>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="no-kks">Nomor KKS (Kartu Keluarga Sejahtera)</label>
                  <input type="text" id="no-kks" name="no-kks" class="form-control" placeholder="Kartu Keluarga Sejahtera" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="no-pkh">Nomor PKH (Program Keluarga Harapan)</label>
                  <input type="text" id="no-pkh" name="no-pkh" class="form-control" placeholder="Program Keluarga Harapan" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="no-kip">Nomor KIP (Kartu Indonesia Pintar)</label>
                  <input type="text" id="no-kip" name="no-kip" class="form-control" placeholder="Kartu Indonesia Pintar" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="no-kip">Nomor KIS (Kartu Indonesia Sehat)</label>
                  <input type="text" id="no-kis" name="no-kis" class="form-control" placeholder="Kartu Indonesia Sehat" />
                </div>
              </div>
              <hr class="my-4 mx-n4" hidden />
              <!-- upload -->
              <div class="content-header mb-3" hidden>
                <h6 class="mb-0">Upload Berkas</h6>
                <small>File dalam bentuk JPG/PNG maksimal 2 mb</small>
              </div>
              <div class="row g-3" hidden>
                <div class="col-sm-3">
                  <div class="dropzone" id="uKk">
                    <div class="dz-message needsclick">
                      Pilih KK
                      <span class="note needsclick">(Usahakan semua teks terbaca jelas)</span>
                    </div>
                    <div class="fallback">
                      <input name="kk" type="file" />
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="dropzone" id="uAkta">
                    <div class="dz-message needsclick">
                      Pilih Akta Kelahiran
                      <span class="note needsclick">(Usahakan semua teks terbaca jelas)</span>
                    </div>
                    <div class="fallback">
                      <input name="file" type="file" />
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="dropzone" id="uIjazah">
                    <div class="dz-message needsclick">
                      Pilih Ijazah Terakhir
                      <span class="note needsclick">(Usahakan semua teks terbaca jelas)</span>
                    </div>
                    <div class="fallback">
                      <input name="file" type="file" />
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="dropzone" id="uBukti">
                    <div class="dz-message needsclick">
                      Pilih Bukti Diterima
                      <span class="note needsclick">(Usahakan semua teks terbaca jelas)</span>
                    </div>
                    <div class="fallback">
                      <input name="file" type="file" />
                    </div>
                  </div>
                </div>
              </div>
              <!-- /upload  -->
              <hr class="my-4 mx-n4" />
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-check form-check-success">
                    <input class="form-check-input" type="checkbox" name="sudah" id="sudah">
                    <label class="form-check-label" for="sudah">Data yang saya isi sudah sesuai dengan keadaan yang sebenarnya</label>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                  </button>
                  <button type="submit" class="btn btn-success btn-next btn-submit">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Validation Wizard -->
    <!-- Wizard JS -->
    <script src="<?= base_url("assets/vendor/libs/bs-stepper/bs-stepper.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/libs/bootstrap-select/bootstrap-select.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/libs/select2/select2.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/libs/dropzone/dropzone.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/form-wizard-validation.js") ?>"></script>