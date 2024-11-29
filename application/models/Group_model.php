<?php
class Group_model extends CI_Model {
    
    // Fetch all groups
    public function get_all_groups() {
        return $this->db->get('group_course')->result();
    }

    // Get a specific group
    public function get_group_by_id($id) {
        return $this->db->where('id', $id)->get('group_course')->row();
    }

    // Create a new group
    public function create_group($data) {
        return $this->db->insert('group_course', $data);
    }

    // Update an existing group
    public function update_group($id, $data) {
        return $this->db->where('id', $id)->update('group_course', $data);
    }

    // Delete a group
    public function delete_group($id) {
        return $this->db->where('id', $id)->delete('group_course');
    }
}
    