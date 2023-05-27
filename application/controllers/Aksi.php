<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Cetak
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

class Aksi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    // Menambahkan Model-------------------------------------------------------------------------------------
    $this->load->model('Model_APS');
  }

  public function index()
  {
    // 
  }

  function cetak()
	{
		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('cetak', [], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}

  function all(){
		$data['data'] = $this->Model_APS->tampil_data_seleksi('id_siswa,nama_lengkap,no_pendaftaran,nisn,tgl_siswa','siswa','tgl_siswa','DESC')->result_array();
		echo json_encode($data);
  }

  function datasiswa($Id){
    $where = array('id_siswa' => $Id);
		$data['data'] = $this->Model_APS->edit_data('siswa',$where)->result_array();
		echo json_encode($data);
  }

  function tambahakun(){
    $np = $this->input->post('nopend');
    $nisn = $this->input->post('nisn');
    $nama = $this->input->post('nama');
    $cek = array('no_pendaftaran' => $np);
    if($this->Model_APS->cek_akun('siswa',$cek)->num_rows() > 0){
      $this->session->set_flashdata('alert',array('tipe' => 'danger', 'isi' => "Data $np dengan NISN $nisn gagal diinput, duplikasi"));
      redirect("admin/akunsiswa");    
    } else {
      $data = array(
        'admin' => $this->session->userdata('id'),
        'no_pendaftaran' => $np,
        'password' => $nisn,
        'nisn' => $nisn,
        'nama_lengkap' => $nama,
        'tgl_siswa' => date('Y-m-d H:i:s')
      );
      $this->Model_APS->simpan_data($data,'siswa');
      $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Data $np dengan NISN $nisn berhasil diinput"));
      redirect('admin/akunsiswa');
    };
    
  }
  
  // ubah
  function updateakun($Id=null){
    $Id = $this->input->post('id-siswa');
    $np = $this->input->post('nopendEdit');
    $nisn = $this->input->post('nisnEdit');
    $nama = $this->input->post('namaEdit');

    $data = array(
      'no_pendaftaran' => $np,
      'password' => $nisn,
      'nisn' => $nisn,
      'nama_lengkap' => $nama
    );
    $where = array('id_siswa' => $Id);
    $this->Model_APS->proses_update($where,$data,'siswa');
    $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Data $np dengan NISN $nisn berhasil diedit"));
      redirect('admin/akunsiswa');
  }
  // hapus
  function hapusakun($Id){
    $where = array('id_siswa' => $Id);
    $this->Model_APS->hapus_data($where,'siswa');
    $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Data berhasil dihapus"));
      redirect('admin/akunsiswa');

  }
}


/* End of file Cetak.php */
/* Location: ./application/controllers/Cetak.php */