<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

    public function search($query) {
        $this->db->like('judul', $query);  // Mencari berdasarkan judul berita
        $query = $this->db->get('berita');
        return $query->result();  // Mengembalikan hasil pencarian
    }

    public function get_all() {
        // Mengambil semua berita
        $query = $this->db->get('berita');
        return $query->result(); // Mengembalikan sebagai objek
    }
    public function all() {
        // Mengambil semua berita
        $query = $this->db->get('berita');
        
        return $query->result_array();
    }

    public function get_by_slug($slug) {
        // Mengambil berita berdasarkan slug
        $this->db->where('slug', $slug);
        $query = $this->db->get('berita');
        return $query->row(); // Mengembalikan satu berita sebagai objek
    }

    public function insert($data) {
        // Menyimpan berita baru
        return $this->db->insert('berita', $data);
    }

    public function update($id, $data) {
        // Mengupdate berita berdasarkan ID
        $this->db->where('id', $id);
        return $this->db->update('berita', $data);
    }

    public function delete($id) {
        // Menghapus berita berdasarkan ID
        $this->db->where('id', $id);
        return $this->db->delete('berita');
    }
    public function count_all() {
        return $this->db->count_all('berita');  // Menghitung jumlah berita dari tabel 'berita'
    }
}
