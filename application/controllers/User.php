<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('User_model');
        $this->load->model('Pengumuman_model'); // Memuat model pengumuman
        $this->load->model('Kepalasekolah_model'); // Memuat model pengumuman
        $this->load->model('Berita_model'); // Memuat model pengumuman
        $this->load->model('Ekstrakurikuler_model'); // Memuat model pengumuman
        $this->load->model('Jurusan_model'); // Memuat model pengumuman
        $this->load->model('Prestasi_model'); // Memuat model pengumuman
        $this->load->model('Gurustaff_model'); // Memuat model pengumuman
        $this->load->model('Kontak_model'); // Memuat model pengumuman
        $this->load->model('Stats_model'); // Memuat model pengumuman



        







    }

    // Halaman utama, bisa disesuaikan
    public function index()
    {
        $data['title'] = 'SMEANSAWI';
        
        // Mengambil data pengumuman dari model
        $data['pengumuman'] = $this->Pengumuman_model->get_all(); // Fungsi ini bisa disesuaikan sesuai dengan kebutuhan Anda
        $data['kepalasekolah'] = $this->Kepalasekolah_model->get_first();
        $data['berita'] = $this->Berita_model->get_all();
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_all();
        $data['ekstrakurikuler_list'] = $this->Ekstrakurikuler_model->get_all_ekstrakurikuler();
        $data['jurusan'] = $this->Jurusan_model->get_all();
        $data['jurusan'] = $this->Jurusan_model->get_all_jurusan();
        $data['prestasi'] = $this->Prestasi_model->get_all();
        $data['gurustaff'] = $this->Gurustaff_model->get_all();
        $data['kontak'] = $this->Kontak_model->get_all();
        $data['stats'] = $this->Stats_model->get_latest();
        





        // Memuat view header, konten utama, dan footer
        $this->load->view('user/header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('user/info', $data); // Menampilkan pengumuman
        $this->load->view('user/berita', $data);
        $this->load->view('user/jurusan', $data);
        $this->load->view('user/ekstrakurikuler', $data);
        $this->load->view('user/prestasi', $data);
        $this->load->view('user/guru-staff', $data);
        $this->load->view('user/kontak', $data);
        $this->load->view('user/romble', $data);
        $this->load->view('user/kritik&saran', $data);
        $this->load->view('user/footer', $data);
    }
}
