<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stats extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stats_model');
        $this->load->model('Kritiksaran_model');
    }

    public function index()
    {  if (!$this->session->userdata('logged_in')) {
        redirect('admin');  // Jika belum login, arahkan ke halaman login
    }
    $data['username'] = $this->session->userdata('nama');
    $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
    $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['stats'] = $this->Stats_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);

        $this->load->view('admin/stats/stats_list', $data);

        $this->load->view('admin/footer', $data);
    }

    public function create()
    {
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/stats/stats_form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function store()
    {
        $data = [
            'jumlah_siswa' => $this->input->post('jumlah_siswa'),
            'rombongan_belajar' => $this->input->post('rombongan_belajar'),
            'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'),
        ];
        $this->Stats_model->insert($data);
        redirect('stats');
    }

    public function edit($id)
    { 
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['stat'] = $this->Stats_model->get_by_id($id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/stats/stats_form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function update($id)
    {
        $data = [
            'jumlah_siswa' => $this->input->post('jumlah_siswa'),
            'rombongan_belajar' => $this->input->post('rombongan_belajar'),
            'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'),
        ];
        $this->Stats_model->update($id, $data);
        redirect('stats');
    }

    public function delete($id)
    {
        $this->Stats_model->delete($id);
        redirect('stats');
    }
}
