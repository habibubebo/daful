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
    $data['profil'] = $this->Model_APS->tampil_data('profil','id','ASC')->result();
    $this->load->view('layout/sidebar_menu',$data);
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
    $data['jms'] = $this->Model_APS->tampil_data('tbl_jalur','id','ASC')->result();
    $this->load->view('menu/admin/lihat',$data);
    $this->load->view('layout/footer');
  }

  function master(){
    $data['pdds'] = $this->Model_APS->tampil_data('tbl_pdd','id','ASC')->result();
    $data['agamas'] = $this->Model_APS->tampil_data('tbl_agama','id','ASC')->result();
    $data['phs'] = $this->Model_APS->tampil_data('tbl_penghasilan','id','ASC')->result();
    $data['pks'] = $this->Model_APS->tampil_data('tbl_pekerjaan','id','ASC')->result();
    $data['pengumumans'] = $this->Model_APS->tampil_data('tbl_pengumuman','id','ASC')->result();
    $data['infos'] = $this->Model_APS->tampil_data('tbl_info','id','ASC')->result();
    $data['jms'] = $this->Model_APS->tampil_data('tbl_jalur','id','ASC')->result();
    $this->load->view('menu/admin/master',$data);
    $this->load->view('layout/footer');
  }

  function tambahmaster($jenis)
  {
    switch ($jenis) {
      case 'ag': $data = array('nama' => "baru");
                $this->Model_APS->simpan_data($data,'tbl_agama');
                redirect(base_url('admin/master'));
        break;
      case 'ph': $data = array('nama' => "baru");
                $this->Model_APS->simpan_data($data,'tbl_penghasilan');
                redirect(base_url('admin/master'));
        break;
      case 'pd': $data = array('nama' => "baru");
                $this->Model_APS->simpan_data($data,'tbl_pdd');
                redirect(base_url('admin/master'));
        break;
      case 'pk': $data = array('nama' => "baru");
                $this->Model_APS->simpan_data($data,'tbl_pekerjaan');
                redirect(base_url('admin/master'));
        break;
      case 'pn': $data = array('ket' => "baru");
                 $this->Model_APS->simpan_data($data,'tbl_pengumuman');
                 redirect(base_url('admin/master'));
        break;
      case 'info': $data = array('nama' => "baru",'ket' => "baru");
                 $this->Model_APS->simpan_data($data,'tbl_info');
                 redirect(base_url('admin/master'));
        break;
      case 'jm': $data = array('nama' => "baru");
                 $this->Model_APS->simpan_data($data,'tbl_jalur');
                 redirect(base_url('admin/master'));
        break;
      case 'ad': $data = array('username'=>'baru','password'=>'baru','nama' => "baru",'role'=>'1');
                 $this->Model_APS->simpan_data($data,'akun');
                 redirect(base_url('admin/akun'));
        break;
      default:
        //
    };
  }
  public function updatemaster($jenis){
      // POST values
      $id = $this->input->post('id');
      $field = $this->input->post('field');
      $value = $this->input->post('value');
    switch ($jenis) {
      case 'ag': $tabel = 'tbl_agama';
                 $this->Model_APS->update_master($tabel,$id,$field,$value);
        break;
      case 'ph': $tabel = 'tbl_penghasilan';
                 $this->Model_APS->update_master($tabel,$id,$field,$value);
        break;
      case 'pd': $tabel = 'tbl_pdd';
                 $this->Model_APS->update_master($tabel,$id,$field,$value);
        break;
      case 'pk': $tabel = 'tbl_pekerjaan';
                 $this->Model_APS->update_master($tabel,$id,$field,$value);
        break;
      case 'pn': $tabel = 'tbl_pengumuman';
                 $this->Model_APS->update_master($tabel,$id,$field,$value);
        break;
      case 'info': $tabel = 'tbl_info';
                 $this->Model_APS->update_master($tabel,$id,$field,$value);
        break;
      case 'jm': $tabel = 'tbl_jalur';
                 $this->Model_APS->update_master($tabel,$id,$field,$value);
        break;
      case 'ad': $tabel = 'akun';
                 $this->Model_APS->update_master($tabel,$id,$field,$value);
        break;
      default:
        //
    };
	    exit;
	}

  function deletemaster($jenis,$id){
  switch ($jenis) {
    case 'ag':  $tabel = 'tbl_agama';
                $where = ['id' => $id];
                $this->Model_APS->hapus_data($where,$tabel);
                redirect(base_url('admin/master'));
      break;
    case 'ph':  $tabel = 'tbl_penghasilan';
                $where = ['id' => $id];
                $this->Model_APS->hapus_data($where,$tabel);
                redirect(base_url('admin/master'));
      break;
    case 'pd':  $tabel = 'tbl_pdd';
                $where = ['id' => $id];
                $this->Model_APS->hapus_data($where,$tabel);
                redirect(base_url('admin/master'));
      break;
    case 'pk':  $tabel = 'tbl_pekerjaan';
                $where = ['id' => $id];
                $this->Model_APS->hapus_data($where,$tabel);
                redirect(base_url('admin/master'));
      break;
    case 'pn':  $tabel = 'tbl_pengumuman';
                $where = ['id' => $id];
                $this->Model_APS->hapus_data($where,$tabel);
                redirect(base_url('admin/master'));
      break;
    case 'info':  $tabel = 'tbl_info';
                $where = ['id' => $id];
                $this->Model_APS->hapus_data($where,$tabel);
                redirect(base_url('admin/master'));
      break;
    case 'jm':  $tabel = 'tbl_jalur';
                $where = ['id' => $id];
                $this->Model_APS->hapus_data($where,$tabel);
                redirect(base_url('admin/master'));
      break;
    case 'ad':  $tabel = 'akun';
                $where = ['Id' => $id];
                $this->Model_APS->hapus_data($where,$tabel);
                redirect(base_url('admin/akun'));
      break;
    default:
      //
  };
    exit;
}

  function verifikasi($aksi = null,$id = null){
    switch ($aksi) {
      case 'lihat' : $where = array('id_siswa' => $id);
                     $data['bio'] = $this->Model_APS->edit_data('siswa',$where)->result();
                     $this->load->view('menu/siswa/lihat',$data);
                     $this->load->view('layout/footer');
        break;
      case 'verif' : $data = ['status_verifikasi' => '2','tgl_verif' => date('Y-m-d H:i:s')];
                     $where = ['nisn' => $id ];
                     $this->Model_APS->proses_update($where,$data,'siswa');
                     $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Data $id berhasil diverifikasi"));
                     redirect(base_url('admin/verifikasi'));
        break;
      case 'undo' : $data = ['status_verifikasi' => '1','tgl_verif' => ''];
                    $where = ['nisn' => $id ];
                    $this->Model_APS->proses_update($where,$data,'siswa');
                    $this->session->set_flashdata('alert',array('tipe' => 'info', 'isi' => "Data $id berhasil diupdate"));
                    redirect(base_url('admin/verifikasi'));
        break;
      case 'reset' : $data = ['status_verifikasi' => '0','tgl_verif' => ''];
                    $where = ['nisn' => $id ];
                    $this->Model_APS->proses_update($where,$data,'siswa');
                    $this->session->set_flashdata('alert',array('tipe' => 'info', 'isi' => "Data $id berhasil direset"));
                    redirect(base_url('admin/verifikasi'));
        break;
      default : $this->load->view('menu/admin/verifikasi');
                $this->load->view('layout/footer');
    };
    
  }

  function profil($aksi=null){
    switch ($aksi) {
      case 'update' : $data = [
                          'nama' => $this->input->post('nama'),
                          'alamat' => $this->input->post('alamat'),
                          'email' => $this->input->post('email'),
                          'website' => $this->input->post('website'),
                          'telepon' => $this->input->post('telepon'),
                          'th_ajaran' => $this->input->post('th-ajaran'),
                          'panitia' => $this->input->post('panitia'),
                          'instagram' => $this->input->post('instagram'),
                          'avatar' => $this->input->post('avatar'),
                          'tgl_daftar' => date('Y-m-d H:i:s')
                      ];
                      $where = array('id' => '1');
                      $this->Model_APS->proses_update($where,$data,'profil');
                      $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Data berhasil diupdate"));
                      redirect('admin/profil');
        break;
      default : $data['profil'] = $this->Model_APS->tampil_data('profil','id','ASC')->result();
                $this->load->view('menu/profil',$data);
                $this->load->view('layout/footer');
    };
  }

  function data(){
    $this->load->view('menu/admin/data');
    $this->load->view('layout/footer');
  }

  function akun(){
    $data['akuns'] = $this->Model_APS->tampil_data('akun','id','ASC')->result();
    $this->load->view('menu/akun',$data);
    $this->load->view('layout/footer');
  }

  function edit()
  {
    $data['pdds'] = $this->Model_APS->tampil_data('tbl_pdd','id','ASC')->result();
    $data['agamas'] = $this->Model_APS->tampil_data('tbl_agama','id','ASC')->result();
    $data['phs'] = $this->Model_APS->tampil_data('tbl_penghasilan','id','ASC')->result();
    $data['pks'] = $this->Model_APS->tampil_data('tbl_pekerjaan','id','ASC')->result();
    $this->load->view('form/wizard',$data);
    $this->load->view('layout/footer');
  }
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */