<?php
class Ekstrakurikuler extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ekstrakurikuler_model');
        $this->load->model('Kritiksaran_model');
    }
    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin'); 
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/ekstrakurikuler/ekstrakurikuler_list', $data);
        $this->load->view('admin/footer', $data);
    }

    public function detail($slug) {
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_by_slug($slug);
        $data['title'] = "SMEANSAWI";    
        $this->load->view('user/header', $data);
        $this->load->view('user/ekstrakurikuler/detail', $data);
        $this->load->view('user/footer', $data);
    }
    
    public function form($slug = null) {
        $data = [];
        if ($slug) {
            $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_by_slug($slug);
        }
        if ($this->input->post()) {
            $formData = [
                'nama_ekstra' => $this->input->post('nama_ekstra'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pembimbing' => $this->input->post('pembimbing'),
                'slug' => url_title($this->input->post('nama_ekstra'), 'dash', TRUE),
            ];
            if (!empty($_FILES['logo']['name'])) {
                $formData['logo'] = $this->upload_logo();
            }
            if (!empty($_FILES['gambar']['name'])) {
                $formData['gambar'] = $this->upload_gambar();
            }
            if ($slug) {
                $this->Ekstrakurikuler_model->update($slug, $formData);
                $this->session->set_flashdata('message', 'Data berhasil diperbarui!');
            } else {
                $this->Ekstrakurikuler_model->insert($formData);
                $this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
            }

            redirect('ekstrakurikuler');
        }
        $data['username'] = $this->session->userdata('nama');
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/ekstrakurikuler/ekstrakurikuler_form', $data);
        $this->load->view('admin/footer', $data);
    }
    public function delete($slug) {
        $this->Ekstrakurikuler_model->delete($slug);
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('ekstrakurikuler');
    }
    private function upload_logo() {
        $config['upload_path'] = './uploads/ekstrakurikuler';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('logo')) {
            return $this->upload->data('file_name');
        }
        return null;
    }
    private function upload_gambar() {
        $config['upload_path'] = './uploads/ekstrakurikuler';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data('file_name');
        }
        return null;
    }
}
