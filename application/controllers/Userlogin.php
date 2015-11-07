<?php
class Userlogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    function index()
    {
//      $this->load->library('form_validation');
//
//      $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
//      $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
//
//      if($this->form_validation->run() == FALSE)
//      {
        $this->load->view('user/userlogin');
//      }
//      else
//      {
//        redirect('home', 'refresh');
//      }

    }

    function checkdatabase()
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $result = $this->users_model->getuser($username, $password);
       var_dump($result);
      if($result)
      {
        $sess_array = array();
        foreach($result as $row)
        {
          $sess_array = array(
            'id' => $row->id,
            'username' => $row->username
          );
          $this->session->set_userdata('logged_in', $sess_array);
        }
        return TRUE;
      }
      else
      {
        echo 'Invalid username or password';
        return false;
      }
    }   
}