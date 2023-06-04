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

  function unduha()
  {
          $data['siswa'] = $this->Model_APS->edit_data('siswa',array('id_siswa' => $this->session->userdata('id')))->result();
          
            // foreach ($data as $tp) {
            //   $data = array(
            //     'nama_lengkap' => $tp->nama_lengkap,
            //     'nama_panggilan' => $tp->nama_panggilan,
            //     'nisn' => $tp->nisn,
            //     'nik' => $tp->nik,
            //     'jk' => $tp->jk,
            //     'tempat_lahir' => $tp->tempat_lahir,
            //     'prov_lahir' => $tp->prov_lahir,
            //     'tgl_lahir' => $tp->tgl_lahir,
            //     'agama' => $tp->agama,
            //     'kw' => $tp->kw,
            //     'anak_ke' => $tp->anak_ke,
            //     'status_anak' => $tp->status_anak,
            //     'notelp' => $tp->notelp,
            //     'goldar' => $tp->goldar,
            //     'tinggi_badan' => $tp->tinggi_badan,
            //     'berat_badan' => $tp->berat_badan,
            //     'hobi_kes' => $tp->hobi_kes,
            //     'tinggal' => $tp->tinggal,
            //     'nama_ayah' => $tp->nama_ayah,
            //     'ttl_ayah' => $tp->ttl_ayah,
            //     'agama_ayah' => $tp->agama_ayah,
            //     'kw_ayah' => $tp->kw_ayah,
            //     'pdd_ayah' => $tp->pdd_ayah,
            //     'pk_ayah' => $tp->pk_ayah,
            //     'ph_ayah' => $tp->ph_ayah,
            //     'notelp_ayah' => $tp->notelp_ayah,
            //     'status_ayah' => $tp->status_ayah,
            //     'alamat_ortu' => $tp->alamat_ortu,
            //     'nama_ibu' => $tp->nama_ibu,
            //     'ttl_ibu' => $tp->ttl_ibu,
            //     'agama_ibu' => $tp->agama_ibu,
            //     'kw_ibu' => $tp->kw_ibu,
            //     'pdd_ibu' => $tp->pdd_ibu,
            //     'pk_ibu' => $tp->pk_ibu,
            //     'ph_ibu' => $tp->ph_ibu,
            //     'notelp_ibu' => $tp->notelp_ibu,
            //     'status_ibu' => $tp->status_ibu,
            //     'nama_wali' => $tp->nama_wali,
            //     'ttl_wali' => $tp->ttl_wali,
            //     'agama_wali' => $tp->agama_wali,
            //     'kw_wali' => $tp->kw_wali,
            //     'pdd_wali' => $tp->pdd_wali,
            //     'pk_wali' => $tp->pk_wali,
            //     'ph_wali' => $tp->ph_wali,
            //     'notelp_wali' => $tp->notelp_wali,
            //     'hub_wali' => $tp->hub_wali,
            //     'alamat_wali' => $tp->alamat_wali,
            //     'no_pendaftaran' => $tp->no_pendaftaran,
            //     'no_urut' => $tp->no_urut,
            //     'asal' => $tp->asal,
            //     'tgl_no_ijazah' => $tp->tgl_no_ijazah,
            //     'tgl_no_skl' => $tp->tgl_no_skl,
            //     'lama_belajar' => $tp->lama_belajar,
            //     'nopeserta_un' => $tp->nopeserta_un,
            //     'no_skhu' => $tp->no_skhu,
            //     'masuk_kelas' => $tp->masuk_kelas,
            //     'masuk_jalur' => $tp->masuk_jalur,
            //     'masuk_tgl' => $tp->masuk_tgl,
            //     'pindahan_asal' => $tp->pindahan_asal,
            //     'pindahan_alasan' => $tp->pindahan_alasan,
            //     'jml_saudara_kd' => $tp->jml_saudara_kd,
            //     'jml_saudara_tr' => $tp->jml_saudara_tr,
            //     'jml_saudara_ak' => $tp->jml_saudara_ak,
            //     'jarak' => $tp->jarak,
            //     'penyakit' => $tp->penyakit,
            //     'kelainan' => $tp->kelainan,
            //     'bahasa' => $tp->bahasa
            //   );
            // };
        $this->load->view('cetak/1a',$data);
  }

  function unduh()
  {
    $mpdf = new \Mpdf\Mpdf(['format' => 'Legal-P']);
    $data['siswa'] = $this->Model_APS->edit_data('siswa',array('id_siswa' => $this->session->userdata('id')))->result();
    // $mpdf->AddPage('Legal-L');
    $teks = $this->load->view('cetak/1.php',$data,TRUE);
    $mpdf->WriteHTML($teks);
    $this->output->set_header('Content-Type', 'application/pdf');
		$mpdf->Output('unduh biasa.pdf','I'); 
  }

  function unggah($jenis)
  { 
    if (!file_exists('file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran')))) {
      mkdir('file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran')), 0777, true);
    };
    // mkdir('file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran')), 0755);
    $config['upload_path']          = 'file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran').'/');
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 2048;
    switch ($jenis) {
      case 'kk':
        $config['file_name'] = 'KK-'.str_replace(' ','-',$this->session->userdata('nama'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('ukk')) {
          var_dump($this->upload->display_errors());
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
          var_dump($this->upload->display_errors());
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
          var_dump($this->upload->display_errors());
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
            var_dump($this->upload->display_errors());
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
  // dompdf
  function unduhb() {
  $data['siswa'] = $this->Model_APS->edit_data('siswa',array('id_siswa' => $this->session->userdata('id')))->result();

  $this->load->library('pdf');
  $this->pdf->setPaper('Legal', 'portrait');
  $this->pdf->load_html($this->load->view('cetak/1',$data,TRUE));
  $this->pdf->render();
    // Output the generated PDF to Browser
  $this->pdf->stream('unduh B.pdf', array("Attachment" => false));
    
  }
}


/* End of file Cetak.php */
/* Location: ./application/controllers/Cetak.php */