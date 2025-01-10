<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function validate($username, $password) {
        // Ambil data user berdasarkan username
        $this->db->where('username', $username);
        $user = $this->db->get('user')->row_array();

        // Cek username dan password menggunakan MD5
        if ($user && $user['password'] === md5($password)) {
            return $user;  // Return data user jika valid
        }

        return FALSE;  // Return false jika tidak valid
    }
    public function count_all()
    {
        return $this->db->count_all('user');
    }
    public function get_user_by_id($user_id) {
        $this->db->where('id', $user_id);
        return $this->db->get('user')->row_array();
    }
    
}
