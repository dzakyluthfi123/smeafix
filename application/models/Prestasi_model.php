<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_model extends CI_Model {

    // Mendapatkan semua data prestasi
    public function get_all()
    {
        return $this->db->get('prestasi')->result();
    }

    // Mendapatkan prestasi berdasarkan slug
    public function get_by_slug($slug)
    {
        return $this->db->get_where('prestasi', ['slug' => $slug])->row();
    }

    // Menambahkan data prestasi baru
    public function insert($data)
    {
        // Cek apakah slug sudah ada
        $existing = $this->db->get_where('prestasi', ['slug' => $data['slug']])->row();
        if ($existing) {
            $data['slug'] = $data['slug'] . '-' . rand(1, 1000);  // Jika slug sudah ada, tambahkan angka acak
        }

        $this->db->insert('prestasi', $data);
    }

    // Mengupdate data prestasi berdasarkan slug
    public function update($slug, $data)
    {
        $this->db->where('slug', $slug);
        $this->db->update('prestasi', $data);
    }

    // Menghapus data prestasi berdasarkan slug
    public function delete($slug)
    {
        $this->db->where('slug', $slug);
        $this->db->delete('prestasi');
    }
    public function count_all()
    {
        return $this->db->count_all('prestasi');
    }
}
