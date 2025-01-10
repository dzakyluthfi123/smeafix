<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisiMisi_model extends CI_Model
{
    protected $table = 'visi_misi';

    public function get_all()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
    public function count_all()
    {
        return $this->db->count_all('visi_misi');
    }
}
