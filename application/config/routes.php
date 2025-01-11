<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

///Website routes
$route['about'] = 'Home/about';
$route['login'] = 'Home/login';
$route['register'] = 'Home/register';
$route['contact'] = 'Home/contact';
$route['membership'] = 'Home/membership';
$route['forget_password'] = 'Home/forget_password';
$route['personal_profile'] = 'Home/personal_profile';
$route['payment'] = 'Home/payment';
$route['member_profile'] = 'Home/member_profile';
$route['privacy_policy'] = 'Home/privacy_policy';
$route['terms_condition'] = 'Home/terms_condition';
$route['quick_search'] = 'Home/quick_search';
$route['keryword_search'] = 'Home/keryword_search';
$route['profile_search'] = 'Home/profile_search';
$route['advance_search'] = 'Home/advance_search';
$route['pay_now'] = 'Home/pay_now';
$route['search_profile'] = 'Home/search_profile';
$route['print_profile'] = 'Home/print_profile';




// Admin routes
$route['Adminlogin'] = 'Adminlogin';
$route['admin'] = 'Adminlogin';
$route['adminlogin/validatelogin'] = 'adminlogin/validatelogin';
$route['AdminDashboard'] = 'AdminDashboard';
// Admin url
$route['register-list'] = 'AdminDashboard/register_list';
$route['feature-list'] = 'AdminDashboard/feature_profile';
$route['search-list'] = 'AdminDashboard/search_list';
$route['height-list'] = 'AdminDashboard/height_list';
$route['contact-list'] = 'AdminDashboard/contact_list';
$route['log_out'] = 'Home/logout';
$route['membership-list'] = 'AdminDashboard/membership_list';
$route['setting'] = 'AdminDashboard/setting';
$route['mother-tongue'] = 'AdminDashboard/mother_tongue';
$route['marital-status'] = 'AdminDashboard/marital_status';
$route['education'] = 'AdminDashboard/education';
$route['occupation'] = 'AdminDashboard/occupation';
$route['religion-list'] = 'AdminDashboard/religion_list';
$route['payment-list'] = 'AdminDashboard/payment_list';
$route['franchisee-list'] = 'AdminDashboard/franchisee_list';
$route['feature-delete/(:any)'] = 'AdminDashboard/feature_delete/$1';
$route['religion-delete/(:any)'] = 'AdminDashboard/religion_delete/$1';
$route['contact-delete/(:any)'] = 'AdminDashboard/contact_delete/$1';
$route['member-delete/(:any)'] = 'AdminDashboard/member_delete/$1';
$route['logout'] = 'AdminDashboard/logout';