<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Siswa
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Siswa extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    // Menambahkan Model
    $this->load->model('Model_APS');
    // Menambahkan tampilan dan memanggil tampilan
    $this->load->view('layout/header');
    // $data['profil'] = $this->Model_APS->tampil_data('profil','npsn','ASC')->result();
    // $this->load->view('layout/sidebar_menu',$data);
    $this->load->view('layout/sidebar_menu');
    $this->load->view('layout/navbar');
    if($this->session->userdata('status') == ""){
        redirect(base_url());
    };
  }

  public function index()
  {
    $data['pdds'] = $this->Model_APS->tampil_data('tbl_pdd','id','ASC')->result();
    $data['agamas'] = $this->Model_APS->tampil_data('tbl_agama','id','ASC')->result();
    $data['phs'] = $this->Model_APS->tampil_data('tbl_penghasilan','id','ASC')->result();
    $data['pks'] = $this->Model_APS->tampil_data('tbl_pekerjaan','id','ASC')->result();
    $this->load->view('form/wizard',$data);
    $this->load->view('layout/footer');
  }

  function proses()
  { 
    $Id = $this->session->userdata('id');
    $namal = $this->input->post('nama-lengkap');
    $namap = $this->input->post('nama-panggilan');
    $nisn = $this->input->post('nisn');
    $nik = $this->input->post('nik');
    $jk = $this->input->post('jk');
    $tl = $this->input->post('tempat-lahir');
    $provl = $this->input->post('prov-lahir');
    $tgl = $this->input->post('tanggal-lahir');
    $agm = $this->input->post('agama');
    $kw = $this->input->post('kw');
    $anakke = $this->input->post('anak-ke');
    $stat = $this->input->post('stat-anak');
    $jalan = $this->input->post('jalan');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $desa = $this->input->post('desa');
    $kec = $this->input->post('kec');
    $kab = $this->input->post('kab');
    $prov = $this->input->post('prov');
    $notelp = $this->input->post('notelp');
    $goldar = $this->input->post('goldar');
    $tb = $this->input->post('tb');
    $bb = $this->input->post('bb');
    $hobik = $this->input->post('hobi-kes');
    $hobio = $this->input->post('hobi-or');
    $hobim = $this->input->post('hobi-masy');
    $hobil = $this->input->post('hobi-lain');
    $tinggal = $this->input->post('tinggal');
    $namaayah = $this->input->post('nama-ayah');
    $ttlayah = $this->input->post('ttl-ayah');
    $agamaayah = $this->input->post('agama-ayah');
    $kwayah = $this->input->post('kw-ayah');
    $pddayah = $this->input->post('pdd-ayah');
    $pkayah = $this->input->post('pk-ayah');
    $phayah = $this->input->post('ph-ayah');
    $notelpayah = $this->input->post('notelp-ayah');
    $statayah = $this->input->post('stat-ayah');
    $alamatortu = $this->input->post('alamat-ortu');
    $namaibu = $this->input->post('nama-ibu');
    $ttlibu = $this->input->post('ttl-ibu');
    $agamaibu = $this->input->post('agama-ibu');
    $kwibu = $this->input->post('kw-ibu');
    $pddibu = $this->input->post('pdd-ibu');
    $pkibu = $this->input->post('pk-ibu');
    $phibu = $this->input->post('ph-ibu');
    $notelpibu = $this->input->post('notelp-ibu');
    $statibu = $this->input->post('stat-ibu');
    $namawali = $this->input->post('nama-wali');
    $ttlwali = $this->input->post('ttl-wali');
    $agamawali = $this->input->post('agama-wali');
    $kwwali = $this->input->post('kw-wali');
    $pddwali = $this->input->post('pdd-wali');
    $pkwali = $this->input->post('pk-wali');
    $phwali = $this->input->post('ph-wali');
    $notelpwali = $this->input->post('notelp-wali');
    $hubwali = $this->input->post('hub-wali');
    $np = $this->input->post('no-pend');
    $nourut = $this->input->post('no-urut');
    $asal = $this->input->post('asal');
    $tglnoijazah = $this->input->post('tgl-no-ijazah');
    $tglnoskl = $this->input->post('tgl-no-skl');
    $lama = $this->input->post('lama');
    $nopesertaun = $this->input->post('nopeserta-un');
    $noskhu = $this->input->post('no-skhu');
    $masukkelas = $this->input->post('masuk-kelas');
    $masukjalur = $this->input->post('masuk-jalur');
    $masuktgl = $this->input->post('masuk-tgl');
    $pindahanasal = $this->input->post('pindahan-asal');
    $pindahanalasan = $this->input->post('pindahan-alasan');
    $jmlkd = $this->input->post('jml-kd');
    $jmltr = $this->input->post('jml-tr');
    $jmlak = $this->input->post('jml-ak');
    $jarak = $this->input->post('jarak');
    $penyakit = $this->input->post('penyakit');
    $kelainan = $this->input->post('kelainan');
    $bahasa = implode(", ",$this->input->post('bahasa'));

    $data = array(
        'nama_lengkap' => $namal,
        'nama_panggilan' => $namap,
        'nisn' => $nisn,
        'nik' => $nik,
        'jk' => $jk,
        'tempat_lahir' => $tl,
        'prov_lahir' => $provl,
        'tgl_lahir' => $tgl,
        'agama' => $agm,
        'kw' => $kw,
        'anak_ke' => $anakke,
        'status_anak' => $stat,
        'jalan' => $jalan,
        'rt' => $rt,
        'rw' => $rw,
        'desa' => $desa,
        'kec' => $kec,
        'kab' => $kab,
        'prov' => $prov,
        'notelp' => $notelp,
        'goldar' => $goldar,
        'tinggi_badan' => $tb,
        'berat_badan' => $bb,
        'hobi_kes' => $hobik,
        'hobi_or' => $hobio,
        'hobi_masy' => $hobim,
        'hobi_lain' => $hobil,
        'tinggal' => $tinggal,
        'nama_ayah' => $namaayah,
        'ttl_ayah' => $ttlayah,
        'agama_ayah' => $agamaayah,
        'kw_ayah' => $kwayah,
        'pdd_ayah' => $pddayah,
        'pk_ayah' => $pkayah,
        'ph_ayah' => $phayah,
        'notelp_ayah' => $notelpayah,
        'status_ayah' => $statayah,
        'alamat_ortu' => $alamatortu,
        'nama_ibu' => $namaibu,
        'ttl_ibu' => $ttlibu,
        'agama_ibu' => $agamaibu,
        'kw_ibu' => $kwibu,
        'pdd_ibu' => $pddibu,
        'pk_ibu' => $pkibu,
        'ph_ibu' => $phibu,
        'notelp_ibu' => $notelpibu,
        'status_ibu' => $statibu,
        'nama_wali' => $namawali,
        'ttl_wali' => $ttlwali,
        'agama_wali' => $agamawali,
        'kw_wali' => $kwwali,
        'pdd_wali' => $pddwali,
        'pk_wali' => $pkwali,
        'ph_wali' => $phwali,
        'notelp_wali' => $notelpwali,
        'hub_wali' => $hubwali,
        'jalan_wali' => $this->input->post('jalan-wali'),
        'rt_wali' => $this->input->post('rt-wali'),
        'rw_wali' => $this->input->post('rw-wali'),
        'desa_wali' => $this->input->post('desa-wali'),
        'kec_wali' => $this->input->post('kec-wali'),
        'kab_wali' => $this->input->post('kab-wali'),
        'prov_wali' => $this->input->post('prov-wali'),
        'no_pendaftaran' => $np,
        'no_urut' => $nourut,
        'asal' => $asal,
        'tgl_no_ijazah' => $tglnoijazah,
        'tgl_no_skl' => $tglnoskl,
        'lama_belajar' => $lama,
        'nopeserta_un' => $nopesertaun,
        'no_skhu' => $noskhu,
        'masuk_kelas' => $masukkelas,
        'masuk_jalur' => $masukjalur,
        'masuk_tgl' => $masuktgl,
        'pindahan_asal' => $pindahanasal,
        'pindahan_alasan' => $pindahanalasan,
        'jml_saudara_kd' => $jmlkd,
        'jml_saudara_tr' => $jmltr,
        'jml_saudara_ak' => $jmlak,
        'jarak' => $jarak,
        'penyakit' => $penyakit,
        'kelainan' => $kelainan,
        'bahasa' => $bahasa,
        'password' => $nisn,
        'no_kks' => $this->input->post('no-kks'),
        'no_pkh' => $this->input->post('no-pkh'),
        'no_kip' => $this->input->post('no-kip'),
        'status_verifikasi' => '1'
      );
      $where = array('id_siswa' => $Id);
      $this->Model_APS->proses_update($where,$data,'siswa');
      $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Data <strong>$namal</strong> berhasil diupdate"));
      redirect('siswa/data');
    
  }

  function data()
  {
    $this->load->view('menu/siswa/lihat');
    $this->load->view('layout/footer');
  }

  function unduhan($ttd=null)
  {
    switch ($ttd) {
      case "ayah" : $data['siswa'] = $this->db->query('SELECT *,nama_ayah AS ttdnama,ttl_ayah AS ttdttl,pk_ayah AS ttdpk,alamat_ortu as ttdalamat, notelp_ayah as ttdtelp, agama_ayah AS ttdagama FROM siswa WHERE id_siswa='.$this->session->userdata('id'))->result();
                    $data['tombol'] = 0; 
      break;
      case "ibu" : $data['siswa'] = $this->db->query('SELECT *,nama_ibu AS ttdnama,ttl_ibu AS ttdttl,pk_ibu AS ttdpk,alamat_ortu as ttdalamat, notelp_ibu as ttdtelp, agama_ibu AS ttdagama FROM siswa WHERE id_siswa='.$this->session->userdata('id'))->result();
                   $data['tombol'] = 1;   
      break;
      case "wali" : $data['siswa'] = $this->db->query('SELECT *,nama_wali AS ttdnama,ttl_wali AS ttdttl,pk_wali AS ttdpk,desa_wali as ttdalamat, notelp_wali as ttdtelp, agama_wali AS ttdagama FROM siswa WHERE id_siswa='.$this->session->userdata('id'))->result();
                    $data['tombol'] = 2; 
      break;
      default : 
      redirect('siswa/unduhan/ayah');
  };
    $this->load->view('menu/siswa/unduhan',$data);
    $this->load->view('layout/footer');
  }

  
}


/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */