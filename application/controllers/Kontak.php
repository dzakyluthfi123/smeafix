<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_model');
        $this->load->model('Kritiksaran_model');
    }

    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  // Jika belum login, arahkan ke halaman login
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['kontak'] = $this->Kontak_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/kontak/kontak_list', $data);
        $this->load->view('admin/footer', $data);
    }

    public function edit($id)
    {
        $data['kontak'] = $this->Kontak_model->get_by_id($id);
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/kontak/kontak_form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'maps_url' => $this->input->post('maps_url'),
            'update_at' => date('Y-m-d H:i:s'),
        );
        $this->Kontak_model->update($id, $data);
        redirect('kontak');
    }

    public function delete($id)
    {
        $this->Kontak_model->delete($id);
        redirect('kontak');
    }

    public function add()
    {
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/kontak/kontak_form');
        $this->load->view('admin/footer', $data);
    }

    public function save()
    {
        $data = array(
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'maps_url' => $this->input->post('maps_url'),
            'create_at' => date('Y-m-d H:i:s'),
        );
        $this->Kontak_model->simpan($data);
        redirect('kontak');
    }
}
