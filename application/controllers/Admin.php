<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('User_model');
        $this->load->model('Berita_model');
        $this->load->model('Galeri_model');
        $this->load->model('VisiMisi_model');
        $this->load->model('Sejarah_model');
        $this->load->model('InfoPpdb_model');
        $this->load->model('Pengumuman_model');
        $this->load->model('Kepalasekolah_model');
        $this->load->model('Kritiksaran_model');
        $this->load->model('Ekstrakurikuler_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Prestasi_model');
        $this->load->model('Gurustaff_model');
        $this->load->model('Kontak_model');
        $this->load->model('Stats_model');
    }
    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('admin/dashboard'); 
        }
        $this->load->view('admin/login');
    }
    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->User_model->validate($username, $password);
        if ($user) {
            $this->session->set_userdata([
                'id' => $user['id'],
                'nama' => $user['nama'],
                'logged_in' => TRUE
            ]);
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('admin');
        }
    }
    public function dashboard() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');
        }
        $data['username'] = $this->session->userdata('nama');  // Session data for username
        
        // Get the unread kritik/saran count and the list
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all(); 

        // Get total counts for different entities
        $data['total_berita'] = $this->Berita_model->count_all();
        $data['total_ekstrakurikuler'] = $this->Ekstrakurikuler_model->count_all();
        $data['total_galeri'] = $this->Galeri_model->count_all();
        $data['total_gurustaff'] = $this->Gurustaff_model->count_all();
        $data['total_info_ppdb'] = $this->InfoPpdb_model->count_all();
        $data['total_jurusan'] = $this->Jurusan_model->count_all();
        $data['total_kepalasekolah'] = $this->Kepalasekolah_model->count_all();
        $data['total_kontak'] = $this->Kontak_model->count_all();
        $data['total_kritiksaran'] = $this->Kritiksaran_model->count_all();
        $data['total_pengumuman'] = $this->Pengumuman_model->count_all();
        $data['total_prestasi'] = $this->Prestasi_model->count_all();
        $data['total_sejarah'] = $this->Sejarah_model->count_all();
        $data['total_stats'] = $this->Stats_model->count_all();
        $data['total_visi_misi'] = $this->VisiMisi_model->count_all();

        // Load the views with the provided data
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer', $data);
    }

    public function user_profile() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');
        }
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all(); // Or modify as needed
        // Fetch the username from session data
        $data['username'] = $this->session->userdata('nama');  // username from session

        // Mask the password (not fetching from the database for security)
        $data['password'] = '*******'; 

        // Load the user profile page
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/profile', $data); 
        $this->load->view('admin/footer', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin');
    }
}
