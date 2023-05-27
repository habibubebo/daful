<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Pages
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

class Admin extends CI_Controller
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
    } elseif($this->session->userdata('role') < "1"){
      redirect(base_url());
    }
  }

  public function index()
  {
    $this->load->view('v_login');
  }

  function akunsiswa(){
    $this->load->view('menu/admin/lihat');
    $this->load->view('layout/footer');
  }

  function verifikasi(){
    // $data['profil'] = $this->Model_APS->tampil_data('profil','npsn','ASC')->result();
    // $this->load->view('menu/profil',$data);
    $this->load->view('menu/admin/verifikasi');
    $this->load->view('layout/footer');
  }

  function profil(){
    // $data['profil'] = $this->Model_APS->tampil_data('profil','npsn','ASC')->result();
    // $this->load->view('menu/profil',$data);
    $this->load->view('menu/profil');
    $this->load->view('layout/footer');
  }

  function akun(){
    // $data['profil'] = $this->Model_APS->tampil_data('profil','npsn','ASC')->result();
    // $this->load->view('menu/profil',$data);
    $this->load->view('menu/akun');
    $this->load->view('layout/footer');
  }
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */