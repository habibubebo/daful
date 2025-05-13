<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_APS');
    $this->load->helper('url');
  }

  public function index($view = null)
  {
    if ($this->session->userdata('status') == "masuk") {
      redirect(base_url('dashboard'));
    } else {
      $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
      $data['profil'][0]->depan == '1' ? $view = 'home' : $view = 'home2';
      $data['alert'] = 0;
      $data['akuns'] = $this->Model_APS->tampil_data('siswa', 'id_siswa', 'ASC')->num_rows();
      $data['reviews'] = $this->Model_APS->get_review_all();
      $data['infos'] = $this->Model_APS->tampil_data('tbl_info', 'id', 'ASC')->result();
      $data['jms'] = $this->Model_APS->tampil_data('tbl_jalur', 'id', 'ASC')->result();
      $data['tims'] = $this->Model_APS->get_siswa_valid();
      $this->load->view('layout/header', $data);
      $this->load->view($view, $data);
    };
  }

  function list()
  {
    $data['akuns'] = $this->Model_APS->tampil_data_seleksi('masuk_jalur, no_urut, nama_lengkap', 'siswa', 'masuk_jalur, no_urut', 'ASC')->result();
    $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
    $this->load->view('list', $data);
  }

  function timSekolah() {
    $query = $this->Model_APS->get_siswa_valid();
    $query = array_column($query, 'nama_lengkap');
    echo json_encode($query);
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */