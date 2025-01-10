<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


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
