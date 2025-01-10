<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jurusan_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Kritiksaran_model');
    }
    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['jurusan'] = $this->Jurusan_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/jurusan/jurusan_list', $data);
        $this->load->view('admin/footer', $data);
    }
    public function form($id = null) {
        $data['jurusan'] = null;
        if ($id) {
            $data['jurusan'] = $this->Jurusan_model->get_by_id($id);
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/jurusan/jurusan_form', $data);
        $this->load->view('admin/footer', $data);
    }
    public function save() {
        $id = $this->input->post('id');
        $data = [
            'id' => $id,
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'slug' => url_title($this->input->post('nama'), 'dash', true),
        ];
        $config['upload_path'] = './uploads/jurusan/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('logo')) {
            $logo_data = $this->upload->data();
            $data['logo'] = $logo_data['file_name'];
        }
        if ($this->upload->do_upload('gambar')) {
            $gambar_data = $this->upload->data();
            $data['gambar'] = $gambar_data['file_name'];
        }
        $this->Jurusan_model->save($data);
        redirect('jurusan');
    }
    public function delete($id) {
        // Cek apakah jurusan dengan ID tersebut ada di database
        $jurusan = $this->Jurusan_model->get_by_id($id);
        if ($jurusan) {
            // Jika ada, lakukan penghapusan
            $this->Jurusan_model->delete($id);
            $this->session->set_flashdata('message', 'Data jurusan berhasil dihapus');
        } else {
            // Jika tidak ada, tampilkan pesan error
            $this->session->set_flashdata('message', 'Data jurusan tidak ditemukan');
        }
        redirect('jurusan');
    }
    
    public function detail($slug) {
        $jurusan = $this->db->get_where('jurusan', ['slug' => $slug])->row();
        $data['jurusan_list'] = $this->Jurusan_model->get_all(); 
        $data['title'] = 'SMEANSAWI';
        $data['jurusan'] = $jurusan;
        $this->load->view('user/header', $data);
        $this->load->view('user/jurusan/detail', $data);
        $this->load->view('user/footer', $data);

    }
    
    
}
