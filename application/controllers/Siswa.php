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
        redirect(base_url("auth"));
    } 
  }

  public function index()
  {
    $this->load->view('form/wizard');
    $this->load->view('layout/footer');
  }

  function data()
  {
    $this->load->view('menu/siswa/lihat');
    $this->load->view('layout/footer');
  }

}


/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */