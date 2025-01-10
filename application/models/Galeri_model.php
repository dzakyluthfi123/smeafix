<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
{

    public function insert_galeri($data)
    {
        $this->db->insert('galeri', $data);
    }

    public function get_all_galeri()
    {
        return $this->db->get('galeri')->result();
    }

    public function get_galeri_by_id($id)
    {
        return $this->db->get_where('galeri', ['id' => $id])->row();
    }

    public function update_galeri($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('galeri', $data);
    }

    public function delete_galeri($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeri');
    }
    public function count_all()
    {
        return $this->db->count_all('galeri');
    }
    
}
