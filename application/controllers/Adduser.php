<?php
class Adduser extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('usermanagement_model');
        $this->load->model('users_model');
    }
 
    public function index(){
        if($this->session->userdata('logged_in_admin')){
            $data['title'] = "Add user";
            $this->load->view('templates/header',$data);
            $this->load->view('user/adduser',$data);
            $this->load->view('templates/footer',$data);
        }
        else{
            redirect(base_url('index.php/userlogin/index'), 'refresh');
        }
    }
    public function adduser(){
        if ($this->input->post('submit')){
            $username = trim($this->input->post('username'));
            $password = trim($this->input->post('password'));
            $role = trim($this->input->post('role'));
            $result = $this->users_model->getuser($username, $password);
            if($result == 0){
                $info = array(
                    'username' => $username,
                    'password' => $password,
                    'role' => $role
                );
                $this->usermanagement_model->adduser($info);
                redirect(base_url('index.php/usermanagement/index'), 'refresh');
            }
            else{
                echo "The username ".$username." already exist!";
            }
	}
    }
}