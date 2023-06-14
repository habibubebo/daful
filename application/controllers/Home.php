<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Home
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

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
        // Menambahkan Model
        $this->load->model('Model_APS');
        // Menambahkan Helper URL
        $this->load->helper('url');
  }

  public function index()
  {
    $data['alert'] = 0;
    $data['infos'] = $this->Model_APS->tampil_data('tbl_info','id','ASC')->result();
    $data['jms'] = $this->Model_APS->tampil_data('tbl_jalur','id','ASC')->result();
    $data['profil'] = $this->Model_APS->tampil_data('profil','id','ASC')->result();
    $this->load->view('home',$data);
  }

  function list()
  {
    $data['akuns'] = $this->Model_APS->tampil_data_seleksi('masuk_jalur, no_urut, nama_lengkap','siswa','masuk_jalur, no_urut','ASC')->result();
    $data['profil'] = $this->Model_APS->tampil_data('profil','id','ASC')->result();
    $this->load->view('list',$data);
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */