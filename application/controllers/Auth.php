<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_APS');
    }
    function index()
    {
        $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
        $data['alert'] = 0;
        $this->load->view('layout/header', $data);
        $this->load->view('v_login', $data);
    }
    function login()
    {
        $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $where = array(
            'username' => $user,
            'password' => $pass
        );
        $stat = $this->Model_APS->cek_akun('akun', $where)->num_rows();
        if ($stat > 0) {
            $data = $this->Model_APS->cek_akun('akun', $where)->result();
            foreach ($data as $data);
            $datalogin = array(
                'id' => $data->Id,
                'nama' => $data->nama,
                'username' => $data->username,
                'password' => $data->password,
                'role' => $data->role,
                'status' => "masuk"
            );
            $this->session->set_userdata($datalogin);
            header('location:' . base_url() . 'dashboard');
        } else {
            $data['alert'] = 1;
            $this->load->view('layout/header', $data);
            $this->load->view('v_login', $data);
        }
    }

    function loginsori()
    {
        $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
        $nopend = $this->input->post('nopend');
        $pass = $this->input->post('pass');
        $where = array(
            'no_pendaftaran' => $nopend,
            'password' => $pass
        );
        $stat = $this->Model_APS->cek_akun('siswa', $where)->num_rows();
        if ($stat > 0) {
            $data = $this->Model_APS->cek_akun('siswa', $where)->result();
            foreach ($data as $data);
            $datalogin = array(
                'id' => $data->id_siswa,
                'nama' => $data->nama_lengkap,
                'no_pendaftaran' => $data->no_pendaftaran,
                'password' => $data->password,
                'role' => $data->role,
                'status' => "masuk"
            );
            $this->session->set_userdata($datalogin);
            header('location:' . base_url() . 'dashboard');
        } else {
            $data['alert'] = 1;
            $data['infos'] = $this->Model_APS->tampil_data('tbl_info', 'id', 'ASC')->result();
            $data['reviews'] = $this->Model_APS->get_review_all();
            $data['profil'][0]->depan == '1' ? $view = 'home' : $view = 'home2';
            $this->load->view($view, $data);
        }
    }
    function logins()
    {
        $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
        $jalur = $this->input->post('jalur');
        $pass = $this->input->post('pass');
        $where = array(
            'masuk_jalur' => $jalur,
            'password' => $pass
        );
        $stat = $this->Model_APS->cek_akun('siswa', $where)->num_rows();
        if ($stat > 0) {
            $data = $this->Model_APS->cek_akun('siswa', $where)->result();
            foreach ($data as $data);
            $datalogin = array(
                'id_siswa' => $data->Id,
                'id' => $data->id_siswa,
                'nama' => $data->nama_lengkap,
                'no_pendaftaran' => $data->no_pendaftaran,
                'nisn' => $data->nisn,
                'masuk_jalur' => $data->masuk_jalur,
                'no_urut' => $data->no_urut,
                'password' => $data->password,
                'role' => $data->role,
                'ayah' => $data->nama_ayah,
                'ibu' => $data->nama_ibu,
                'wali' => $data->nama_wali,
                'status' => "masuk"
            );
            $this->session->set_userdata($datalogin);
            header('location:' . base_url() . 'dashboard');
        } else {
            $data['alert'] = 1;
            $data['infos'] = $this->Model_APS->tampil_data('tbl_info', 'id', 'ASC')->result();
            $data['jms'] = $this->Model_APS->tampil_data('tbl_jalur', 'id', 'ASC')->result();
            $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
            $data['reviews'] = $this->Model_APS->get_review_all();
            $data['user'] = array(
                'jalur' => $jalur,
                'pass' => $pass
            );
            $this->load->view('layout/header', $data);
            $data['profil'][0]->depan == '1' ? $view = 'home' : $view = 'home2';
            $this->load->view($view, $data);
        }
    }

    function logout()
    {
        $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
        $this->session->sess_destroy();
        header('location:' . base_url() . '');
    }
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
