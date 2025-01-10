<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah_model extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('sejarah')->result_array();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('sejarah', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('sejarah', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('sejarah', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sejarah');
    }
    public function count_all()
    {
        return $this->db->count_all('sejarah');
    }
}
