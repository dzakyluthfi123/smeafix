<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritiksaran_model extends CI_Model
{
    protected $table = 'kritiksaran';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Insert a new feedback/suggestion with the default status 'unread'
    public function insert($data)
    {
        if (!isset($data['status'])) {
            $data['status'] = 'unread'; // Default value for status
        }
        return $this->db->insert($this->table, $data);
    }

    // Retrieve all feedback/suggestions
    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();  // Returns all feedback/suggestions as an array of objects
    }

    // Count all feedback/suggestions
    public function count_all()
    {
        return $this->db->count_all($this->table);
    }

    // Count all 'unread' feedback/suggestions
    public function count_unread()
    {
        $this->db->where('status', 'unread');
        return $this->db->count_all_results($this->table);
    }

    // Fetch unread feedback/suggestions
    public function get_unread()
    {
        $this->db->where('status', 'unread');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Update status of a specific feedback/suggestion to 'read'
    public function mark_as_read($id)
{
    // Update only the feedback with the matching ID
    $this->db->where('id', $id);
    $this->db->update($this->table, ['status' => 'read']);
}
public function get_latest_unread($limit = 4)
{
    // Fetch only the latest $limit (default 4) unread feedbacks, ordered by descending order of 'tanggal_kirim'
    $this->db->where('status', 'unread');
    $this->db->order_by('tanggal_kirim', 'DESC');  // Order by 'tanggal_kirim' to get the latest feedbacks
    $this->db->limit($limit);  // Limit to $limit rows
    $query = $this->db->get($this->table);
    return $query->result();  // Returns the unread kritik/saran as an array of objects
}


    
}
