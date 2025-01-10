<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

    // Constructor
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Pastikan database diload
    }

    // Mendapatkan semua data jurusan
    public function get_all() {
        return $this->db->get('jurusan')->result();
    }
    public function get_all_jurusan() {
        $query = $this->db->get('jurusan'); // Assuming 'jurusan' is the table name
        return $query->result(); // Return the result as an array of objects
    }
    
    
    // Mendapatkan data jurusan berdasarkan ID
    public function get_by_id($id) {
        return $this->db->get_where('jurusan', ['id' => $id])->row_array();
    }

    // Menyimpan atau memperbarui data jurusan
    public function save($data) {
        if (isset($data['id']) && $data['id']) {
            // Update data jurusan yang ada
            $this->db->where('id', $data['id']);
            return $this->db->update('jurusan', $data);
        } else {
            // Menambah data jurusan baru
            return $this->db->insert('jurusan', $data);
        }
    }

    // Menghapus jurusan (soft delete)
    public function delete($id) {
        // Menghapus data jurusan berdasarkan ID
        return $this->db->delete('jurusan', ['id' => $id]);
    }
    
    public function get_by_slug($slug) {
        return $this->db->get_where('jurusan', ['slug' => $slug])->row();
    }
    public function count_all()
    {
        return $this->db->count_all('jurusan');
    }
    
}
