<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sejarah_model');
        $this->load->library('upload');
        $this->load->model('Kritiksaran_model');
    }

    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  
        }
        $data['sejarah'] = $this->Sejarah_model->get_all();
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/sejarah/sejarah_list', $data);
        $this->load->view('admin/footer', $data);
    }
    public function view()
    {
        $data['title'] = 'SMEANSAWI'; // Menetapkan title yang benar

        $data['sejarah'] = $this->Sejarah_model->get_all();
        $this->load->view('user/header', $data);
        $this->load->view('user/sejarah', $data);
        $this->load->view('user/footer', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'judul' => $this->input->post('judul'),
                'konten' => $this->input->post('konten'),
                'user_id' => $this->session->userdata('user_id')
            ];


            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $data['gambar'] = $upload_data['file_name'];
            }

            $this->Sejarah_model->insert($data);
            redirect('admin/sejarah');
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/sejarah/sejarah_form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function edit($id)
    {
        $data['sejarah'] = $this->Sejarah_model->get_by_id($id);
        if ($this->input->post()) {
            $data_update = [
                'judul' => $this->input->post('judul'),
                'konten' => $this->input->post('konten')
            ];


            if ($_FILES['gambar']['name']) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                    $data_update['gambar'] = $upload_data['file_name'];
                }
            }

            $this->Sejarah_model->update($id, $data_update);
            redirect('admin/sejarah');
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/sejarah/sejarah_form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function delete($id)
    {
        $this->Sejarah_model->delete($id);
        redirect('admin/sejarah');
    }
}
