<?php
class Courses_model extends CI_Model{
    public function __costruct(){
        $this->load->database();
    }
    public function get_course($id = FALSE)
    {
        if ($id === FALSE)
        {
                $query = $this->db->get('courses');
                return $query->result_array();
        }

        $query = $this->db->get_where('courses', array('id' => $id));
        return $query->row_array();
    }
    public function insert_course()
    {
       $this->load->helper('url');

       $slug = url_title($this->input->post('name'), 'dash', TRUE);

       $data = array(
        'name' => $this->input->post('name'),
        'summary' => $this->input->post('summary'),
        'description' => $this->input->post('description'),
        );
        return $this->db->insert('courses', $data);
    }
}