<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saranaprasarana extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Saranaprasarana_model');
        $this->load->model('Kritiksaran_model');
    }

    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['sarana'] = $this->Saranaprasarana_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);

        $this->load->view('admin/saranaprasarana/saranaprasarana_list', $data);
        $this->load->view('admin/footer', $data);
    }

    public function create()
    {
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);

        $this->load->view('admin/saranaprasarana/saranaprasarana_form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function store()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'jumlah' => $this->input->post('jumlah'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->Saranaprasarana_model->insert($data);
        redirect('admin/saranaprasarana');
    }

    public function edit($id)
    {
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['sarana'] = $this->Saranaprasarana_model->get_by_id($id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);

        $this->load->view('admin/saranaprasarana/saranaprasarana_form', $data);
        $this->load->view('admin/footer', $data);;
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'jumlah' => $this->input->post('jumlah'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->Saranaprasarana_model->update($id, $data);
        redirect('admin/saranaprasarana');
    }

    public function delete($id)
    {
        $this->Saranaprasarana_model->delete($id);
        redirect('admin/saranaprasarana');
    }

    public function view()
    {
        $data['title'] = 'SMEANSAWI';

        $data['sarana'] = $this->Saranaprasarana_model->get_all();
        $this->load->view('user/header', $data);
        $this->load->view('user/saranaprasarana', $data);
        $this->load->view('user/footer');
    }
}
