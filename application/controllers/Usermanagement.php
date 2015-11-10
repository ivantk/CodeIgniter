<?php
class Usermanagement extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->model('usermanagement_model');
 }
 
 public function index()
 {
   if($this->session->userdata('logged_in_admin')){
        $session_data = $this->session->userdata('logged_in_admin');
        $data['username'] = $session_data['username'];
        $data['rows']=$this->usermanagement_model->getallusers();
        $data['title'] = "User management";
        $this->load->view('templates/header',$data);
        $this->load->view('user/usermanagement',$data);
        $this->load->view('templates/footer',$data);
   }
   else
   {
      redirect(base_url('index.php/userlogin/index'), 'refresh');
   }
 }
    public function deleteuser($id){
        $this->db->delete('users', array('id' => $id)); 
        redirect(base_url('index.php/usermanagement/index'), 'refresh');
    }
}