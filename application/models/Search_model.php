<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

    public function search($query) {
        $results = [];

        // Pencarian di tabel berita berdasarkan slug
        $this->db->like('slug', $query);
        $berita = $this->db->get('berita')->result_array();
        if ($berita) {
            $results['berita'] = $berita;
        }

        // Pencarian di tabel ekstrakurikuler berdasarkan slug
        $this->db->reset_query();
        $this->db->like('slug', $query);
        $ekstrakurikuler = $this->db->get('ekstrakurikuler')->result_array();
        if ($ekstrakurikuler) {
            $results['ekstrakurikuler'] = $ekstrakurikuler;
        }

   


    
        // Pencarian di tabel prestasi berdasarkan slug
        $this->db->reset_query();
        $this->db->like('slug', $query);
        $prestasi = $this->db->get('prestasi')->result_array();
        if ($prestasi) {
            $results['prestasi'] = $prestasi;
        }

        // Pencarian di tabel jurusan berdasarkan slug
        $this->db->reset_query();
        $this->db->like('slug', $query);
        $jurusan = $this->db->get('jurusan')->result_array();
        if ($jurusan) {
            $results['jurusan'] = $jurusan;
        }

    

    

     

        return $results; 
    }
}
