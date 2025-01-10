<?php
class Ekstrakurikuler_model extends CI_Model {

    // Constructor
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Pastikan database diload
    }

    public function get_all_ekstrakurikuler() {
        // Mengambil semua data dari tabel ekstrakurikuler
        $this->db->select('id, nama_ekstra, slug');
        $query = $this->db->get('ekstrakurikuler');
        return $query->result();  // Mengembalikan data sebagai array objek
    }
    // Menambah data ekstrakurikuler
    public function insert($data) {
        $this->db->insert('ekstrakurikuler', $data);
    }

    // Mengambil semua data ekstrakurikuler
    public function get_all() {
        return $this->db->get('ekstrakurikuler')->result();
    }
    // Mendapatkan ekstrakurikuler berdasarkan slug
    public function get_by_slug($slug) {
        $query = $this->db->get_where('ekstrakurikuler', ['slug' => $slug]);
        return $query->row(); // Mengembalikan satu baris data (objek)
    }
    

    // Update data ekstrakurikuler
    public function update($slug, $data) {
        $this->db->where('slug', $slug);
        $this->db->update('ekstrakurikuler', $data);
    }

    // Menghapus data ekstrakurikuler berdasarkan slug
    public function delete($slug) {
        $this->db->where('slug', $slug);
        $this->db->delete('ekstrakurikuler');
    }
    public function count_all()
    {
        return $this->db->count_all('ekstrakurikuler');
    }
}
?>
