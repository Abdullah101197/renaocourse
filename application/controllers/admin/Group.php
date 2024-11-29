<?php
class Group extends Admin_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Group_model');
        $this->load->helper('url');
    }

    // Display all groups
    public function index() {
        $data['groups'] = $this->Group_model->get_all_groups();
        $this->load->view('admin/group/index', $data);
    }

    // Show the form to create a new group
    public function create() {
        $this->load->view('admin/group/create');
    }

    // Handle form submission to create a new group
    public function store() {
        $data = array(
            'name' => $this->input->post('name'),
            'subject' => $this->input->post('subject'),
            'method' => $this->input->post('method'),
            'type' => $this->input->post('type'),
            'teacher_id' => $this->input->post('teacher_id'),
            'level' => $this->input->post('level'),
        );
        $this->Group_model->create_group($data);
        redirect('group');
    }

    // Show the form to edit an existing group
    public function edit($id) {
        $data['group'] = $this->Group_model->get_group_by_id($id);
        $this->load->view('admin/group/edit', $data);
    }

    // Handle form submission to update an existing group
    public function update($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'subject' => $this->input->post('subject'),
            'method' => $this->input->post('method'),
            'type' => $this->input->post('type'),
            'teacher_id' => $this->input->post('teacher_id'),
            'level' => $this->input->post('level'),
        );
        $this->Group_model->update_group($id, $data);
        redirect('group');
    }

    // Delete a group
    public function delete($id) {
        $this->Group_model->delete_group($id);
        redirect('group');
    }
}
