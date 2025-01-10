<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InfoPpdb_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_info_ppdb()
    {
        return $this->db->get('info_ppdb')->result();
    }

    public function get_all()
    {
        return $this->db->get('info_ppdb')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('info_ppdb', $data);
    }

    public function update($id, $data)
    {
        return $this->db->update('info_ppdb', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete('info_ppdb', ['id' => $id]);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('info_ppdb', ['id' => $id])->row();
    }
    public function count_all()
    {
        return $this->db->count_all('info_ppdb');
    }
}
