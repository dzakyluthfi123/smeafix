<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InfoPpdb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('InfoPpdb_model');
        $this->load->model('Kritiksaran_model');
        $this->load->library('upload');
    }


    public function index()
    {   if (!$this->session->userdata('logged_in')) {
        redirect('admin');  
    }
    $data['username'] = $this->session->userdata('nama');
    $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
    $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['info_ppdb'] = $this->InfoPpdb_model->get_all_info_ppdb();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/infoppdb/info_ppdb_list', $data);
        $this->load->view('admin/footer');
    }
    public function view()
    {
        $data['title'] = "SMEANSAWI";    

        $data['info_ppdb'] = $this->InfoPpdb_model->get_all();
        $this->load->view('user/header', $data);
        $this->load->view('user/info_ppdb', $data);
        $this->load->view('user/footer', $data);
    }


    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'youtube' => $this->input->post('youtube'),
                'instagram' => $this->input->post('instagram'),
                'facebook' => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter'),
                'telegram' => $this->input->post('telegram')
            ];


            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $upload_data = $this->upload->data();
                $data['image'] = $upload_data['file_name'];
            }

            $this->InfoPpdb_model->insert($data);
            redirect('InfoPpdb');
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/infoppdb/info_ppdb_form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function edit($id)
    {
        $data['info_ppdb'] = $this->InfoPpdb_model->get_by_id($id);

        if ($this->input->post()) {
            $data_update = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'youtube' => $this->input->post('youtube'),
                'instagram' => $this->input->post('instagram'),
                'facebook' => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter'),
                'telegram' => $this->input->post('telegram')
            ];


            if ($_FILES['image']['name']) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data();
                    $data_update['image'] = $upload_data['file_name'];
                }
            }

            $this->InfoPpdb_model->update($id, $data_update);
            redirect('InfoPpdb');
        }
        $data['username'] = $this->session->userdata('nama');

        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/infoppdb/info_ppdb_form', $data);  // Pass data to view
        $this->load->view('admin/footer', $data);
    }


    public function delete($id)
    {
        $this->InfoPpdb_model->delete($id);
        redirect('InfoPpdb');
    }
}
