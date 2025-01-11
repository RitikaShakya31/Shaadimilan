<?php
class Home extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->contact = $this->CommonModal->getAllRows('contact');
	}  
    public function index()
    {
        $data['membership_latest'] = $this->CommonModal->getAllRowsWithLimit('membership', '3', 'id', 'DESC');
        $data['title'] = 'Home | Shaadi Milan Mitromony';
        $data['contact'] = $this->contact;
        $this->load->view('includes/header-link' , $data);
        $this->load->view('home');
    }

    public function about()
    {
        $data['title'] = 'About | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('about');
    }

    public function login()
    {
        $data['title'] = 'Login | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('login');
    }

    public function register()
    {
        $data['title'] = 'Register | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('register');
    }

    public function contact()
    {
        $data['title'] = 'Contact Us | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('contact');
    }

    public function membership()
    {
        $data['membership'] = $this->CommonModal->getAllRowsInOrder('membership', 'id', 'ASC');
        $data['title'] = 'Membership | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('membership');
    }

    public function forget_password()
    {
        $data['title'] = 'Forget Password | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('forget_password');
    }

    public function personal_profile()
    {
        $data['title'] = 'Personal Profile | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('personal_profile');
    }

    public function payment()
    {
        $data['title'] = 'Transaction History | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('payment');
    }
    public function member_profile()
    {
        $data['title'] = 'Member Profile | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('member_profile');
    }

    public function privacy_policy()
    {
        $data['title'] = 'Privacy Policy | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('privacy_policy');
    }

    public function terms_condition()
    {
        $data['title'] = 'Terms Condition | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('terms_condition');
    }

    public function quick_search()
    {
        $data['title'] = 'Search Your Partner | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('quick_search');
    }

    public function keryword_search()
    {
        $data['title'] = 'KeyWord Search | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('keryword_search');
    }

    public function profile_search()
    {
        $data['title'] = 'Profile Search | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('profile_search');
    }

    public function advance_search()
    {
        $data['title'] = 'Advance Search | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('advance_search');
    }

    public function pay_now()
    {
        $data['title'] = 'Pay Now | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('pay_now');
    }

    public function search_profile()
    {
        $data['title'] = 'Search Profile | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('search_profile');
    }

    public function print_profile()
    {
        $data['title'] = 'Print Profile | Shaadi Milan Mitromony';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('print_profile');
    }
}
