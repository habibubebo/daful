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

class Utama extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    // Menambahkan Model-------------------------------------------------------------------------------------
    $this->load->model('Model_APS');
    // Menambahkan Helper URL
        $this->load->helper('url');
    // Menambahkan tampilan dan memanggil tampilan
        $this->load->view('layout/header');
        // $data['profil'] = $this->Model_APS->tampil_data('profil','npsn','ASC')->result();
        $this->load->view('layout/sidebar_menu');
        // $this->load->view('layout/sidebar_menu',$data);
        $this->load->view('layout/navbar');
        if($this->session->userdata('status') == ""){
            redirect(base_url("auth"));
        }
  }

  public function index()
  {
    // Menambahkan tampilan dan memanggil tampilan
    if($this->session->userdata('role') < "1"){
      $this->load->view('layout/body_siswa');
    } else {
      $this->load->view('layout/body_admin');
    }
    
    $this->load->view('layout/footer');
  }

}


/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */