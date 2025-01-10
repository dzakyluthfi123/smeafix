<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Errors extends CI_Controller
{

    public function page_missing()
    {

        $this->output->set_status_header('404');


        $this->load->view('user/header', $data);
        $this->load->view('user/custom_404', $data);
        $this->load->view('user/footer', $data);
    }
}
