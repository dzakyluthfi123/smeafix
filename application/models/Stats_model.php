<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stats_model extends CI_Model
{

    private $table = 'stats';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }
    public function get_latest()
    {
        return $this->db->order_by('id', 'DESC')->limit(1)->get($this->table)->row();
    }
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
    public function count_all()
    {
        return $this->db->count_all('stats');
    }
}
