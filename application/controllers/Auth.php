<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Login
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

 class auth extends CI_Controller 
 {
  // Fungsi __construct() Untuk pendeklarasian awal.------------------------------------------------------------
      function __construct(){
          parent::__construct();
          // Menambahkan Model-------------------------------------------------------------------------------------
          $this->load->model('Model_APS');
      }
  // Fungsi Index() Untuk menjalankan baris kode secara otomatis ketika program berjalan-------------------------
      function index(){
          // Menambahkan/memanggil file view (v_login.php)-------------------------------------------------------
          $data['alert'] = 0;    
          $this->load->view('v_login',$data);
      }
  // Fungsi Auth() Untuk memeriksa / memproses inputan yang dikirim dari form login (v_login.php)----------------
  function login(){
    // Membuat variabel untuk menampung hasil inputan dari form login (v_login.php)------------------------
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
    // Pemeriksaan Antara inputan dengan data yang ada di database-----------------------------------------
        $where = array(
            // 'Field_database' => $var_penampung----------------------------------------------------------
                'username' => $user,
                'password' => $pass
        );
    // Membuat variabel statement(stat) yang berisi hasil dari pemeriksaan ke database---------------------
     // Fungsi cek_akun($where) untuk mengecek kondisi yang diberikan dengan data yang ada di tabel akun---
     // Fungsi num_rows() akan menghasilkan nilai 0 jika tidak ada data / 1 jika ada data yang sesuai -----
        $stat = $this->Model_APS->cek_akun('akun',$where)->num_rows();
    // Membuat kondisi untuk memeriksa hasil statement-----------------------------------------------------
        if ($stat > 0) {
        // Membuat variabel list untuk menampung data kondisi yang diberikan------------------------------- 
            $data = $this->Model_APS->cek_akun('akun',$where)->result();
        // Membuat pengulangan untuk variabel $data agar data dapat dijabarkan-----------------------------
            foreach ($data as $data);
        // Membuat variabel untuk menampung data akun yang login-------------------------------------------
            $datalogin = array(
                // 'Field_database' => $var_penampung_data_kondisi-----------------------------------------
                'id'=> $data->Id,
                'nama'=> $data->nama,
                'username'=> $data->username,
                'password'=> $data->password,
                'role'=> $data->role,
                'status' => "masuk"
            );
        // Membuat Session untuk mengatur data user yang login---------------------------------------------
            $this->session->set_userdata($datalogin);
        // Memanggil fungsi header() untuk mengarahkan halaman---------------------------------------------
            header('location:'.base_url().'dashboard');
            
    }else{
            $data['alert'] = 1;    
          $this->load->view('v_login',$data);
    }
}

function logins(){
    // Membuat variabel untuk menampung hasil inputan dari form login (v_login.php)------------------------
        $nopend = $this->input->post('nopend');
        $pass = $this->input->post('pass');
    // Pemeriksaan Antara inputan dengan data yang ada di database-----------------------------------------
        $where = array(
            // 'Field_database' => $var_penampung----------------------------------------------------------
                'no_pendaftaran' => $nopend,
                'password' => $pass
        );
    // Membuat variabel statement(stat) yang berisi hasil dari pemeriksaan ke database---------------------
     // Fungsi cek_akun($where) untuk mengecek kondisi yang diberikan dengan data yang ada di tabel akun---
     // Fungsi num_rows() akan menghasilkan nilai 0 jika tidak ada data / 1 jika ada data yang sesuai -----
        $stat = $this->Model_APS->cek_akun('siswa',$where)->num_rows();
    // Membuat kondisi untuk memeriksa hasil statement-----------------------------------------------------
        if ($stat > 0) {
        // Membuat variabel list untuk menampung data kondisi yang diberikan------------------------------- 
            $data = $this->Model_APS->cek_akun('siswa',$where)->result();
        // Membuat pengulangan untuk variabel $data agar data dapat dijabarkan-----------------------------
            foreach ($data as $data);
        // Membuat variabel untuk menampung data akun yang login-------------------------------------------
            $datalogin = array(
                // 'Field_database' => $var_penampung_data_kondisi-----------------------------------------
                'id'=> $data->id_siswa,
                'nama'=> $data->nama_lengkap,
                'no_pendaftaran'=> $data->no_pendaftaran,
                'password'=> $data->password,
                'role'=> $data->role,
                'status' => "masuk"
            );
        // Membuat Session untuk mengatur data user yang login---------------------------------------------
            $this->session->set_userdata($datalogin);
        // Memanggil fungsi header() untuk mengarahkan halaman---------------------------------------------
            header('location:'.base_url().'dashboard');
            
    }else{
            $data['alert'] = 1;    
            $data['infos'] = $this->Model_APS->tampil_data('tbl_info','id','ASC')->result();
            $this->load->view('home',$data);
    }
}

// Membuat fungsi logout() untuk keluar akun
function logout(){
    // Memanggil fungsi session_destroy() untuk mengahapus data login--------------------------------------
        $this->session->sess_destroy();
    // Memanggil fungsi header() untuk mengarahkan halaman---------------------------------------------
        header('location:'.base_url().'');
}
  
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
