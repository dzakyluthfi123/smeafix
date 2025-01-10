<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gurustaff extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Gurustaff_model');
        $this->load->library('upload');
        $this->load->model('Kritiksaran_model');
    }
    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  
        }
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['username'] = $this->session->userdata('nama');
        $data['gurustaff'] = $this->Gurustaff_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/gurustaff/gurustaff_list', $data);
        $this->load->view('admin/footer', $data);
    }
    public function create() {
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/gurustaff/gurustaff_form');
        $this->load->view('admin/footer');
    }
    public function store() {
        $config['upload_path'] = './uploads/gurustaff/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        $gambar = null;
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'gambar' => $gambar,
            'user_id' => $this->session->userdata('user_id')
        ];

        $this->Gurustaff_model->insert($data);
        redirect('gurustaff');
    }

    // Menampilkan form untuk mengedit data guru/staff
    public function edit($id) {
        $data['username'] = $this->session->userdata('nama');
        $data['gurustaff'] = $this->Gurustaff_model->get_by_id($id);
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/gurustaff/gurustaff_form', $data);
        $this->load->view('admin/footer', $data);
    }

    // Memperbarui data guru/staff
    public function update($id) {
        $config['upload_path'] = './uploads/gurustaff/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan')
        ];

        if ($this->upload->do_upload('gambar')) {
            $data['gambar'] = $this->upload->data('file_name');
        }

        $this->Gurustaff_model->update($id, $data);
        redirect('gurustaff');
    }

    // Menghapus data guru/staff
    public function delete($id) {
        $this->Gurustaff_model->delete($id);
        redirect('gurustaff');
    }

    // Menampilkan detail guru/staff (untuk user)
    public function detail() {
        $data['gurustaff'] = $this->Gurustaff_model->get_detail(); 

        $data['title'] = "SMEANSAWI";    

        $this->load->view('user/header', $data);
        $this->load->view('user/gurustaff', $data); 
        $this->load->view('user/footer', $data);
    }
}
