<?php
class Home extends CI_Controller

{
    public function index()
    {
        $this->load->view('includes/header-link');
        $this->load->view('home');
    }
}
