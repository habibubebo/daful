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
    // Menambahkan Model
    $this->load->model('Model_APS');
    if ($this->session->userdata('status') == "") {
      redirect(base_url());
    };
  }

  public function index()
  {
    redirect(base_url());
  }

  function data($jenis = null, $id = null)
  {
    switch ($jenis) {
      case 'semua':
        $data['data'] = $this->Model_APS->tampil_data_seleksi('id_siswa,nama_lengkap,masuk_jalur,no_urut,nisn,tgl_siswa', 'siswa', 'tgl_siswa', 'DESC')->result_array();
        echo json_encode($data);
        break;
      case 'detail':
        if ($this->session->userdata('role') < "1") {
          redirect(base_url("auth"));
        } else {
          $data['data'] = $this->Model_APS->tampil_data_seleksi('*', 'siswa', 'tgl_verif', 'DESC')->result_array();
          echo json_encode($data);
        };
        break;
      case 'siswa':
        $where = array('id_siswa' => $id);
        $data['data'] = $this->Model_APS->edit_data('siswa', $where)->result_array();
        echo json_encode($data);
        break;
      case 'sendiri':
        if ($this->session->userdata('role') > '0') {
          $where = array('id_siswa' => $id);
        } else $where = array('id_siswa' => $this->session->userdata('id'));
        $data['data'] = $this->Model_APS->edit_data('siswa', $where)->result_array();
        echo json_encode($data);
        break;
      default:
    };
  }

  function akun($jenis = null, $Id = null)
  {
    switch ($jenis) {
      case 'tambah':
        if ($this->session->userdata('role') < "1") {
          redirect(base_url("auth"));
        } else {
          $jalur = $this->input->post('masuk-jalur');
          $no_urut = $this->input->post('no-urut');
          $nama = $this->input->post('nama');
          $nisn = $this->input->post('nisn');
          $cek = array('masuk_jalur' => $jalur, 'no_urut' => $no_urut, 'nisn' => $nisn);
          if ($this->Model_APS->cek_akun('siswa', $cek)->num_rows() > 0) {
            $this->session->set_flashdata('alert', array('tipe' => 'danger', 'isi' => "Data $jalur dengan No. Urut $no_urut gagal diinput, duplikasi"));
            redirect("admin/akunsiswa");
          } else {
            $data = array(
              'admin' => $this->session->userdata('id'),
              'masuk_jalur' => $jalur,
              'password' => $nisn,
              'no_urut' => $no_urut,
              'nisn' => $nisn,
              'nama_lengkap' => $nama,
              'bahasa' => '0',
              'tgl_siswa' => date('Y-m-d H:i:s')
            );
            $this->Model_APS->simpan_data($data, 'siswa');
            $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "Data $jalur dengan No. Urut $no_urut berhasil diinput"));
            redirect('admin/akunsiswa');
          };
        };
        break;
      case 'import':
        if ($this->session->userdata('role') < "1") {
          redirect(base_url("auth"));
        } else {
          if (isset($_POST['import'])) {
            $file = $_FILES['file']['tmp_name'];
            // Medapatkan ekstensi file csv yang akan diimport.
            $ekstensi  = explode('.', $_FILES['file']['name']);
            // Tampilkan peringatan jika submit tanpa memilih menambahkan file.
            if (empty($file)) {
              echo 'File tidak boleh kosong!';
            } else {
              // Validasi apakah file yang diupload benar-benar file csv.
              if (strtolower(end($ekstensi)) === 'csv' && $_FILES["file"]["size"] > 0) {
                $i = 0;
                $handle = fopen($file, "r");
                while (($row = fgetcsv($handle, 2048, ';'))) {
                  $i++;
                  if ($i == 1) continue;
                  // Data yang akan disimpan ke dalam databse
                  $data = array(
                    'masuk_jalur' => $row[1],
                    'no_urut' => $row[2],
                    'nama_lengkap' => $row[3],
                    'nisn' => $row[4],
                    'password' => $row[5],
                    'bahasa' => '0',
                    'admin' => $this->session->userdata('id'),
                    'tgl_siswa' => date('Y-m-d H:i:s')
                  );
                  $this->Model_APS->simpan_data($data, 'siswa');
                };
                fclose($handle);
                redirect('admin/akunsiswa');
              } else {
                echo 'Format file tidak valid!';
              }
            }
          }
        };
        break;
      case 'update':
        if ($this->session->userdata('role') < "1") {
          redirect(base_url("auth"));
        } else {
          $Id = $this->input->post('id-siswa');
          $jalur = $this->input->post('masuk-jalurEdit');
          $no_urut = $this->input->post('no-urutEdit');
          $nama = $this->input->post('namaEdit');
          $nisn = $this->input->post('nisnEdit');
          $data = array(
            'masuk_jalur' => $jalur,
            'password' => $nisn,
            'no_urut' => $no_urut,
            'nisn' => $nisn,
            'nama_lengkap' => $nama
          );
          $where = array('id_siswa' => $Id);
          $this->Model_APS->proses_update($where, $data, 'siswa');
          $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "Data $np dengan NISN $nisn berhasil diedit"));
          redirect('admin/akunsiswa');
        };
        break;
      case 'hapus':
        if ($this->session->userdata('role') < "1") {
          redirect(base_url("auth"));
        } else {
          $where = array('id_siswa' => $Id);
          $this->Model_APS->hapus_data($where, 'siswa');
          $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "Data berhasil dihapus"));
          redirect('admin/akunsiswa');
        };
        break;
      case 'hapus_semua':
        $this->db->empty_table('siswa');
        $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "Data siswa berhasil dihapus seluruhnya"));
        redirect('admin/data');
        break;
      default:
    };
  }

  function unggah($jenis)
  {
    if (!file_exists('file/uploads/' . str_replace(' ', '-', $this->session->userdata('masuk_jalur')) . str_replace(' ', '-', $this->session->userdata('no_urut')))) {
      mkdir('file/uploads/' . str_replace(' ', '-', $this->session->userdata('masuk_jalur')) . str_replace(' ', '-', $this->session->userdata('no_urut')), 0755, true);
    };
    // mkdir('file/uploads/'.str_replace(' ','-',$this->session->userdata('no_pendaftaran')), 0755 0777);
    $config['upload_path']          = 'file/uploads/' . str_replace(' ', '-', $this->session->userdata('masuk_jalur')) . str_replace(' ', '-', $this->session->userdata('no_urut') . '/');
    $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG|PDF';
    $config['overwrite']            = TRUE;
    $config['max_size']             = 2048;
    switch ($jenis) {
      case 'kk':
        $config['file_name'] = 'KK-' . str_replace(' ', '-', $this->session->userdata('nama'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('ukk')) {
          json_encode($this->upload->display_errors());
        } else {
          $where = array('id_siswa' => $this->session->userdata('id'));
          $this->Model_APS->proses_update($where, array('kk' => $this->upload->data('orig_name')), 'siswa');
          $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "KK berhasil diupload"));
          $data['upload_data'] = $this->upload->data();
          json_encode($data);
        };
        break;
      case 'akta':
        $config['file_name'] = 'AKTA-' . str_replace(' ', '-', $this->session->userdata('nama'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('akta')) {
          echo $this->upload->display_errors();
        } else {
          $where = array('id_siswa' => $this->session->userdata('id'));
          $this->Model_APS->proses_update($where, array('akta' => $this->upload->data('orig_name')), 'siswa');
          $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "Akta berhasil diupload"));
        };
        break;
      case 'ijazah':
        $config['file_name'] = 'IJAZAH-' . str_replace(' ', '-', $this->session->userdata('nama'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('ijazah')) {
          echo $this->upload->display_errors();
        } else {
          $where = array('id_siswa' => $this->session->userdata('id'));
          $this->Model_APS->proses_update($where, array('ijazah' => $this->upload->data('orig_name')), 'siswa');
          $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "Ijazah berhasil diupload"));
        };
        break;
      case 'bukti':
        $config['file_name'] = 'BUKTI-' . str_replace(' ', '-', $this->session->userdata('nama'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('bukti')) {
          echo $this->upload->display_errors();
        } else {
          $where = array('id_siswa' => $this->session->userdata('id'));
          $this->Model_APS->proses_update($where, array('bukti' => $this->upload->data('orig_name')), 'siswa');
          $this->session->set_flashdata('alert', array('tipe' => 'success', 'isi' => "bukti berhasil diupload"));
        };
        break;
      default:
        //
    };
  }

  function unduhbiasa()
  {
    // $mpdf = new \Mpdf\Mpdf(['format' => 'Legal-P']);
    $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
    $data['siswa'] = $this->db->query('SELECT *,nama_ayah AS ttdnama,ttl_ayah AS ttdttl,pk_ayah AS ttdpk,alamat_ortu as ttdalamat, notelp_ayah as ttdtelp, agama_ayah AS ttdagama FROM siswa WHERE nisn=3')->result();
    // echo base_url().'assets/qr/'.$data['siswa'][0]->masuk_jalur.$data['siswa'][0]->no_urut.'.png';
    $this->load->view('cetak/output', $data);
    // $mpdf->AddPage('Legal-L');
    // $teks = $this->load->view('cetak/1b.php',$data,TRUE);
    // $mpdf->WriteHTML($teks);
    // $this->output->set_header('Content-Type', 'application/pdf');
    // $mpdf->Output('unduh biasa.pdf','I'); 
  }

  // dompdf
  function unduh($id = null, $ttd = null)
  {
    switch ($ttd) {
      case "ayah":
        $data['siswa'] = $this->db->query('SELECT *,nama_ayah AS ttdnama,ttl_ayah AS ttdttl,pk_ayah AS ttdpk,alamat_ortu as ttdalamat, notelp_ayah as ttdtelp, agama_ayah AS ttdagama FROM siswa WHERE nisn=' . $id)->result();
        break;
      case "ibu":
        $data['siswa'] = $this->db->query('SELECT *,nama_ibu AS ttdnama,ttl_ibu AS ttdttl,pk_ibu AS ttdpk,alamat_ortu as ttdalamat, notelp_ibu as ttdtelp, agama_ibu AS ttdagama FROM siswa WHERE nisn=' . $id)->result();
        break;
      case "wali":
        $data['siswa'] = $this->db->query('SELECT *,nama_wali AS ttdnama,ttl_wali AS ttdttl,pk_wali AS ttdpk,desa_wali as ttdalamat, notelp_wali as ttdtelp, agama_wali AS ttdagama FROM siswa WHERE nisn=' . $id)->result();
        break;
      default:
    };
    $data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
    $image = file_get_contents(base_url() . 'assets/qr/' . $data['siswa'][0]->nisn . '.png');
    $imagedata = base64_encode($image);
    $pathtoimage = '<img width="70px" src="data:image/png;base64, ' . $imagedata . '">';
    $logo = file_get_contents(base_url() . 'assets/img/' . $data['profil'][0]->avatar);
    $logodata = base64_encode($logo);
    $pathtologo = '<img width="70px" src="data:image/png;base64, ' . $logodata . '">';
	$foto = file_get_contents(base_url() . 'assets/foto/' . $data['siswa'][0]->nisn . '.png');
    $fotodata = base64_encode($foto);
    $pathtofoto = '<img width="70px" src="data:image/png;base64, ' . $fotodata . '">';
    $data['imgpath'] = array('path' => $pathtoimage, 'logo' => $pathtologo, 'foto' => $pathtofoto);
    $this->load->library('pdf');
    $this->pdf->setPaper('Folio', 'portrait');
    $this->pdf->load_html($this->load->view('cetak/output', $data, TRUE));
    $this->pdf->render();
    $this->pdf->stream('bukti daftar ulang ' . $id . '.pdf', array("Attachment" => false));
  }
}


/* End of file Aksi.php */
/* Location: ./application/controllers/Aksi.php */