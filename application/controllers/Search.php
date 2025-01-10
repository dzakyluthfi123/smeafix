<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Search_model'); // Memuat model pencarian
    }
    public function index() {
        // Ambil query dari input pengguna
        $query = $this->input->get('query');
        
        // Panggil model untuk melakukan pencarian
        $this->load->model('Search_model');
        $results = $this->Search_model->search($query);

        // Jika tidak ada hasil, arahkan ke halaman 404 kustom
        if (empty($results)) {

            $this->load->view('user/custom_404');

            return;
        }

        // Jika ada hasil, load view hasil pencarian
        $data['query'] = $query;
        $data['results'] = $results;
        $this->load->view('user/header', $data);
        $this->load->view('user/search_results', $data);
        $this->load->view('user/footer', $data);
    }
    
    
}
