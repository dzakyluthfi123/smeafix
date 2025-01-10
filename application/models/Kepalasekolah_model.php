<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepalasekolah_model extends CI_Model {

    // Mengambil data sambutan pertama
    public function get_first() {
        $query = $this->db->limit(1)->get('kepalasekolah');
        if ($query->num_rows() > 0) {
            return $query->row_array(); // Mengembalikan data pertama sebagai array
        }
        return NULL; // Jika tidak ada data
    }

    // Menambahkan sambutan kepala sekolah
    public function insert($data) {
        if ($this->db->insert('kepalasekolah', $data)) {
            return $this->db->insert_id(); // Mengembalikan ID yang baru ditambahkan
        }
        return FALSE; // Jika gagal
    }

    // Mengupdate sambutan kepala sekolah
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('kepalasekolah', $data);
    }

    // Mengambil semua sambutan kepala sekolah
    public function get_all() {
        return $this->db->get('kepalasekolah')->result_array();
    }

    // Mengambil sambutan kepala sekolah berdasarkan slug
    public function get_by_slug($slug) {
        $query = $this->db->get_where('kepalasekolah', array('slug' => $slug));
        if ($query->num_rows() > 0) {
            return $query->row_array(); // Mengembalikan satu baris data
        }
        return NULL; // Jika slug tidak ditemukan
    }

    // Mengambil data sambutan kepala sekolah untuk halaman detail
    public function get_sambutan() {
        $query = $this->db->limit(1)->get('kepalasekolah');
        return $query->row(); // Mengembalikan satu baris data sebagai objek
    }

    // Menghapus sambutan kepala sekolah berdasarkan ID
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('kepalasekolah'); // Mengembalikan TRUE jika berhasil
    }
    public function count_all()
    {
        return $this->db->count_all('kepalasekolah');
    }
}
