<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

class Model_APS extends CI_Model {

  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------
  function cek_akun($tabel,$kondisi){
    // Mendapatkan nilai dari hasil pemeriksaan 
        return $this->db->get_where($tabel,$kondisi);
}
// Membuat fungsi tampil_data($nm_tabel) untuk menampilkan data dari nama tabel yang dikirim-------------------
function tampil_data($nm_table,$field,$order){
    // Mendapatkan nilai dari pengambilan data dari nama tabel yang dikirim 
        $this->db->select('*');
        $this->db->from($nm_table);
        $this->db->order_by($field, $order);
        return $this->db->get();
}
function tampil_data_join($sel, $nm_tabel, $nm_tabel_join, $kondisi,$field,$order){
    $this->db->select($sel);
    $this->db->from($nm_tabel);
    $this->db->join($nm_tabel_join, $kondisi);
    $this->db->order_by($field, $order);
    return $query = $this->db->get();
}
function tampil_data_join2($sel, $nm_tabel, $nm_tabel_join, $kondisi, $nm_tabel_join2, $kondisi2, $field,$order){
    $this->db->select($sel);
    $this->db->from($nm_tabel);
    $this->db->join($nm_tabel_join, $kondisi);
    $this->db->join($nm_tabel_join2, $kondisi2);
    $this->db->order_by($field, $order);
    return $query = $this->db->get();
}
// Membuat fungsi simpan_data($data,$nm_tabel)-----------------------------------------------------------------
function simpan_data($data,$nm_table){
    // Memanggil fungsi insert($nm_tabel,$data)----------------------------------------------------------------
        $this->db->insert($nm_table,$data);
}   
// Membuat fungsi hapus_data($kondisi,$nm_tabel)---------------------------------------------------------------
function hapus_data($kondisi,$nm_table){
    // Memanggil fungsi where($kondisi)------------------------------------------------------------------------
        $this->db->where($kondisi);
    // Memanggil fungsi delete($nm_tabel)
        $this->db->delete($nm_table);
}
// Membuat fungsi edit_data($kondisi,$nm_tabel)---------------------------------------------------------------
function edit_data($nm_table,$kondisi){		
    // Mendapatkan nilai dari pengambilan data dari nama tabel dan kondisi yang dikirim 
        return $this->db->get_where($nm_table,$kondisi);
}
function sel_edit_data_join($sel, $nm_tabel, $nm_tabel_join, $on, $kondisi){
    $this->db->select($sel);
    $this->db->from($nm_tabel);
    $this->db->join($nm_tabel_join, $on);
    $this->db->where($kondisi);
    return $query = $this->db->get();
}

function edit_data_join2($sel, $nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $kondisi){
    $this->db->select($sel);
    $this->db->from($nm_tabel);
    $this->db->join($nm_tabel_join, $on);
    $this->db->join($nm_tabel_join2, $on2);
    $this->db->where($kondisi);
    return $query = $this->db->get();
}
// Membuat fungsi proses_update($kondisi,$data,$nm_table)-----------------------------------------
function proses_update($kondisi,$data,$nm_table){
    $this->db->where($kondisi);
    $this->db->update($nm_table,$data);
}
function proses_update_all($data,$nm_table){
    $this->db->update($nm_table,$data);
}
function tampil_data_seleksi($sel,$nm_table,$field,$order){
    // Mendapatkan nilai dari pengambilan data dari nama tabel yang dikirim 
        $this->db->select($sel);
        $this->db->from($nm_table);
        $this->db->order_by($field, $order);
        return $this->db->get();
}
}
/* End of file Model_APS_model.php */
/* Location: ./application/models/Model_APS_model.php */