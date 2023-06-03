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
    // Menambahkan Model-------------------------------------------------------------------------------------
        $this->load->model('Model_APS');
    // Menambahkan Helper URL
        $this->load->helper('url');
    // Menambahkan tampilan dan memanggil tampilan
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar_menu');
        $this->load->view('layout/navbar');
        if($this->session->userdata('status') == ""){
            redirect(base_url("auth"));
        }
  }

  public function index()
  {
    $data['pengumuman'] = $this->Model_APS->tampil_data('tbl_pengumuman','id','ASC')->result();
    if($this->session->userdata('role') < "1"){
      $this->load->view('layout/body_siswa',$data);
    } else {
      $this->load->view('layout/body_admin',$data);
    }
    
    $this->load->view('layout/footer');
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */