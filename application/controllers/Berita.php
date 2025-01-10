<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kritiksaran_model'); // Ensure this line is present
        $this->load->model('Berita_model');
    // This will give you the list of kritik/saran
        // Fetch the kritiksaran data (example method, adapt to your model)
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin');  
        }
        $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all(); // Or modify as needed
        $data['username'] = $this->session->userdata('nama');
        $data['berita'] = $this->Berita_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/berita/berita_list', $data);
        $this->load->view('admin/footer', $data);
    }
public function form($slug = NULL) {
    if ($slug) {
        $data['berita'] = $this->Berita_model->get_by_slug($slug);
    } else {
        $data['berita'] = NULL;
    }
    $data['total_unread_kritiksaran'] = $this->Kritiksaran_model->count_unread();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
    $data['username'] = $this->session->userdata('nama');
    $this->load->view('admin/header', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/berita/berita_form', $data);
    $this->load->view('admin/footer', $data);
}
    public function save() {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->form();
        } else {
            $id = $this->input->post('id');
            $existing_img = $this->input->post('existing_img'); 
            $data = array(
                'judul' => $this->input->post('judul'),
                'konten' => $this->input->post('konten'),
                'tanggal' => $this->input->post('tanggal'),
                'slug' => url_title($this->input->post('judul'), 'dash', TRUE),
                'penulis' => $this->input->post('penulis'),
                'user_id' => 1
            );
            $uploaded_img = $this->upload_img();
            if ($uploaded_img) {
                $data['img'] = $uploaded_img;
                if ($existing_img && file_exists('./uploads/berita/' . $existing_img)) {
                    unlink('./uploads/berita/' . $existing_img);
                }
            } else {
                $data['img'] = $existing_img;
            }   
            if ($id) {
                if ($this->Berita_model->update($id, $data)) {
                    $this->session->set_flashdata('message', 'Berita berhasil diperbarui');
                } else {
                    $this->session->set_flashdata('message', 'Gagal memperbarui berita');
                }
            } else {
                if ($this->Berita_model->insert($data)) {
                    $this->session->set_flashdata('message', 'Berita berhasil ditambahkan');
                } else {
                    $this->session->set_flashdata('message', 'Gagal menambahkan berita');
                }
            }
    
            redirect('berita');
        }
    }
    private function upload_img() {
        if (!empty($_FILES['img']['name'])) {
            $config['upload_path'] = './uploads/berita/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['file_name'] = 'berita_' . time();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('img')) {
                return $this->upload->data('file_name');
            } else {
                return NULL;
            }
        }
        return NULL;
    }
    public function delete($slug) {
        $berita = $this->Berita_model->get_by_slug($slug);
        if ($berita) {
            if (file_exists('./uploads/berita/' . $berita->img)) {
                unlink('./uploads/berita/' . $berita->img);
            }
            $this->Berita_model->delete($berita->id);
            $this->session->set_flashdata('message', 'Berita berhasil dihapus.');
        } else {
            $this->session->set_flashdata('message', 'Berita tidak ditemukan.');
        }
        redirect('berita');
    }
    public function detail($slug) {
        $data['berita'] = $this->Berita_model->get_by_slug($slug);
        $data['title'] = "SMEANSAWI";    
        $this->load->view('user/header', $data);
        $this->load->view('user/berita/detail', $data);
        $this->load->view('user/footer', $data);
    }
    public function all($slug) {
        $data['berita'] = $this->Berita_model->get_all(); 
        $data['title'] = "SMEANSAWI";    
        $this->load->view('user/header', $data);
        $this->load->view('user/berita/all', $data);
        $this->load->view('user/footer', $data);
    }
    public function search() {
        $query = $this->input->get('query'); // Mendapatkan parameter pencarian dari URL

        if ($query) {
            // Pencarian berita berdasarkan query
            $berita = $this->Berita_model->search($query);
        } else {
            // Jika tidak ada query, tampilkan semua berita
            $berita = $this->Berita_model->get_all();
        }

        // Tampilkan hasil pencarian di dalam bagian searchResults (HTML langsung)
        if (!empty($berita)) {
            foreach ($berita as $item) {
                echo '<div class="news-itemberita">';
                echo '<img src="' . base_url('uploads/berita/' . $item->img) . '" alt="' . $item->judul . '" class="news-image" style="width: 50%; height: 50%;">';
                echo '<h4>' . $item->judul . '</h4>';
                echo '<p>' . substr($item->konten, 0, 100) . '... <a href="' . base_url('berita/detail/' . $item->slug) . '">Read More</a></p>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-center">Tidak ada hasil yang ditemukan.</p>';
        }
    }
}
