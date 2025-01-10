<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pengumuman_model');
        $this->load->model('Kritiksaran_model');

        $this->load->library('form_validation');
        $this->load->helper(['url', 'text']); // Helper untuk URL dan slug
    }

    // Menampilkan daftar pengumuman
    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  // Jika belum login, arahkan ke halaman login
        }
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();  // Or modify this as needed
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['pengumuman'] = $this->Pengumuman_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/pengumuman/pengumuman_list', $data);
        $this->load->view('admin/footer', $data);
    }

    // Fungsi untuk membuat pengumuman baru
    public function create() {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/pengumuman/pengumuman_form');
            $this->load->view('admin/footer');
        } else {
            $judul = $this->input->post('judul');
            $data = [
                'judul' => $judul,
                'isi' => $this->input->post('isi'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'slug' => url_title(convert_accented_characters($judul), 'dash', TRUE), // Membuat slug
                'user_id' => $this->session->userdata('user_id'),
                'create_at' => date('Y-m-d H:i:s')
            ];
            $this->Pengumuman_model->insert($data);
            redirect('pengumuman');
        }
    }

    // Fungsi untuk mengedit pengumuman
    public function edit($slug) {
        $data['username'] = $this->session->userdata('nama');

        $data['pengumuman'] = $this->Pengumuman_model->get_by_slug($slug);

        // Cek apakah pengumuman ditemukan
        if (empty($data['pengumuman'])) {
            show_404(); // Tampilkan halaman 404 jika pengumuman tidak ditemukan
        }

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        if ($this->form_validation->run() == FALSE) {
            // Tampilkan form edit dengan data yang sudah ada
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/pengumuman/pengumuman_form', $data);
            $this->load->view('admin/footer', $data);
        } else {
            // Data yang akan diupdate
            $judul = $this->input->post('judul');
            $data_update = [
                'judul' => $judul,
                'isi' => $this->input->post('isi'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'slug' => url_title(convert_accented_characters($judul), 'dash', TRUE), // Perbarui slug
                'update_at' => date('Y-m-d H:i:s')
            ];

            // Update pengumuman berdasarkan ID yang benar
            $this->Pengumuman_model->update($data['pengumuman']['id'], $data_update);
            redirect('pengumuman');
        }
    }

    // Fungsi untuk menghapus pengumuman
    public function delete($slug) {
        $pengumuman = $this->Pengumuman_model->get_by_slug($slug);
        if ($pengumuman) {
            $this->Pengumuman_model->delete($pengumuman['id']);
        }
        redirect('pengumuman');
    }
}
?>
