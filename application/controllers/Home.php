<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = 'Home | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('home');
    }
}
