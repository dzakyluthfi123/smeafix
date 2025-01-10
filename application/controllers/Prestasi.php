<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prestasi_model');
        $this->load->library('upload');  // Library upload untuk file
        $this->load->library('form_validation');  // Memuat Form Validation
        $this->load->model('Kritiksaran_model');
    }

    // Menampilkan semua data prestasi
    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['prestasi'] = $this->Prestasi_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/prestasi/prestasi_list', $data);
        $this->load->view('admin/footer', $data);
    }

    // Menampilkan detail prestasi berdasarkan slug
    public function detail($slug)
    {
        $data['title'] = 'SMEANSAWI';

        $data['prestasi'] = $this->Prestasi_model->get_by_slug($slug);
        if (!$data['prestasi']) show_404(); // Jika tidak ada data
        $this->load->view('user/header', $data);
        $this->load->view('user/prestasi/detail', $data);
        $this->load->view('user/footer');
    }

    // Menambah data prestasi
    public function create()
    {
        if ($this->input->post()) {
            // Menangani upload gambar
            $config['upload_path'] = './uploads/prestasi/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
            } else {
                $gambar = ''; // Jika tidak ada gambar yang diupload
            }

            $data = [
                'judul'     => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal'   => $this->input->post('tanggal'),
                'penulis'   => $this->input->post('penulis'),
                'gambar'    => $gambar,
                'user_id'   => $this->session->userdata('user_id'),
                'slug'      => url_title($this->input->post('judul'), 'dash', TRUE),
            ];

            $this->Prestasi_model->insert($data);
            redirect('prestasi');
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/prestasi/prestasi_form', $data);
        $this->load->view('admin/footer', $data);
    }

    // Mengedit data prestasi berdasarkan slug
    public function edit($slug)
    {
        $data['prestasi'] = $this->Prestasi_model->get_by_slug($slug);
        if (!$data['prestasi']) show_404(); // Jika data tidak ditemukan

        if ($this->input->post()) {
            // Menangani upload gambar
            $config['upload_path'] = './uploads/prestasi/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
            } else {
                $gambar = $data['prestasi']->gambar; // Gunakan gambar lama jika tidak ada gambar baru
            }

            $update_data = [
                'judul'     => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal'   => $this->input->post('tanggal'),
                'penulis'   => $this->input->post('penulis'),
                'gambar'    => $gambar,
                'slug'      => url_title($this->input->post('judul'), 'dash', TRUE),
            ];

            $this->Prestasi_model->update($slug, $update_data);
            redirect('prestasi');
        }
        $data['username'] = $this->session->userdata('nama');

        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/prestasi/prestasi_form', $data);
        $this->load->view('admin/footer');
    }

    // Menghapus data prestasi berdasarkan slug
    public function delete($slug)
    {
        $this->Prestasi_model->delete($slug);
        redirect('prestasi');
    }
}
