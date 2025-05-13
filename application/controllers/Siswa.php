<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // Menambahkan Model
    $this->load->model('Model_APS');
    $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
    $this->load->view('layout/header', $data);
    $this->load->view('layout/sidebar_menu', $data);
    $this->load->view('layout/navbar');
    if ($this->session->userdata('status') == "") {
      redirect(base_url());
    };
  }

  public function index()
  {
    $data['pdds'] = $this->Model_APS->tampil_data('tbl_pdd', 'id', 'ASC')->result();
    $data['agamas'] = $this->Model_APS->tampil_data('tbl_agama', 'id', 'ASC')->result();
    $data['phs'] = $this->Model_APS->tampil_data('tbl_penghasilan', 'id', 'ASC')->result();
    $data['pks'] = $this->Model_APS->tampil_data('tbl_pekerjaan', 'id', 'ASC')->result();
    $this->load->view('form/wizard', $data);
    $this->load->view('layout/footer');
  }

  function proses()
  {
    $Id = $this->input->post('id');
    $namal = $this->input->post('nama-lengkap');
    $nisn = $this->input->post('nisn');
    $jalan = $this->input->post('jalan');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $desa = ucwords(strtolower($this->input->post('desa')));
    $kec = ucwords(strtolower($this->input->post('kec')));
    $kab = ucwords(strtolower($this->input->post('kab')));
    $namaayah = $this->input->post('nama-ayah');
    $namaibu = $this->input->post('nama-ibu');
    $namawali = $this->input->post('nama-wali');
    $np = $this->input->post('no-pend');
    if (empty($_POST['alamatcheck'])) {
      $alamatortu = $this->input->post('alamat-ortu');
    } else {
      $alamatortu = "Jalan $jalan RT $rt/RW $rw $desa - $kec - $kab";
    };
    $cek = array('nisn' => $this->session->userdata('nisn'));
    $query = $this->Model_APS->cek_akun('siswa', $cek)->result_array();
      if ($query[0]['status_verifikasi'] == "2") {
        $status = "2";
      } else {
        $status = "1";
      };
    

    $data = array(
      'nama_lengkap' => ucwords(strtolower($namal)),
      'nama_panggilan' => ucwords(strtolower($this->input->post('nama-panggilan'))),
      'nisn' => $nisn,
      'nik' => $this->input->post('nik'),
      'jk' => $this->input->post('jk'),
      'tempat_lahir' => ucwords(strtolower($this->input->post('tempat-lahir'))),
      'prov_lahir' => $this->input->post('prov-lahir'),
      'tgl_lahir' => $this->input->post('tanggal-lahir'),
      'agama' => $this->input->post('agama'),
      'kw' => ucwords(strtolower($this->input->post('kw'))),
      'anak_ke' => $this->input->post('anak-ke'),
      'status_anak' => $this->input->post('stat-anak'),
      'jalan' => $jalan,
      'rt' => $rt,
      'rw' => $rw,
      'desa' => $desa,
      'kec' => $kec,
      'kab' => $kab,
      'notelp' => $this->input->post('notelp'),
      'goldar' => $this->input->post('goldar'),
      'tinggi_badan' => $this->input->post('tb'),
      'berat_badan' => $this->input->post('bb'),
      'hobi_kes' => $this->input->post('hobi-kes'),
      'hobi_or' => $this->input->post('hobi-or'),
      'hobi_masy' => $this->input->post('hobi-masy'),
      'hobi_lain' => $this->input->post('hobi-lain'),
      'tinggal' => $this->input->post('tinggal'),
      'nama_ayah' => ucwords(strtolower($namaayah)),
      'ttl_ayah' => ucwords(strtolower($this->input->post('ttl-ayah'))),
      'agama_ayah' => $this->input->post('agama-ayah'),
      'kw_ayah' => ucwords(strtolower($this->input->post('kw-ayah'))),
      'pdd_ayah' => $this->input->post('pdd-ayah'),
      'pk_ayah' => $this->input->post('pk-ayah'),
      'ph_ayah' => $this->input->post('ph-ayah'),
      'notelp_ayah' => $this->input->post('notelp-ayah'),
      'status_ayah' => $this->input->post('stat-ayah'),
      'alamat_ortu' => $alamatortu,
      'nama_ibu' => ucwords(strtolower($namaibu)),
      'ttl_ibu' => ucwords(strtolower($this->input->post('ttl-ibu'))),
      'agama_ibu' => $this->input->post('agama-ibu'),
      'kw_ibu' => ucwords(strtolower($this->input->post('kw-ibu'))),
      'pdd_ibu' => $this->input->post('pdd-ibu'),
      'pk_ibu' => $this->input->post('pk-ibu'),
      'ph_ibu' => $this->input->post('ph-ibu'),
      'notelp_ibu' => $this->input->post('notelp-ibu'),
      'status_ibu' => $this->input->post('stat-ibu'),
      'nama_wali' => ucwords(strtolower($namawali)),
      'ttl_wali' => ucwords(strtolower($this->input->post('ttl-wali'))),
      'agama_wali' => $this->input->post('agama-wali'),
      'kw_wali' => ucwords(strtolower($this->input->post('kw-wali'))),
      'pdd_wali' => $this->input->post('pdd-wali'),
      'pk_wali' => $this->input->post('pk-wali'),
      'ph_wali' => $this->input->post('ph-wali'),
      'notelp_wali' => $this->input->post('notelp-wali'),
      'hub_wali' => $this->input->post('hub-wali'),
      'jalan_wali' => $this->input->post('jalan-wali'),
      'rt_wali' => $this->input->post('rt-wali'),
      'rw_wali' => $this->input->post('rw-wali'),
      'desa_wali' => $this->input->post('desa-wali'),
      'kec_wali' => $this->input->post('kec-wali'),
      'kab_wali' => $this->input->post('kab-wali'),
      'no_pendaftaran' => $np,
      'no_urut' => $this->input->post('no-urut'),
      'masuk_kelas' => $this->input->post('masuk-kelas'),
      'masuk_jalur' => $this->input->post('masuk-jalur'),
      'masuk_tgl' => $this->input->post('masuk-tgl'),
      'pindahan_asal' => $this->input->post('pindahan-asal'),
      'pindahan_alasan' => $this->input->post('pindahan-alasan'),
      'jml_saudara_kd' => $this->input->post('jml-kd'),
      'jml_saudara_tr' => $this->input->post('jml-tr'),
      'jml_saudara_ak' => $this->input->post('jml-ak'),
      'jarak' => $this->input->post('jarak'),
      'penyakit' => $this->input->post('penyakit'),
      'kelainan' => $this->input->post('kelainan'),
      'bahasa' => implode(", ", $this->input->post('bahasa')),
      'no_kks' => $this->input->post('no-kks'),
      'no_pkh' => $this->input->post('no-pkh'),
      'no_kip' => $this->input->post('no-kip'),
      'no_kis' => $this->input->post('no-kis'),
      'no_akta' => $this->input->post('no-akta'),
      'no_kk' => $this->input->post('no-kk'),
      'transport' => $this->input->post('transport'),
      'email' => $this->input->post('email'),
      'asal' => $this->input->post('asal'),
      'smp_npsn' => $this->input->post('smp-npsn'),
      'smp_no' => $this->input->post('smp-no'),
      'smp_tgl' => $this->input->post('smp-tgl'),
      'sd_asal' => $this->input->post('sd-asal'),
      'sd_npsn' => $this->input->post('sd-npsn'),
      'sd_no' => $this->input->post('sd-no'),
      'sd_tgl' => $this->input->post('sd-tgl'),
      'password' => $np,
      'status_verifikasi' => $status
    );
    $where = array('id_siswa' => $Id);
    $this->Model_APS->proses_update($where, $data, 'siswa');
    $this->session->set_userdata(['nama' => $namal, 'no_pendaftaran' => $np, 'nisn' => $nisn, 'ayah' => $namaayah, 'ibu' => $namaibu, 'wali' => $namawali]);
    $this->Model_APS->qr($nisn);
    $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "Data <strong>$namal</strong> berhasil diupdate"));
    redirect('siswa/data');
  }

  function data()
  {
    if (!$this->session->userdata('no_pendaftaran')) {
      redirect('siswa');
    } else {
      $cek = array('nisn' => $this->session->userdata('nisn'));
      if ($this->Model_APS->cek_akun('siswa', $cek)->num_rows() > 1) {
        $this->session->set_flashdata('alert', array('tipe' => 'danger', 'isi' => "Mohon cek kembali data <b>NISN " . $this->session->userdata('nisn') . "</b>, terdapat duplikasi di sistem"));
        redirect('siswa');
      } else {
        $id = $this->session->userdata('nisn');
        $where = array('nisn' => $id);
        $data['bio'] = $this->Model_APS->edit_data('siswa', $where)->result();
        $this->load->view('menu/siswa/lihat', $data);
        $this->load->view('layout/footer');
      };
    };
  }

  function unduhan($ttd = null)
  {
    if (!$this->session->userdata('no_pendaftaran')) {
      redirect('siswa');
    } else {
      $cek = array('nisn' => $this->session->userdata('nisn'));
      if ($this->Model_APS->cek_akun('siswa', $cek)->num_rows() > 1) {
        $this->session->set_flashdata('alert', array('tipe' => 'danger', 'isi' => "Mohon cek kembali data <b>NISN " . $this->session->userdata('nisn') . "</b>, terdapat duplikasi"));
        redirect('siswa');
      } else {
        switch ($ttd) {
          case "ayah":
            $data['siswa'] = $this->db->query('SELECT *,nama_ayah AS ttdnama,ttl_ayah AS ttdttl,pk_ayah AS ttdpk,alamat_ortu as ttdalamat, notelp_ayah as ttdtelp, agama_ayah AS ttdagama FROM siswa WHERE id_siswa=' . $this->session->userdata('id'))->result();
            $data['tombol'] = 0;
            break;
          case "ibu":
            $data['siswa'] = $this->db->query('SELECT *,nama_ibu AS ttdnama,ttl_ibu AS ttdttl,pk_ibu AS ttdpk,alamat_ortu as ttdalamat, notelp_ibu as ttdtelp, agama_ibu AS ttdagama FROM siswa WHERE id_siswa=' . $this->session->userdata('id'))->result();
            $data['tombol'] = 1;
            break;
          case "wali":
            $data['siswa'] = $this->db->query('SELECT *,nama_wali AS ttdnama,ttl_wali AS ttdttl,pk_wali AS ttdpk,desa_wali as ttdalamat, notelp_wali as ttdtelp, agama_wali AS ttdagama FROM siswa WHERE id_siswa=' . $this->session->userdata('id'))->result();
            $data['tombol'] = 2;
            break;
          default:
            redirect('siswa/formunduhan');
        };
        $this->load->view('menu/siswa/unduhan', $data);
        $this->load->view('layout/footer');
      };
    };
  }

  function formunduhan($tujuan = null)
  {
    if (!$this->session->userdata('no_pendaftaran')) {
      redirect('siswa');
    } else {
      switch ($tujuan) {
        case 'submit':
          $ke = $this->input->post('customRadioTemp');
          redirect('siswa/unduhan/' . $ke);
          break;
        default:
          $this->load->view('form/unduhan');
          $this->load->view('layout/footer');
      }
    };
  }
}


/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */