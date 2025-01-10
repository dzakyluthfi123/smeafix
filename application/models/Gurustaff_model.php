<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gurustaff_model extends CI_Model {

    private $table = 'gurustaff';

    // Mendapatkan semua data guru/staff
    public function get_all() {
        return $this->db->get($this->table)->result_array();
    }

    // Mendapatkan detail guru/staff untuk user
    public function get_detail() {
        return $this->db->get($this->table)->result();
    }

    // Mendapatkan data guru/staff berdasarkan ID
    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

    // Menyimpan data guru/staff baru
    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    // Memperbarui data guru/staff
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Menghapus data guru/staff
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
    public function count_all()
    {
        return $this->db->count_all('gurustaff');
    }
}
