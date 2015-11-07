<?php
class Users extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('user_model');
                $this->load->helper('url_helper');
        }
        
/*
        public function index()
        {
                $data['user_profiles'] = $this->user_model->get_userid();
                $data['title'] = 'USER PROFILE';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }
*/
        
        public function viewmyprofile() {
            $sess_array = $this->session->userdata('logged_in');
            //var_dump($sess_array['logged_in']);
            $this->viewprofile($sess_array['id']);
        }
        
        public function viewprofile($id = 0)
        {
                $data['user_profiles'] = $this->user_model->get_userid($id);
                $data['title'] = 'USER PROFILE';

                if (empty($data['user_profiles']))
                {
                        show_404();
                }
                
                $data['firstName'] = $data['user_profiles']['firstName'];
                $data['family'] = $data['user_profiles']['familiy'];

                $this->load->view('templates/header', $data);
                $this->load->view('users/index', $data);
                $this->load->view('templates/footer');
        }        
        
              
        
}
