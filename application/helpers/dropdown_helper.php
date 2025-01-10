<?php
function load_dropdown_data() {
    $CI =& get_instance(); // Dapatkan instance CI
    $CI->load->model('Ekstrakurikuler_model');
    $CI->load->model('Jurusan_model');

    $ekstrakurikuler_list = $CI->Ekstrakurikuler_model->get_all();
    $jurusan_list = $CI->Jurusan_model->get_all();

    $CI->config->set_item('ekstrakurikuler_list', $ekstrakurikuler_list);
    $CI->config->set_item('jurusan_list', $jurusan_list);
}

// Panggil fungsi load data
load_dropdown_data();
