<?php

class Users_model extends CI_Model {
    public function __construct()
    {
            $this->load->database();
    }
    public function getuser($username, $password)
    {
      $this -> db -> select('id, username, password, role');
      $this -> db -> from('users');
      $this -> db -> where('username', $username);
      $this -> db -> where('password', $password);
      $this -> db -> limit(1);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1)
      {
        return $query->result();
      }
      else
      {
        return false;
      }
    }

}