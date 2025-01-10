<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritiksaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kritiksaran_model');
    }

    // Display the feedback submission form
    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/kritik_saran');
        $this->load->view('user/footer');
    }

    // Submit feedback (Kritik/Saran)
    public function submit()
    {
        $data = [
            'nama_pengirim' => $this->input->post('nama'),
            'email_pengirim' => $this->input->post('email'),
            'isi_kritik_saran' => $this->input->post('pesan'),
        ];

        $this->Kritiksaran_model->insert($data);
        redirect('');
    }

    // List all feedback (Kritik/Saran) for the admin
    public function list()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  
        }
      
        
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/kritiksaran_list', $data);
        $this->load->view('admin/footer', $data);
    }

    // Mark a feedback as read
    public function mark_feedback_as_read($id)
    {
        // Ensure that the ID exists in the database and then update the status of that feedback
        $this->Kritiksaran_model->mark_as_read($id);
    
        // Redirect back to the list of feedback
        redirect('admin/kritiksaran');
    }
    
}
