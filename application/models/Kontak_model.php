<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_model extends CI_Model
{
    public function simpan($data)
    {
        return $this->db->insert('kontak', $data);
    }

    public function get_all()
    {
        return $this->db->get('kontak')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('kontak', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('kontak', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('kontak');
    }
    public function count_all()
    {
        return $this->db->count_all('kontak');
    }
}
