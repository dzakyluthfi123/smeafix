<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisiMisi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VisiMisi_model');
        $this->load->library('upload');
        $this->load->model('Kritiksaran_model');
    }

    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  
        }
        $data['visi_misi'] = $this->VisiMisi_model->get_all();
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/visimisi/visi_misi_list', $data);
        $this->load->view('admin/footer', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
                'user_id' => $this->session->userdata('user_id')
            ];

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $data['gambar'] = $upload_data['file_name'];
            }

            $this->VisiMisi_model->insert($data);
            redirect('admin/visimisi');
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/visimisi/visi_misi_form', $data);
        $this->load->view('admin/footer', $data);
    }
    public function view()
    {
        $data['title'] = 'SMEANSAWI'; // Menetapkan title yang benar
        $data['visi_misi'] = $this->VisiMisi_model->get_all();
        $this->load->view('user/header', $data);
        $this->load->view('user/visi_misi', $data);
        $this->load->view('user/footer');
    }

    public function edit($id)
    {
        $data['visi_misi'] = $this->VisiMisi_model->get_by_id($id);
        if ($this->input->post()) {
            $data_update = [
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi')
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

            $this->VisiMisi_model->update($id, $data_update);
            redirect('admin/visimisi');
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/visimisi/visi_misi_form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function delete($id)
    {
        $this->VisiMisi_model->delete($id);
        redirect('admin/visimisi');
    }
}
