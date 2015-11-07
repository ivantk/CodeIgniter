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
        public function viewprofile($id = 0)
        {
                $data['user_profiles'] = $this->user_model->get_userid($id);
                $data['title'] = 'USER PROFILE';

                if (empty($data['user_profiles']))
                {
                        show_404();
                }

                $data['title'] = $data['user_profiles']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('users/users', $data);
                $this->load->view('templates/footer');
        }        
        
              
        
}
