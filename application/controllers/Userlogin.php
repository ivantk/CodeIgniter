<?php
class Userlogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index()
    {
//      $this->load->library('form_validation');
//
//      $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
//      $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
//
//      if($this->form_validation->run() == FALSE)
//      {
        
        $data['title'] = "User login";
        $this->load->view('templates/header',$data);
        $this->load->view('user/userlogin',$data);
        $this->load->view('templates/footer',$data);
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
     //  var_dump($result);
      if($result)
      {
        $sess_array = array();
        foreach($result as $row)
        {
            $sess_array = array(
              'id' => $row->id,
              'username' => $row->username,
              'role' => $row->role
            );       
        }
        switch($sess_array['role']){
            case 'admin':
                $this->session->set_userdata('logged_in_admin', $sess_array);
                redirect(base_url('index.php/usermanagement/index'), 'refresh');
                break;
            case 'student':
                $this->session->set_userdata('logged_in_student', $sess_array);
                //redirect
                break;
            case 'lector':
                $this->session->set_userdata('logged_in_lector', $sess_array);
                //redirect
                break;
            default: 'Access denied!';
        }
       //echo "Successfuly logged in";
        return TRUE;
      }
      else
      {
        echo 'Invalid username or password';
        return false;
      }
      
     
    }   
    public function logout()
    {
      $this->session->unset_userdata('logged_in');
      $this->session->sess_destroy();
      redirect(base_url(), 'refresh');
    }
}