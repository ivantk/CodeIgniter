<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_userid($id = 0)
        {
                $query = $this->db->get_where('user_profiles', array('userid' => $id));
                return $query->row_array();
        }        
}
