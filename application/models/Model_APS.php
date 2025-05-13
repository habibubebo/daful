<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Model_APS
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Model_APS extends CI_Model
{

    public function index()
    {
        // 
    }

    function cek_akun($tabel, $kondisi)
    {
        return $this->db->get_where($tabel, $kondisi);
    }
    function tampil_data($nm_table, $field, $order)
    {
        $this->db->select('*');
        $this->db->from($nm_table);
        $this->db->order_by($field, $order);
        return $this->db->get();
    }
    function tampil_data_join($sel, $nm_tabel, $nm_tabel_join, $kondisi, $field, $order)
    {
        $this->db->select($sel);
        $this->db->from($nm_tabel);
        $this->db->join($nm_tabel_join, $kondisi);
        $this->db->order_by($field, $order);
        return $query = $this->db->get();
    }
    function tampil_data_join2($sel, $nm_tabel, $nm_tabel_join, $kondisi, $nm_tabel_join2, $kondisi2, $field, $order)
    {
        $this->db->select($sel);
        $this->db->from($nm_tabel);
        $this->db->join($nm_tabel_join, $kondisi);
        $this->db->join($nm_tabel_join2, $kondisi2);
        $this->db->order_by($field, $order);
        return $query = $this->db->get();
    }
    function simpan_data($data, $nm_table)
    {
        $this->db->insert($nm_table, $data);
    }
    function hapus_data($kondisi, $nm_table)
    {
        $this->db->where($kondisi);
        $this->db->delete($nm_table);
    }
    function edit_data($nm_table, $kondisi)
    {
        return $this->db->get_where($nm_table, $kondisi);
    }
    function sel_edit_data_join($sel, $nm_tabel, $nm_tabel_join, $on, $kondisi)
    {
        $this->db->select($sel);
        $this->db->from($nm_tabel);
        $this->db->join($nm_tabel_join, $on);
        $this->db->where($kondisi);
        return $query = $this->db->get();
    }

    function edit_data_join2($sel, $nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $kondisi)
    {
        $this->db->select($sel);
        $this->db->from($nm_tabel);
        $this->db->join($nm_tabel_join, $on);
        $this->db->join($nm_tabel_join2, $on2);
        $this->db->where($kondisi);
        return $query = $this->db->get();
    }
    function proses_update($kondisi, $data, $nm_table)
    {
        $this->db->where($kondisi);
        $this->db->update($nm_table, $data);
    }
    function proses_update_all($data, $nm_table)
    {
        $this->db->update($nm_table, $data);
    }
    function tampil_data_seleksi($sel, $nm_table, $field, $order)
    {
        $this->db->select($sel);
        $this->db->from($nm_table);
        $this->db->order_by($field, $order);
        return $this->db->get();
    }
    function update_master($tabel, $id, $field, $value)
    {
        $data = array($field => $value);
        $this->db->where('id', $id);
        $this->db->update($tabel, $data);
    }
    //mon maaf males bikin library
    function tgl_id($tanggal)
{
    if (empty($tanggal)) {
        return 'Tanggal tidak valid';
    }

    // Try to parse date as d-m-Y
    $dateTime = DateTime::createFromFormat('d-m-Y', $tanggal);
    $errors = DateTime::getLastErrors();
    if ($dateTime === false || $errors['warning_count'] > 0 || $errors['error_count'] > 0) {
        // If failed, try Y-m-d
        $dateTime = DateTime::createFromFormat('Y-m-d', $tanggal);
        $errors = DateTime::getLastErrors();
        if ($dateTime === false || $errors['warning_count'] > 0 || $errors['error_count'] > 0) {
            return 'Tanggal tidak valid';
        }
    }

    $bulan = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    );

    $hari = $dateTime->format('d');
    $bulanIndex = (int)$dateTime->format('m');
    $tahun = $dateTime->format('Y');

    return $hari . ' ' . $bulan[$bulanIndex] . ' ' . $tahun;
}
    public function qr($kodeqr)
    {
        if (!file_exists('assets/qr/')) {
            mkdir('assets/qr/', 0755, true);
        };
        if ($kodeqr) {
            $filename = 'assets/qr/' . $kodeqr;
            if (!file_exists($filename)) {
                $params['data'] = $kodeqr;
                $params['level'] = 'H';
                $params['size'] = 3;
                $params['savename'] = FCPATH . 'assets/qr/' . $kodeqr . ".png";
                return  $this->ciqrcode->generate($params);
            }
        }
    }

    public function get_review_siswa($id_siswa) {
        $this->db->select('feedbackReview');
        $this->db->where('id_siswa', $id_siswa);
        $query = $this->db->get('siswa');
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            if (!empty($row->feedbackReview)) {
                return json_decode($row->feedbackReview, true);
            }
        }
        
        return null;
    }
    
    public function get_review_all() {
        $this->db->select('nama_lengkap,nisn,notelp,status_verifikasi,masuk_jalur,feedbackReview');
        $query = $this->db->get('siswa');
        
        $result = array();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                if (!empty($row->feedbackReview)) {
                    $result[] = array(
                        'nama_lengkap' => $row->nama_lengkap,
                        'nisn' => $row->nisn,
                        'jalur' => $row->masuk_jalur,
                        'notelp' => $row->notelp,
                        'verif' => $row->status_verifikasi,
                        'feedback' => json_decode($row->feedbackReview, true)
                    );
                }
            }
        }
        
        return $result;
    }

    public function simpan_feedback_review($data) {
        $this->db->where('id_siswa', $data['id_siswa']);
        $query = $this->db->get('siswa');
        
        if ($query->num_rows() > 0) {
            $review_data = array(
                'rating' => $data['rating'],
                'review_text' => $data['review_text'],
                'tanggal' => date('Y-m-d H:i:s')
            );
            
            $update_data = array(
                'feedbackReview' => json_encode($review_data)
            );
            
            $this->db->where('id_siswa', $data['id_siswa']);
            return $this->db->update('siswa', $update_data);
        } else {
            return false;
        }
    }

    public function hapus_feedback_review($id_siswa) {
        $this->db->where('id_siswa', $id_siswa);
        $query = $this->db->get('siswa');
        
        if ($query->num_rows() > 0) {
            $update_data = array(
                'feedbackReview' => null
            );
            
            $this->db->where('id_siswa', $id_siswa);
            return $this->db->update('siswa', $update_data);
        } else {
            return false;
        }
    }

    public function get_siswa_valid() {
        $this->db->select('nama_lengkap');
        $this->db->from('siswa');
        $this->db->where('status_verifikasi', 2);
        $query = $this->db->get();
        
        return $query->result_array();
    }
}
/* End of file Model_APS_model.php */
/* Location: ./application/models/Model_APS_model.php */