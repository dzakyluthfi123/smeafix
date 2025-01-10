<?php
function get_jurusan_list()
{
    // Mendapatkan instance CodeIgniter
    $CI = &get_instance();

    // Memuat model 'Jurusan_model'
    $CI->load->model('Jurusan_model');

    // Mengambil semua data jurusan dan mengembalikannya
    return $CI->Jurusan_model->get_all_jurusan();
}
