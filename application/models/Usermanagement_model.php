<?php
class Usermanagement_model extends CI_Model {
    public function __construct()
    {
       parent::__construct();
    }
    public function getallusers(){
        $query = $this->db->get('users');
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    public function adduser($info){
        $this->db->insert('users', $info);
    }
}