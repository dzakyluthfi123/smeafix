<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {

    // Mendapatkan semua pengumuman
    public function get_all() {
        return $this->db->get('pengumuman')->result_array();
    }

    // Mendapatkan pengumuman berdasarkan slug
    public function get_by_slug($slug) {
        $query = $this->db->get_where('pengumuman', ['slug' => $slug]);
        return $query->row_array();
    }

    // Menambahkan pengumuman baru
    public function insert($data) {
        return $this->db->insert('pengumuman', $data);
    }

    // Mengupdate pengumuman
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pengumuman', $data);
    }

    // Menghapus pengumuman
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('pengumuman');
    }
    public function count_all()
    {
        return $this->db->count_all('pengumuman');
    }
}
?>
