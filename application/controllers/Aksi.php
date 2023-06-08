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
    if($this->session->userdata('status') == ""){
      redirect(base_url());
  };
  }

  public function index()
  {
    // 
  }

  function all(){
		$data['data'] = $this->Model_APS->tampil_data_seleksi('id_siswa,nama_lengkap,no_pendaftaran,nisn,tgl_siswa','siswa','tgl_siswa','DESC')->result_array();
		echo json_encode($data);
  }

  function details(){
		$data['data'] = $this->Model_APS->tampil_data_seleksi('*','siswa','tgl_siswa','DESC')->result_array();
		echo json_encode($data);
  }

  function datasiswa($Id){
    $where = array('id_siswa' => $Id);
		$data['data'] = $this->Model_APS->edit_data('siswa',$where)->result_array();
		echo json_encode($data);
  }

  function datasendiri(){
    $where = array('id_siswa' => $this->session->userdata('id'));
		$data['data'] = $this->Model_APS->edit_data('siswa',$where)->result_array();
		echo json_encode($data);
  }
  
  function tambahakun(){
    if($this->session->userdata('role') < "1"){
      redirect(base_url("auth"));
    } else {
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
  };
  }
  
  // ubah
  function updateakun($Id=null){
    if($this->session->userdata('role') < "1"){
      redirect(base_url("auth"));
    } else {
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
  };
  }
  // hapus
  function hapusakun($Id){
    if($this->session->userdata('role') < "1"){
      redirect(base_url("auth"));
    } else {
    $where = array('id_siswa' => $Id);
    $this->Model_APS->hapus_data($where,'siswa');
    $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Data berhasil dihapus"));
      redirect('admin/akunsiswa');
    };
  }

  function unggah($jenis)
  { 
    if (!file_exists('file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran')))) {
      mkdir('file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran')), 0755, true);
    };
    // mkdir('file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran')), 0755 0777);
    $config['upload_path']          = 'file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran').'/');
    $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG|PDF';
    $config['overwrite']            = FALSE;
    $config['max_size']             = 2048;
    switch ($jenis) {
      case 'kk':
        $config['file_name'] = 'KK-'.str_replace(' ','-',$this->session->userdata('nama'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('ukk')) {
          json_encode($this->upload->display_errors());
        } else {
          $where = array('id_siswa' => $this->session->userdata('id'));
          $this->Model_APS->proses_update($where,array('kk' => $this->upload->data('orig_name')),'siswa');
          $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "KK berhasil diupload"));
        };
        break;
      case 'akta':
        $config['file_name'] = 'AKTA-'.str_replace(' ','-',$this->session->userdata('nama'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('akta')) {
          echo $this->upload->display_errors();
        } else {
          $where = array('id_siswa' => $this->session->userdata('id'));
          $this->Model_APS->proses_update($where,array('akta' => $this->upload->data('orig_name')),'siswa');
          $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Akta berhasil diupload"));
        };
        break;
      case 'ijazah':
        $config['file_name'] = 'IJAZAH-'.str_replace(' ','-',$this->session->userdata('nama'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('ijazah')) {
          echo $this->upload->display_errors();
        } else {
          $where = array('id_siswa' => $this->session->userdata('id'));
          $this->Model_APS->proses_update($where,array('ijazah' => $this->upload->data('orig_name')),'siswa');
          $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "Ijazah berhasil diupload"));
        };
        break;
      case 'bukti':
          $config['file_name'] = 'BUKTI-'.str_replace(' ','-',$this->session->userdata('nama'));
          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('bukti')) {
            echo $this->upload->display_errors();
          } else {
            $where = array('id_siswa' => $this->session->userdata('id'));
            $this->Model_APS->proses_update($where,array('bukti' => $this->upload->data('orig_name')),'siswa');
            $this->session->set_flashdata('alert',array('tipe' => 'success', 'isi' => "bukti berhasil diupload"));
          };
        break;
      default:
        //
    };
    
  }

  function unduhbiasa()
  {
    $mpdf = new \Mpdf\Mpdf(['format' => 'Legal-P']);
    $data['siswa'] = $this->Model_APS->edit_data('siswa',array('id_siswa' => $this->session->userdata('id')))->result();
    // $mpdf->AddPage('Legal-L');
    $teks = $this->load->view('cetak/1b.php',$data,TRUE);
    $mpdf->WriteHTML($teks);
    $this->output->set_header('Content-Type', 'application/pdf');
		$mpdf->Output('unduh biasa.pdf','I'); 
  }

  // dompdf
  function unduh($id=null,$ttd=null) {
    switch ($ttd) {
      case "ayah" : $data['siswa'] = $this->db->query('SELECT *,nama_ayah AS ttdnama,ttl_ayah AS ttdttl,pk_ayah AS ttdpk,alamat_ortu as ttdalamat, notelp_ayah as ttdtelp, agama_ayah AS ttdagama FROM siswa WHERE no_pendaftaran='.$id)->result();
        break;
      case "ibu" : $data['siswa'] = $this->db->query('SELECT *,nama_ibu AS ttdnama,ttl_ibu AS ttdttl,pk_ibu AS ttdpk,alamat_ortu as ttdalamat, notelp_ibu as ttdtelp, agama_ibu AS ttdagama FROM siswa WHERE no_pendaftaran='.$id)->result();
        break;
      case "wali" : $data['siswa'] = $this->db->query('SELECT *,nama_wali AS ttdnama,ttl_wali AS ttdttl,pk_wali AS ttdpk,desa_wali as ttdalamat, notelp_wali as ttdtelp, agama_wali AS ttdagama FROM siswa WHERE no_pendaftaran='.$id)->result();
        break;
      default : 
      
  };

  $this->load->library('pdf');
  $this->pdf->setPaper('Legal', 'portrait');
  $this->pdf->load_html($this->load->view('cetak/1',$data,TRUE));
  $this->pdf->add_info('Bukti Daftar Ulang', 'SMA Negeri 1 Srengat');
  $this->pdf->render();
    // Output the generated PDF to Browser
  $this->pdf->stream('bukti '.$id.'.pdf', array("Attachment" => false));
    
  }
}


/* End of file Cetak.php */
/* Location: ./application/controllers/Cetak.php */