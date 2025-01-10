<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saranaprasarana_model extends CI_Model {
    private $table = 'sarana_prasarana'; 
    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }
    public function count_all()
    {
        return $this->db->count_all('saranaprasarana');
    }
}
