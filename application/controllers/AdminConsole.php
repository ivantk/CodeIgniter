<?php
class AdminConsole extends CI_Controller
{


    public function index()
    {
        if ($this->session->userdata('logged_in_admin')) {
            $session_data = $this->session->userdata('logged_in_admin');
            $data['username'] = $session_data['username'];
            $data['title'] = "Admin Panel";
            $this->load->view('templates/header', $data);
            $this->load->view('admin/adminpanel', $data);
            $this->load->view('templates/footer', $data);
        }
    }
}
?>
