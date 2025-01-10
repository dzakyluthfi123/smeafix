<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepalasekolah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kepalasekolah_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Kritiksaran_model');
    }

    // Menampilkan daftar sambutan kepala sekolah
    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  // Jika belum login, arahkan ke halaman login
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['kepalasekolah'] = $this->Kepalasekolah_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/kepalasekolah/kepalasekolah_list', $data);
        $this->load->view('admin/footer', $data);
    }

    // Form untuk tambah atau edit sambutan
    public function form($slug = NULL) {
        if ($slug) {
            // Jika slug ada, maka lakukan edit
            $data['kepalasekolah'] = $this->Kepalasekolah_model->get_by_slug($slug);
        } else {
            // Jika tidak ada slug, berarti tambah baru
            $data['kepalasekolah'] = NULL;
        }

        // Load form view
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/kepalasekolah/kepalasekolah_form', $data);
        $this->load->view('admin/footer', $data);

    }

    public function save() {
        // Validasi form input
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isisambutan', 'Isi Sambutan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal
            $this->form();
        } else {
            // Jika validasi berhasil
            $id = $this->input->post('id');
            $data = array(
                'judul' => $this->input->post('judul'),
                'isisambutan' => $this->input->post('isisambutan'),
                'tanggal' => $this->input->post('tanggal'),
                'slug' => url_title($this->input->post('judul'), 'dash', TRUE),  // Menghasilkan slug berdasarkan judul
                'user_id' => 1  // Ganti dengan ID user yang login, jika menggunakan session
            );
    
            // Periksa apakah ada foto baru yang diupload
            $foto = $this->upload_foto();
            if ($foto) {
                $data['foto'] = $foto;  // Jika ada foto baru, simpan foto tersebut
            } else {
                // Jika tidak ada foto baru, biarkan foto lama tetap ada
                $existing_sambutan = $this->Kepalasekolah_model->get_by_slug($this->input->post('slug'));
                if ($existing_sambutan && !empty($existing_sambutan['foto'])) {
                    $data['foto'] = $existing_sambutan['foto'];  // Pertahankan foto lama
                }
            }
    
            // Cek apakah sudah ada sambutan di database
            $existing_sambutan = $this->Kepalasekolah_model->get_first();
    
            if ($existing_sambutan) {
                // Jika sudah ada sambutan, lakukan update
                if ($this->Kepalasekolah_model->update($existing_sambutan['id'], $data)) {
                    $this->session->set_flashdata('message', 'Data berhasil diperbarui');
                } else {
                    $this->session->set_flashdata('message', 'Gagal memperbarui data');
                }
            } else {
                // Jika belum ada sambutan, lakukan insert
                if ($this->Kepalasekolah_model->insert($data)) {
                    $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
                } else {
                    $this->session->set_flashdata('message', 'Gagal menambahkan data');
                }
            }
    
            redirect('kepalasekolah');
        }
    }
    
    

    // Menghapus sambutan kepala sekolah berdasarkan slug
    public function delete($slug) {
        $kepalasekolah = $this->Kepalasekolah_model->get_by_slug($slug);
        if ($kepalasekolah) {
            $this->Kepalasekolah_model->delete($kepalasekolah['id']);
        }
        redirect('kepalasekolah');
    }

    // Fungsi untuk upload foto sambutan
    private function upload_foto() {
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './uploads/kepalasekolah/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['file_name'] = 'kepsek_' . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                return $this->upload->data('file_name');
            } else {
                return NULL; // Jika upload gagal
            }
        }
        return NULL; // Jika tidak ada foto
    }
    public function detail()
    {
        // Mengambil data sambutan kepala sekolah dari model
        $data['sambutan'] = $this->Kepalasekolah_model->get_sambutan();

        // Memuat tampilan sambutan kepala sekolah
        $data['title'] = 'SMEANSAWI'; // Menetapkan title yang benar

    // Load view dengan data
    $this->load->view('user/header', $data);   // Mengirim data ke header view
    $this->load->view('user/kepalasekolah/detail', $data); // Mengirim data ke detail view
    $this->load->view('user/footer', $data);   // Mengirim data ke footer view
    }
    
    
}

