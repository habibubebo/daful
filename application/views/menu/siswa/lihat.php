<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between mb-3">
      <h4 class="fw-bold py-3 my-auto"><span class="text-muted fw-light">Daftar Ulang/</span> Data diri <?= $bio[0]->nama_lengkap ?></h4>
      <div class="flex-column my-auto">
        <?php foreach ($bio as $tp) { ?>
          <?php if ($this->session->userdata('role') > 0) {
            echo '<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <button onclick="goBack()" class="btn btn-outline-secondary">Kembali</button><a href="' . base_url("admin/verifikasi/verif/" . $tp->nisn) . '" class="btn btn-outline-primary"><i class="bx bxs-user-check" ></i> Verifikasi</a>
          <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bx bxs-file-pdf"></i><span class="d-none d-sm-inline-block"> Unduh</span></button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
          <a href="' . base_url("aksi/unduh/" . $tp->nisn) . '/ayah" class="dropdown-item">Ayah</a>
          <a href="' . base_url("aksi/unduh/" . $tp->nisn) . '/ibu" class="dropdown-item">Ibu</a>
          <a href="' . base_url("aksi/unduh/" . $tp->nisn) . '/wali" class="dropdown-item">Wali</a>
          </div></div></div>';
          } else {
            echo '<a href="' . base_url("siswa") . '" class="btn btn-outline-primary"><i class="bx bx-edit me-sm-1"></i> Edit</a><div class="fixed-bottom mx-3"><a class="btn btn-primary w-100 d-md-none d-lg-none mb-3" href="' . base_url("siswa/unduhan") . '">Unduh Bukti</a></div>';
          } ?>
      </div>
    </div>
    <?php if ($this->session->flashdata('alert') == !"") {
            $data = $this->session->flashdata('alert');
            echo '<div class="alert alert-' . $data['tipe'] . ' alert-dismissible" role="alert">' . $data['isi'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          };
          // echo var_dump($this->session->userdata());
    ?>
    <!-- Basic Layout & Basic with Icons -->
    <div class="alert alert-danger alert-dismissible" id="qr" role="alert" style="display:none">
      Mohon lakukan <b>Edit data dan Submit ulang</b>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
    </div>
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="text-primary mb-0">Biodata Siswa</h5>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="nisn">NISN</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $tp->nisn ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="nik">NIK</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nik" name="nik" value="<?= $tp->nik ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="nama-lengkap">Nama lengkap</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" value="<?= $tp->nama_lengkap ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="nama-panggilan">Nama panggilan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nama-panggilan" name="nama-panggilan" value="<?= $tp->nama_panggilan ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="jk">Jenis Kelamin</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="jk" name="jk" value="<?= $tp->jk ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="tempat-lahir">Tempat lahir</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="tempat-lahir" name="tempat-lahir" value="<?= $tp->tempat_lahir ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="prov-lahir">Provinsi lahir</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="prov-lahir" name="prov-lahir" value="<?= $tp->prov_lahir ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="tanggal-lahir">tanggal lahir</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="tanggal-lahir" name="tgl-lahir" value="<?= $this->Model_APS->tgl_id($tp->tgl_lahir) ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="agama">Agama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="agama" name="agama" value="<?= $tp->agama ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="kw">kewarganegaraan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="kw" name="kw" value="<?= $tp->kw ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="anak-ke">Anak ke</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="anak-ke" name="anak-ke" value="<?= $tp->anak_ke ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="jml-kd">Jumlah saudara kandung</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="jml-kd" name="jml-kd" value="<?= $tp->jml_saudara_kd ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="jml-tr">Jumlah saudara tiri</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="jml-tr" name="jml-tr" value="<?= $tp->jml_saudara_tr ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="jml-ak">jumlah saudara angkat</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="jml-ak" name="jml-ak" value="<?= $tp->jml_saudara_ak ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="stat-anak">Status anak</label>
              <div class="col-sm-8">
                <div class="form-control" id="stat-anak" name="stat-anak"><?= $tp->status_anak ?></div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="notelp">No. Telepon / HP</label>
              <div class="col-sm-8">
                <div class="input-group"><input type="text" id="notelp" name="notelp" value="<?= $tp->notelp ?>" class="form-control" />
                <a class="btn btn-outline-primary" href="<?= wa_link($tp->notelp) ?>"><i class='bx bxl-whatsapp'></i></a>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="email">Email</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="email" name="email" value="<?= $tp->email ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="goldar">golongan darah</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="goldar" name="goldar" value="<?= $tp->goldar ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="tb">Tinggi badan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="tb" name="tb" value="<?= $tp->tinggi_badan . ' cm' ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="bb">Berat badan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="bb" name="bb" value="<?= $tp->berat_badan . ' Kg' ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="hobi">Kegemaran / hobi</label>
              <div class="col-sm-8">
                <textarea type="text" class="form-control" id="hobi" name="hobi"><?= 'Kesenian: ' . $tp->hobi_kes . ', Olahraga: ' . $tp->hobi_or . ', Kemasyarakatan: ' . $tp->hobi_masy . ', Lain: ' . $tp->hobi_lain ?></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="tinggal">tinggal dengan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="tinggal" name="tinggal" value="<?= $tp->tinggal ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
              <div class="col-sm-8">
                <textarea type="text" class="form-control" id="alamat" name="alamat"><?= 'Jalan: ' . $tp->jalan . ', RT: ' . $tp->rt . ', RW: ' . $tp->rw . ', Desa: ' . $tp->desa . ', Kec: ' . $tp->kec . ', Kab/Kota: ' . $tp->kab ?></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="text-primary mb-0">Data Peserta Didik</h5>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="no-pend">PIN Pendaftaran</label>
              <div class="col-sm-8">
                <input type="text" class="form-control copy-text" id="no-pend" name="no-pend" data-text="<?= $tp->no_pendaftaran ?>" value="<?= $tp->no_pendaftaran ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="no-urut">No. urut diterima</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="no-urut" name="no-urut" value="<?= $tp->no_urut ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="asal">Asal SMP/MTs</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="asal" name="asal" value="<?= $tp->asal ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="smp-npsn">NPSN SMP/MTs</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="smp-npsn" name="smp-npsn" value="<?= $tp->smp_npsn ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="smp-no">Nomor Ijazah/SKL SMP/MTs</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="smp-no" name="smp-no" value="<?= $tp->smp_no ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="smp-tgl">Tanggal Ijazah/SKL SMP/MTs</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="smp-tgl" name="smp-tgl" value="<?= $this->Model_APS->tgl_id($tp->smp_tgl) ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="sd-asal">Asal SD/MI</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="sd-asal" name="sd-asal" value="<?= $tp->sd_asal ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="sd-npsn">NPSN SD/MI</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="sd-npsn" name="sd-npsn" value="<?= $tp->sd_npsn ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="sd-no">Nomor Ijazah/SKL SD/MI</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="sd-no" name="sd-no" value="<?= $tp->sd_no ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="sd-tgl">Tanggal Ijazah/SKL SD/MI</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="sd-tgl" name="sd-tgl" value="<?= $this->Model_APS->tgl_id($tp->sd_tgl) ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="masuk-kelas">Diterima di kelas</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="masuk-kelas" name="masuk-kelas" value="<?= $tp->masuk_kelas ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label text-primary" for="masuk-jalur">Diterima lewat jalur</label>
              <div class="col-sm-8">
                <input type="text" class="form-control text-primary" id="masuk-jalur" name="masuk-jalur" value="<?= $tp->masuk_jalur ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="masuk-tgl">diterima tanggal</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="masuk-tgl" name="masuk-tgl" value="<?= $this->Model_APS->tgl_id($tp->masuk_tgl) ?>" />
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="text-primary mb-0">Jika Pindahan</h5>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="pindahan-asal">Pindahan Dari sekolah</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="pindahan-asal" name="pindahan-asal" value="<?= $tp->pindahan_asal ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="pindahan-alasan">Alasan pindah</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="pindahan-alasan" name="pindahan-alasan" value="<?= $tp->pindahan_alasan ?>" />
              </div>
            </div>

          </div>
        </div>
        <!-- bawah -->
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="text-primary mb-0">Data Tambahan</h5>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="jarak">Jarak tempat tinggal ke Sekolah</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="jarak" name="jarak" value="<?= $tp->jarak . ' km' ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="transport">Transportasi ke Sekolah</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="transport" name="transport" value="<?= $tp->transport ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="penyakit">Penyakit yang pernah diderita</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="penyakit" name="penyakit" value="<?= $tp->penyakit ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="kelainan">kelainan jasmani</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="kelainan" name="kelainan" value="<?= $tp->kelainan ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label" for="bahasa">Bahasa sehari-hari</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="bahasa" name="bahasa" value="<?= $tp->bahasa ?>" />
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
              <h5 class="text-primary mb-0">Data Ayah</h5>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="nama-ayah">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama-ayah" name="nama-ayah" value="<?= $tp->nama_ayah ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="ttl-ayah">Tempat, Tanggal lahir</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="ttl-ayah" name="ttl-ayah" value="<?= $tp->ttl_ayah ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="agama-ayah">Agama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="agama-ayah" name="agama-ayah" value="<?= $tp->agama_ayah ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="kw-ayah">Kewarganegaraan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="kw-ayah" name="kw-ayah" value="<?= $tp->kw_ayah ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="pdd-ayah">Pendidikan terakhir</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="pdd-ayah" name="pdd-ayah" value="<?= $tp->pdd_ayah ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="pk-ayah">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="pk-ayah" name="pk-ayah" value="<?= $tp->pk_ayah ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="ph-ayah">Penghasilan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="ph-ayah" name="ph-ayah" value="<?= $tp->ph_ayah ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="notelp-ayah">Nomor HP/WA</label>
                <div class="col-sm-8">
                  <div class="input-group">
                    <input type="text" id="notelp-ayah" name="notelp-ayah" value="<?= $tp->notelp_ayah ?>" class="form-control" />
                    <a class="btn btn-outline-primary" href="<?= wa_link($tp->notelp_ayah) ?>"><i class='bx bxl-whatsapp'></i></a>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="stat-ayah">Status</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="stat-ayah" name="stat-ayah" value="<?= $tp->status_ayah ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="alamat-ortu">Alamat</label>
                <div class="col-sm-8">
                  <textarea type="text" class="form-control" id="alamat-ortu" name="alamat-ortu"><?= $tp->alamat_ortu ?></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- data ibu -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="text-primary mb-0">Data Ibu</h5>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="nama-ibu">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama-ibu" name="nama-ibu" value="<?= $tp->nama_ibu ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="ttl-ibu">Tempat, Tanggal lahir</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="ttl-ibu" name="ttl-ibu" value="<?= $tp->ttl_ibu ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="agama-ibu">Agama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="agama-ibu" name="agama-ibu" value="<?= $tp->agama_ibu ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="kw-ibu">Kewarganegaraan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="kw-ibu" name="kw-ibu" value="<?= $tp->kw_ibu ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="pdd-ibu">Pendidikan terakhir</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="pdd-ibu" name="pdd-ibu" value="<?= $tp->pdd_ibu ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="pk-ibu">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="pk-ibu" name="pk-ibu" value="<?= $tp->pk_ibu ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="ph-ibu">Penghasilan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="ph-ibu" name="ph-ibu" value="<?= $tp->ph_ibu ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="notelp-ibu">Nomor HP/WA</label>
                <div class="col-sm-8">
                  <div class="input-group">
                    <input type="text" id="notelp-ibu" name="notelp-ibu" value="<?= $tp->notelp_ibu ?>" class="form-control" />
                    <a class="btn btn-outline-primary" href="<?= wa_link($tp->notelp_ibu) ?>"><i class='bx bxl-whatsapp'></i></a>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="stat-ibu">Status</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="stat-ibu" name="stat-ibu" value="<?= $tp->status_ibu ?>" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- data wali -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="text-primary mb-0">Data Wali</h5>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="nama-wali">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama-wali" name="nama-wali" value="<?= $tp->nama_wali ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="ttl-wali">Tempat, Tanggal lahir</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="ttl-wali" name="ttl-wali" value="<?= $tp->ttl_wali ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="agama-wali">Agama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="agama-wali" name="agama-wali" value="<?= $tp->agama_wali ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="kw-wali">Kewarganegaraan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="kw-wali" name="kw-wali" value="<?= $tp->kw_wali ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="pdd-wali">Pendidikan terakhir</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="pdd-wali" name="pdd-wali" value="<?= $tp->pdd_wali ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="pk-wali">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="pk-wali" name="pk-wali" value="<?= $tp->pk_wali ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="ph-wali">Penghasilan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="ph-wali" name="ph-wali" value="<?= $tp->ph_wali ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="notelp-wali">Nomor HP/WA</label>
                <div class="col-sm-8">
                  <div class="input-group">
                    <input type="text" id="notelp-wali" name="notelp-wali" value="<?= $tp->notelp_wali ?>" class="form-control" />
                    <a class="btn btn-outline-primary" href="<?= wa_link($tp->notelp_wali) ?>"><i class='bx bxl-whatsapp'></i></a>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="hub-wali">Hub. dengan wali</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="hub-wali" name="hub-wali" value="<?= $tp->hub_wali ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label" for="alamat-wali">Alamat</label>
                <div class="col-sm-8">
                  <textarea type="text" class="form-control" id="alamat-wali" name="alamat-wali"><?= 'Jalan: ' . $tp->jalan_wali . ', RT: ' . $tp->rt_wali . ', RW: ' . $tp->rw_wali . ', Desa: ' . $tp->desa_wali . ', Kec: ' . $tp->kec_wali . ', Kab/Kota: ' . $tp->kab_wali ?></textarea>
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
              <h5 class="text-primary mb-0">Data </h5>
            </div>
            <div class="card-body d-sm-flex align-items-center justify-content-between">
              <div class="row">
                <div class="col">
                  <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="kks">No. KKS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kks" name="kks" value="<?= $tp->no_kks ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="pkh">No. PKH</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="pkh" name="pkh" value="<?= $tp->no_pkh ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="kip">No. KIP</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kip" name="kip" value="<?= $tp->no_kip ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="kis">No. KIS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kis" name="kis" value="<?= $tp->no_kis ?>" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row align-self-start">
                <div class="col ms-md-5">
                  <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="no-akta">No. Akta Kelahiran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="no-akta" name="no-akta" value="<?= $tp->no_akta ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="kk">No. Kartu Keluarga</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kk" name="kk" value="<?= $tp->no_kk ?>" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col d-flex align-content-center">
                <img id="qrImage" src="<?= base_url() . 'assets/qr/' . $tp->nisn ?>.png" class="img-fluid m-auto" width="100px">

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Content -->
      <div class="notification bs-toast toast fade show bg-success" role="alert" aria-live="assertive" aria-atomic="true" id="notifWrapper">
            <div class="toast-header">
              <i class="icon-base bx bx-bell me-2"></i>
              <div class="me-auto fw-medium">Notification</div>
              <small>1 sec ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="notification"></div>
          </div>
      <!-- upload -->
      <div class="content-header mb-1" hidden>
        <h6 class="mb-0">Upload Berkas</h6>
        <small>Mohon cek sekali lagi</small>
      </div>
      <!-- <div class="row" hidden>
              <div class="col-sm-3">
                <div class="card mt-2">
                  <p class="text-center m-auto">KK</p>
                  <img class="img-fluid" src="<?= base_url() . 'file/uploads/' . str_replace(' ', '-', $tp->masuk_jalur) . $tp->no_urut . '/' . $tp->kk ?>">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card mt-2">
                <p class="text-center m-auto">Akta Kelahiran</p>
                  <img class="img-fluid" src="<?= base_url() . 'file/uploads/' . str_replace(' ', '-', $tp->masuk_jalur) . $tp->no_urut . '/' . $tp->akta ?>">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card mt-2">
                <p class="text-center m-auto">Ijazah SMP</p>
                  <img class="img-fluid" src="<?= base_url() . 'file/uploads/' . str_replace(' ', '-', $tp->masuk_jalur) . $tp->no_urut . '/' . $tp->ijazah ?>">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card mt-2">
                <p class="text-center m-auto">Bukti diterima</p>
                  <img class="img-fluid" src="<?= base_url() . 'file/uploads/' . str_replace(' ', '-', $tp->masuk_jalur) . $tp->no_urut . '/' . $tp->bukti ?>">
                </div>
              </div>
            </div>          -->
      <!-- /upload  -->


      <script type="text/javascript">
        document.title = "Biodata <?= $tp->nama_lengkap ?>";
        document.getElementById("menu1").classList.add("active", "open");
        document.getElementById("m1-1").classList.add("active");
        const imgs = document.getElementsByTagName('img');
        for (let img of imgs) {
          img.addEventListener('error', function handleError() {
            img.src = '../assets/img/default.webp';
            document.getElementById("qr").style.display = "block";
          });
        };
        for (let isian of document.getElementsByTagName("input")) {
          isian.readOnly = true
        };
      </script>
      <script>
        const copyElements = document.querySelectorAll('.copy-text');
        const notifWrap = document.getElementById('notifWrapper');
        const notification = document.getElementById('notification');

        copyElements.forEach(element => {
            element.addEventListener('click', () => {
                const textToCopy = element.getAttribute('data-text');
                navigator.clipboard.writeText(textToCopy).then(() => {
                    notifWrap.style.display = 'block';
                    notification.textContent = 'Teks disalin: ' + textToCopy;

                    setTimeout(() => {
                        notifWrap.style.display = 'none';
                    }, 3000);
                }).catch(err => {
                    console.error('Gagal menyalin: ', err);
                });
            });
        });
    </script>
    <?php } ?>
    <style>
      .col-form-label {
        font-size: 0.8em !important;
      }
      .notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none; 
            z-index: 99999; 
        }
    </style>