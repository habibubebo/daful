<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Utama
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

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_APS');
    $this->load->helper('url');
    $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
    $this->load->view('layout/header', $data);
    $this->load->view('layout/sidebar_menu', $data);
    $this->load->view('layout/navbar', $data);
    if ($this->session->userdata('status') == "") {
      redirect(base_url("auth"));
    }
  }

  public function index()
  {
    $id_siswa = $this->session->userdata('id');
    $data['review'] = $this->Model_APS->get_review_siswa($id_siswa);
    $data['infos'] = $this->Model_APS->tampil_data('tbl_info', 'id', 'ASC')->result();
    $data['pengumuman'] = $this->Model_APS->tampil_data('tbl_pengumuman', 'id', 'ASC')->result();
    if ($this->session->userdata('role') < "1") {
      // dashboard siswa
      $id = "id_siswa = " . $this->session->userdata('id');
      $data['tgl'] = $this->db->query("SELECT status_verifikasi,tgl_verif FROM siswa WHERE $id")->result();
      $this->load->view('layout/body_siswa', $data);
    } else {
      // dashboard admin
      $data['akuns'] = $this->Model_APS->tampil_data('siswa', 'id_siswa', 'ASC')->num_rows();
      $data['verifs'] = $this->Model_APS->cek_akun('siswa', "status_verifikasi = 0 or status_verifikasi = 1")->num_rows();
      $data['sudahverif'] = $this->Model_APS->cek_akun('siswa', "status_verifikasi = 2")->num_rows();
      $data['prosesverif'] = $this->Model_APS->cek_akun('siswa', "status_verifikasi = 1")->num_rows();
      $data['belumverif'] = $this->Model_APS->cek_akun('siswa', "status_verifikasi = 0")->num_rows();
      $this->load->view('layout/body_admin', $data);
    }

    $this->load->view('layout/footer');
  }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */