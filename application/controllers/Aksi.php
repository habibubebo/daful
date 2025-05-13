<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Aksi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
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
          if (empty($nisn) || empty($jalur) || empty($no_urut) || empty($nama)) {
            $this->session->set_flashdata('alert', array('tipe' => 'danger', 'isi' => "Data tidak boleh kosong!"));
            redirect('admin/akunsiswa');
          } else if ($this->Model_APS->cek_akun('siswa', $cek)->num_rows() > 0) {
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
            $ekstensi  = explode('.', $_FILES['file']['name']);
            if (empty($file)) {
              $this->session->set_flashdata('alert', array('tipe' => 'danger', 'isi' => "File tidak boleh kosong!"));
              redirect('admin/akunsiswa');
            } else {
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

  function wunduh()
  {
    //$this->load->library('word');
    //$data['profil'] = $this->Model_APS->tampil_data('profil', 'id', 'ASC')->result();
    //$data['siswa'] = $this->db->query('SELECT *,nama_ayah AS ttdnama,ttl_ayah AS ttdttl,pk_ayah AS ttdpk,alamat_ortu as ttdalamat, notelp_ayah as ttdtelp, agama_ayah AS ttdagama FROM siswa WHERE nisn=3')->result();
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $section = $phpWord->addSection();
    $section->addText('Hello World !');
    $writer = new \PhpOffice\PhpWord\Writer\Word2007($phpWord);
    $filename = 'simple';
    header('Content-Disposition: attachment;filename="' . $filename . '.pdf"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
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
    $logo = file_get_contents(base_url() . 'assets/img/logo/' . $data['profil'][0]->avatar);
    $logodata = base64_encode($logo);
    $pathtologo = '<img width="70px" src="data:image/png;base64, ' . $logodata . '">';
    $data['imgpath'] = array('path' => $pathtoimage, 'logo' => $pathtologo);
    $this->load->library('pdf');
    $this->pdf->setPaper('Folio', 'portrait');
    $this->pdf->load_html($this->load->view('cetak/output', $data, TRUE));
    $this->pdf->render();
    $this->pdf->stream('Bukti Daftar Ulang ' . $data['siswa'][0]->nama_lengkap . '.pdf', array("Attachment" => false));
  }

  public function upload()
  {
    $description = $this->input->post('description');

    // Validasi deskripsi
    if (empty($description)) {
      $response = array(
        'status' => 'error',
        'message' => 'Description is required.'
      );
      echo json_encode($response);
      return;
    }

    // Konfigurasi upload
    $config['upload_path'] = './assets/img/' . $description . '/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp|ico|JPG|JPEG|PNG|WEBP|ICO';
    $config['max_size'] = 2048; // Maksimal ukuran file dalam KB
    $config['overwrite'] = true;

    // Buat folder jika belum ada
    if (!is_dir($config['upload_path'])) {
      mkdir($config['upload_path'], 0755, true);
    }

    $this->upload->initialize($config);

    // Cek apakah file diupload
    if (empty($_FILES['file']['name'])) {
      $response = array(
        'status' => 'error',
        'message' => 'You did not select a file to upload.'
      );
      echo json_encode($response);
      return;
    }

    if ($this->upload->do_upload('file')) {
      // Jika upload berhasil
      $upload_data = $this->upload->data();
      $response = array(
        'status' => 'success',
        'message' => 'File uploaded successfully.',
        'file_name' => $upload_data['file_name'],
        'description' => $description
      );
      if ($description == 'logo') {
        $this->Model_APS->proses_update(array('id' => 1), array('avatar' => $upload_data['file_name']), 'profil');
      } else if ($description == 'favicon') {
        $this->Model_APS->proses_update(array('id' => 1), array('icon' => $upload_data['file_name']), 'profil');
      } else if ($description == 'banner') {
        $this->Model_APS->proses_update(array('id' => 1), array('banner' => $upload_data['file_name']), 'profil');
      } 
      else if ($description == 'background') {
        $this->Model_APS->proses_update(array('id' => 1), array('background' => $upload_data['file_name']), 'profil');
      };
    } else {
      // Jika upload gagal
      $response = array(
        'status' => 'error',
        'message' => $this->upload->display_errors()
      );
    }
    echo json_encode($response);
  }

  public function review_form()
  {
    $id_siswa = $this->session->userdata('id');
    $data['review'] = $this->Model_APS->get_review_siswa($id_siswa);
    $this->load->view('menu/review',$data);
  }

  public function simpan_review()
  {
    $this->form_validation->set_rules('rating', 'Rating', 'required|numeric|greater_than_equal_to[0.5]|less_than_equal_to[5]');
    $this->form_validation->set_rules('review_text', 'Review Text', 'required|max_length[500]');

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors());
      redirect('dashboard');
    } else {
      $data = array(
        'id_siswa' => $this->session->userdata('id'), 
        'rating' => $this->input->post('rating'),
        'review_text' => $this->input->post('review_text')
      );

      $result = $this->Model_APS->simpan_feedback_review($data);
      // echo $result;
      if ($result) {
        $this->session->set_flashdata('success', 'Terima kasih! Review Anda berhasil disimpan.');
        redirect('dashboard'); 
      } else {
        $this->session->set_flashdata('error', "Maaf, terjadi kesalahan saat menyimpan review Anda.");
        redirect('dashboard');
      }
    }
  }

  public function review()
  {
    $id_siswa = $this->session->userdata('id');
    $data['review'] = $this->Model_APS->get_review_siswa($id_siswa);
    $this->load->view('menu/lihat_review', $data);
  }

  public function hapus_review()
  {
    $id_siswa = $this->session->userdata('id');
    $result = $this->Model_APS->hapus_feedback_review($id_siswa);
    if ($result) {
      $this->session->set_flashdata('success', 'Review Anda berhasil dihapus.');
      redirect('dashboard');
    } else {
      $this->session->set_flashdata('error', "Maaf, terjadi kesalahan saat menghapus review Anda.");
      redirect('dashboard');
    }
  }
}


/* End of file Aksi.php */
/* Location: ./application/controllers/Aksi.php */