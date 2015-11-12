<?php
class Courses extends CI_Controller {//каталог

        public function __construct()
        {
                parent::__construct();
                $this->load->model('courses_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['title'] = "Courses list view";
            $data['courses'] = $this->courses_model->getall();
                $this->load->view('templates/header', $data);
                $this->load->view('courses/courses', $data);
                $this->load->view('templates/footer', $data);
        }

        public function view($id = NULL)
        {
            $data['course_item'] = $this->courses_model->get_course($id);

            if (empty($data['course_item']))
            {
                    show_404();
            }

            $data['name'] = $data['course_item']['name'];

            $this->load->view('templates/header', $data);
            $this->load->view('courses/view', $data);
            $this->load->view('templates/footer');
        }
        public function create(){
            $data['title']='Create new course';
            $this->load->view('templates/header', $data);
            $this->load->view('courses/create', $data);
            $this->load->view('templates/footer', $data);
            
        }
        public function insertCourse(){
            $this->load->model('model/courses_model');
            $this->courses_model->insert_course();
            redirect(base_url('index.php/Courses/index'), 'refresh');
        }

        public function deleteCourse($id){
            $this->db->delete('courses', array('id' => $id));
            redirect(base_url('index.php/Courses/index'), 'refresh');
        }
            
        
}
