<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminDashboard extends CI_Controller
{
    public $profile_data = array();
    public function __construct()
    {
        parent::__construct();
        if (sessionId('user_id') == "") {
            redirect(base_url("Adminlogin"));
        }
        $this->profile_data = $this->CommonModal->getRowById('admin_login', 'id', sessionId('user_id'));
        date_default_timezone_set("Asia/Kolkata");
    }
    public function index()
    {
        $data['profile'] = $this->profile_data;
        // $data['member'] = $this->CommonModal->getNumRows("membership_list", "is_delete = '0'");
        // echo '<pre>';
        // print_r($data['membership']);
        // exit();
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Dashboard';
        $data['menu_subcat'] = 'Home';
        $data['title'] = 'Welcome! Admin';
        $data['register'] = $this->CommonModal->getNumRows('register', 'id IS NOT NULL');
        $this->load->view('admin/admindashboard', $data);
    }
    public function register_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Registration';
        $data['menu_subcat'] = 'Register list';
        $data['title'] = 'Register list ';
        $data['register_list'] = $this->CommonModal->getAllRowsInOrder('register', 'id', 'DESC');
        if (sessionId('isLogin')) {
            $data['payment'] = $this->CommonModal->getRowById('payment', ['user_id' => sessionId('isLogin')], 'id');
        }
        $this->load->view('admin/register_list', $data);
    }

    public function register_delete($id)
    {
        $this->CommonModal->getSingleRowById('register', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('register', array('id' => $id));
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "Registered Delete Successfully"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something went wrong. Please try again later ."]);
        }
        redirect('register-list');
    }

    public function feature_profile()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $post['img'] = docUpload($_FILES['image']);

            $insertData = $this->CommonModal->insertRow('feature_profile', $post);
            if ($insertData) {
                $msg = '<div class="alert alert-success" role="alert">Social Media Added Successfully</div>';
            } else {
                $msg = '<div class="alert alert-danger" role="alert"> Something went wrong. Please try again later </div>';
            }
            redirect('feature-list');
            exit();
        }
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Profile';
        $data['menu_subcat'] = 'Profile list';
        $data['title'] = 'Profile list';
        $data['feature_profile'] = $this->CommonModal->getAllRowsInOrder('feature_profile', 'id', 'DESC');
        $this->load->view('admin/feature_profile', $data);
    }

    public function feature_delete($id)
    {
        $data = $this->CommonModal->getSingleRowById('feature_profile', 'id', $id);
        if (file_exists("./uploads/'" . $data['image'])) {
            unlink("./uploads/'" . $data['image']);
        }
        if ($this->CommonModal->deleteRowById('feature_profile', array('id' => $id))) {
            $this->session->set_userdata('msg', ' Delete successfully');
            $this->session->set_userdata('msg_class', 'alert-success');
        } else {
            $this->session->set_userdata('msg', 'Not Delete, Please try again!!');
            $this->session->set_userdata('msg_class', 'alert-danger');
        }
        redirect('feature-list');
    }
    public function tongue_delete($id)
    {
        $this->CommonModal->getSingleRowById('mother_tongue', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('mother_tongue', array('id' => $id));
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "Mother Tongue Delete Successfully"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something went wrong. Please try again later ."]);
        }
        redirect('mother-tongue');
    }
    public function religion_delete($id)
    {
        $this->CommonModal->getSingleRowById('religion', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('religion', array('id' => $id));
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "Religion Delete Successfully"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something went wrong. Please try again later ."]);
        }
        redirect('religion-list');
    }
    public function marital_delete($id)
    {
        $this->CommonModal->getSingleRowById('marital_status', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('marital_status', array('id' => $id));
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "Marital Status Delete Successfully"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something went wrong. Please try again later ."]);
        }
        redirect('marital-status');
    }
    public function education_delete($id)
    {
        $this->CommonModal->getSingleRowById('education', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('education', array('id' => $id));
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "Education Delete Successfully"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something went wrong. Please try again later ."]);
        }

        redirect('education');
    }
    public function occupation_delete($id)
    {
        $this->CommonModal->getSingleRowById('occupation', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('occupation', array('id' => $id));
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "Occupation Delete Successfully"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something went wrong. Please try again later ."]);
        }
        redirect('occupation');
    }
    public function height_delete($id)
    {
        $this->CommonModal->getSingleRowById('height', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('height', array('id' => $id));
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "Height Delete Successfully"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something went wrong. Please try again later ."]);
        }

        redirect('height-list');
    }
    public function search_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Search';
        $data['menu_subcat'] = 'Search list';
        $data['title'] = 'Search list ';
        $data['search'] = $this->CommonModal->getAllRowsInOrder('search', 'id', 'DESC');
        $this->load->view('admin/search_list', $data);
    }
    public function contact_list()
    {
        $data['contact'] = $this->CommonModal->getAllRowsInOrder('contact', '1', 'DESC');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $updateData = $this->CommonModal->updateRowById('contact', 'id', 1, $post);
            if ($updateData) {
                flashMultiData(['success_status' => "success", 'msg' => "Contact Details Updated"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Contact Details Update query error."]);
            }
            redirect('contact-list');
            exit();
        }
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Contact';
        $data['menu_subcat'] = 'Contact list';
        $data['title'] = 'Contact ';
        $data['search'] = $this->CommonModal->getAllRowsInOrder('contact', 'id', 'DESC');
        $this->load->view('admin/contact_list', $data);
    }
    public function setting()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRow('religion', $post);
        }
        $data['religion'] = $this->CommonModal->getAllRowsInOrder('religion', 'id', 'DESC');
        $data['language'] = $this->CommonModal->getAllRowsInOrder('mother_tongue', 'id', 'DESC');
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Setting';
        $data['menu_subcat'] = 'Setting list';
        $data['title'] = 'Setting ';
        $this->load->view('admin/setting', $data);
    }
    public function mother_tongue()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRow('mother_tongue', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Mother Tongue Added"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Mother Tongue saving query error."]);
            }
        }
        $data['mother_tongue'] = $this->CommonModal->getAllRowsInOrder('mother_tongue', 'id', 'DESC');
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Mother Tongue';
        $data['menu_subcat'] = 'Mother Tongue list';
        $data['title'] = 'Mother Tongue ';
        $this->load->view('admin/mother_tongue', $data);
    }
    public function franchisee_list()
    {
        $id = $this->input->get('id');
        $decrypt_id = decryptId($this->input->get('id'));
        $get = $this->CommonModal->getSingleRowById('franchisee_list', "id = '$decrypt_id'");
        $data['address'] = set_value('address') == false ? @$get['address'] : set_value('address');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            if (isset($id)) {
                $insertData = $this->CommonModal->updateRowById('franchisee_list', 'id', $decrypt_id, $post);
                if ($insertData) {
                    flashMultiData(['success_status' => "success", 'msg' => "Franchisee Address Updated"]);
                } else {
                    flashMultiData(['success_status' => "error", 'msg' => "Franchisee Address saving query error."]);
                }
            } else {
                $insertData = $this->CommonModal->insertRow('franchisee_list', $post);
                if ($insertData) {
                    flashMultiData(['success_status' => "success", 'msg' => "Franchisee Address Added"]);
                } else {
                    flashMultiData(['success_status' => "error", 'msg' => "Franchisee Address saving query error."]);
                }
            }
            redirect('franchisee-list');
        }
        $data['franchisee'] = $this->CommonModal->getAllRowsInOrder('franchisee_list', 'id', 'DESC');
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Franchisee Address';
        $data['menu_subcat'] = 'Franchisee Address list';
        $data['title'] = 'Franchisee Address ';
        $this->load->view('admin/franchisee_list', $data);
    }

    public function franchisee_delete($id)
    {
        $this->CommonModal->getSingleRowById('franchisee_list', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('franchisee_list', array('id' => $id));
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "franchisee Address Delete Successfully"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something went wrong. Please try again later ."]);
        }
        redirect('franchisee-list');
    }


    public function marital_status()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRow('marital_status', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Marital Status Added"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Marital Status saving query error."]);
            }
        }
        $data['marital_status'] = $this->CommonModal->getAllRowsInOrder('marital_status', 'id', 'DESC');
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Marital Status';
        $data['menu_subcat'] = 'Marital Status list';
        $data['title'] = 'Marital Status ';
        $this->load->view('admin/marital_status', $data);
    }
    public function education()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRow('education', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Education Added"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Education saving query error."]);
            }
        }
        $data['education'] = $this->CommonModal->getAllRowsInOrder('education', 'id', 'DESC');
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Education';
        $data['menu_subcat'] = 'Education list';
        $data['title'] = ' Education ';
        $this->load->view('admin/education', $data);
    }
    public function occupation()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRow('occupation', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Occupation Added"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Occupation saving query error."]);
            }
        }
        $data['occupation'] = $this->CommonModal->getAllRowsInOrder('occupation', 'id', 'DESC');
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Occupation';
        $data['menu_subcat'] = 'Occupation list';
        $data['title'] = ' Occupation ';
        $this->load->view('admin/occupation', $data);
    }
    public function height_list()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRow('height', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Height Added"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Height saving query error."]);
            }

        }
        $data['height'] = $this->CommonModal->getAllRowsInOrder('height', 'id', 'DESC');
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Height';
        $data['menu_subcat'] = 'Height list';
        $data['title'] = ' Height ';
        $this->load->view('admin/height_list', $data);
    }
    public function religion_list()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRow('religion', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Religion Added"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Religion saving query error."]);
            }
        }
        $data['religion'] = $this->CommonModal->getAllRowsInOrder('religion', 'id', 'DESC');
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Religion ';
        $data['menu_subcat'] = 'Religion list';
        $data['title'] = 'Religion ';
        $this->load->view('admin/religion_list', $data);
    }
    public function membership_list()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRow('membership', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Membership Plan Added"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Membership Plan saving query error."]);
            }
            redirect('membership-list');
            exit();
        }
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Membership';
        $data['menu_subcat'] = 'Membership list';
        $data['title'] = 'Membership ';
        $data['membership'] = $this->CommonModal->getAllRowsInOrder('membership', 'id', 'DESC');
        $this->load->view('admin/membership_list', $data);
    }

    public function contact_delete($id)
    {
        $data = $this->CommonModal->getSingleRowById('contact_delete', 'id', $id);
        if (file_exists("./uploads/'" . $data['image'])) {
            unlink("./uploads/'" . $data['image']);
        }
        if ($this->CommonModal->deleteRowById('contact_delete', array('id' => $id))) {
            $this->session->set_userdata('msg', ' Delete successfully');
            $this->session->set_userdata('msg_class', 'alert-success');
        } else {
            $this->session->set_userdata('msg', 'Not Delete, Please try again!!');
            $this->session->set_userdata('msg_class', 'alert-danger');
        }
        redirect('contact_delete');
    }
    public function member_delete($id)
    {
        $this->CommonModal->getSingleRowById('membership', 'id', $id);
        $deleteData = $this->CommonModal->deleteRowById('membership', array('id' => $id));
        // $deletedata = $this->CommonModal->deleteRowById('membership', 'id');
        if ($deleteData) {
            flashMultiData(['success_status' => "success", 'msg' => "Membership Plan Deleted"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Membership Plan delete query error."]);
        }
        redirect('membership-list');
    }

    public function featuredProduct()
    {
        $featured = $this->input->post('featured');
        $pid = $this->input->post('pid');
        $this->CommonModal->updateRowById('register', 'id', $pid, array('is_featured' => $featured));
    }
    public function statusUpdate()
    {
        $status = $this->input->post('status');
        $pid = $this->input->post('pid');
        $this->CommonModal->updateRowById('payment', 'id', $pid, array('is_status' => $status));
    }
    public function isVisibleUser()
    {
        
        $visible = $this->input->post('visible');
        $pid = $this->input->post('pid');
        $this->CommonModal->updateRowById('register', 'id', $pid, array('is_visible' => $visible));
    }
    public function payment_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Rishtey Marriage';
        $data['menu_cat'] = 'Payment';
        $data['menu_subcat'] = 'Payment list';
        $data['title'] = 'Payment list ';
        $data['payment'] = $this->CommonModal->getAllRowsInOrder('payment', 'id', 'DESC');
        $this->load->view('admin/payment_list', $data);
    }
    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_type');
        redirect(base_url('admin'));
    }




    // public function add_company($cid = 0)
    // {
    //     $data['favicon'] = base_url() . 'assets/logo.png';
    //     $data['profile'] = $this->profile_data;
    //     $data['projectTitle'] = 'Open Technology';
    //     $data['menu_cat'] = 'Company';
    //     $data['menu_subcat'] = 'Add company';
    //     $data['title'] = " Add company";
    //     if (count($_FILES) > 0) {

    //         if ($_FILES['logo']['name'] != '') {
    //             $post['logo'] = imageUpload('logo', 'uploads/');
    //             $savedata = $this->CommonModal->insertRowReturnId('tbl_company', $post);
    //             if ($savedata) {
    //                 $this->session->set_userdata('msg', $msg);
    //                 $this->session->set_userdata('msg_class', 'alert-success');
    //             } else {
    //                 $this->session->set_userdata('msg', 'Something went Wrong. please try again later  ');
    //             }
    //         }
    //         redirect(base_url('company-list'));
    //     } else {
    //         $this->load->view('admin/add_company', $data);
    //     }
    // }
    // public function add_course($cid = 0)
    // {
    //     $data['favicon'] = base_url() . 'assets/logo.png';
    //     $data['profile'] = $this->profile_data;
    //     $data['projectTitle'] = 'Open Technology';
    //     $data['menu_cat'] = 'Course';
    //     $data['menu_subcat'] = 'Add Course';
    //     $data['title'] = " Add Course";
    //     if ($cid != 0) {
    //         $data['course'] = $this->CommonModal->getSingleRowById('tbl_course', ['id' => $cid]);
    //     }
    //     if (count($_POST) > 0) {
    //         $post = $this->input->post();
    //         if ($_FILES['logo']['name'] != '') {
    //             $post['logo'] = imageUpload('logo', 'uploads/');
    //         }
    //         if ($cid != 0) {
    //             $savedata = $this->CommonModal->updateRowById('tbl_course', 'id', $cid, $post);
    //             $msg = 'Course updated Sucessfully';
    //         } else {
    //             $savedata = $this->CommonModal->insertRowReturnId('tbl_course', $post);
    //             $msg = 'Course added Sucessfully';
    //         }
    //         if ($savedata) {
    //             $this->session->set_userdata('msg', $msg);
    //             $this->session->set_userdata('msg_class', 'alert-success');
    //         } else {
    //             $this->session->set_userdata('msg', 'Something went Wrong. please try again later  ');
    //         }
    //     } else {
    //         $this->load->view('admin/add_course', $data);
    //     }
    // }
    // public function add_blog($cid = 0)
    // {
    //     $data['favicon'] = base_url() . 'assets/logo.png';
    //     $data['profile'] = $this->profile_data;
    //     $data['projectTitle'] = 'Open Technology';
    //     $data['menu_cat'] = 'Blog';
    //     $data['menu_subcat'] = 'Add Blog';
    //     $data['title'] = " Add Blog";
    //     if ($cid != 0) {
    //         $data['blog'] = $this->CommonModal->getSingleRowById('tbl_blogs', ['id' => $cid]);
    //     }
    //     if (count($_POST) > 0) {
    //         $post = $this->input->post();
    //         if ($_FILES['video']['name'] != '') {
    //             $post['video'] = imageUpload('video', 'uploads/video/');
    //         }

    //         if ($cid != 0) {
    //             $savedata = $this->CommonModal->updateRowById('tbl_blogs', 'id', $cid, $post);
    //             $msg = 'Blog updated Sucessfully';
    //         } else {

    //             $savedata = $this->CommonModal->insertRowReturnId('tbl_blogs', $post);
    //             $msg = 'Blog added Sucessfully';
    //         }
    //         if ($savedata) {
    //             $this->session->set_userdata('msg', $msg);
    //             $this->session->set_userdata('msg_class', 'alert-success');
    //         } else {
    //             $this->session->set_userdata('msg', 'Something went Wrong. please try again later  ');
    //         }
    //         redirect(base_url('blog-list'));
    //     } else {
    //         $this->load->view('admin/add_blog', $data);
    //     }

    // }



    // public function course_list()
    // {
    //     $data['profile'] = $this->profile_data;
    //     $data['projectTitle'] = 'Open Technology';
    //     $data['menu_cat'] = 'Course';
    //     $data['menu_subcat'] = 'Course list';
    //     $data['title'] = 'Course list ';
    //     $data['course_list'] = $this->CommonModal->getAllRowsInOrder('tbl_course', 'id', 'DESC');
    //     $this->load->view('admin/course_list', $data);
    // }
    // public function blog_list()
    // {
    //     $data['profile'] = $this->profile_data;
    //     $data['projectTitle'] = 'Open Technology';
    //     $data['menu_cat'] = 'blog';
    //     $data['menu_subcat'] = 'blog list';
    //     $data['title'] = 'blog list ';
    //     $data['blog_list'] = $this->CommonModal->getAllRowsInOrder('tbl_blogs', 'id', 'DESC');
    //     $this->load->view('admin/blog_list', $data);
    // }
    // public function company_delete($bid)
    // {
    //     $data = $this->CommonModal->getSingleRowById('tbl_company', 'id', $bid);
    //     if (file_exists("./uploads/'" . $data['logo'])) {
    //         unlink("./uploads/'" . $data['logo']);
    //     }
    //     if ($this->CommonModal->deleteRowById('tbl_company', array('id' => $bid))) {
    //         $this->session->set_userdata('msg', 'Company Delete successfully');
    //         $this->session->set_userdata('msg_class', 'alert-success');
    //     } else {
    //         $this->session->set_userdata('msg', 'Company not Delete, Please try again!!');
    //         $this->session->set_userdata('msg_class', 'alert-danger');
    //     }
    //     redirect('/company-list');
    // }
    // public function blog_delete($bid)
    // {
    //     $data = $this->CommonModal->getSingleRowById('tbl_blogs', 'id', $bid);
    //     if (file_exists("./uploads/video'" . $data['video'])) {
    //         unlink("./uploads/video'" . $data['video']);
    //     }
    //     if ($this->CommonModal->deleteRowById('tbl_blogs', array('id' => $bid))) {
    //         $this->session->set_userdata('msg', 'Company Delete successfully');
    //         $this->session->set_userdata('msg_class', 'alert-success');
    //     } else {
    //         $this->session->set_userdata('msg', 'Company not Delete, Please try again!!');
    //         $this->session->set_userdata('msg_class', 'alert-danger');
    //     }
    //     redirect('/blog-list');
    // }
    // public function course_delete($bid)
    // {
    //     $data = $this->CommonModal->getSingleRowById('tbl_course', 'id', $bid);
    //     if (file_exists("./uploads/'" . $data['logo'])) {
    //         unlink("./uploads/'" . $data['logo']);
    //     }
    //     if ($this->CommonModal->deleteRowById('tbl_course', array('id' => $bid))) {
    //         $this->session->set_userdata('msg', 'Company Delete successfully');
    //         $this->session->set_userdata('msg_class', 'alert-success');
    //     } else {
    //         $this->session->set_userdata('msg', 'Company not Delete, Please try again!!');
    //         $this->session->set_userdata('msg_class', 'alert-danger');
    //     }
    //     redirect('/course-list');
    // }
    // public function update_bcard($pid)
    // {
    //     $data['profile'] = $this->profile_data;
    //     $data['projectTitle'] = 'Open Technology';
    //     $data['menu_cat'] = '';
    //     $data['menu_subcat'] = '';
    //     $data['title'] = 'Update BCard';
    //     $data['tag'] = 'edit';
    //     $data['bcard_list'] = $this->CommonModal->getRowById('tbl_register', 'id', $pid);
    //     if (count($_POST) > 0) {
    //         $post = $this->input->post();
    //         $bcard_id = $this->CommonModal->updateRowById('tbl_register', 'id', $pid, $post);
    //         if ($bcard_id) {
    //             userData('msg', '<div class="alert alert-success">BCard Updated successfully</div>');
    //             redirect('AdminDashboard/bcard_list');
    //         } else {
    //             userData('msg', '<div class="alert alert-danger">BCard not updated, Server error..</div>');
    //             $this->load->view('admin/new_bcard', $data);
    //         }
    //     } else {
    //         $this->load->view('admin/new_bcard', $data);
    //     }
    // }
    // public function add_bcard($bid = 0)
    // {
    //     $data['profile'] = $this->profile_data;
    //     $data['projectTitle'] = 'Open Technology';
    //     $data['menu_cat'] = 'Bcard';
    //     $data['menu_subcat'] = 'Add Bcard ';
    //     $data['title'] = 'Add BCard ';
    //     $data['company_list'] = $this->CommonModal->getAllRowsInOrder('tbl_webangel_admin', 'id', 'DESC');
    //     if ($bid != 0) {
    //         $data['card'] = $this->CommonModal->getSingleRowById('tbl_register', ['id' => $bid]);
    //     }
    //     if (count($_POST) > 0) {
    //         $post = $this->input->post();
    //         if ($_FILES['logo']['name'] != '') {
    //             $post['logo'] = imageUpload('logo', 'uploads/bcard/');
    //         }
    //         $company  = $this->CommonModal->getSingleRowById('tbl_webangel_admin', ['id' => $post['company_id']]);
    //         $post['company_name'] = $company['name'];
    //         $post['slug_url'] = url_title($post['name'], '-', true);
    //         $post['slug_company'] = url_title($post['company_name'], '-', true);
    //         if ($bid != 0) {
    //             $bcard_id = $this->CommonModal->updateRowById('tbl_register', 'id', $bid, $post);
    //             $msg = 'BCard updated Sucessfully';
    //         } else {
    //             label:
    //             $already = $this->CommonModal->getRowById('tbl_register', 'slug_url', $post['slug_url']);
    //             if ($already == '') {
    //             } else {
    //                 $post['slug_url'] .= rand('99', '9999');
    //                 goto label;
    //             }
    //             $bcard_id = $this->CommonModal->insertRowReturnId('tbl_register', $post);
    //             $msg = 'BCard updated Sucessfully';
    //         }
    //         if ($bcard_id) {
    //             userData('msg', '<div class="alert alert-success">' . $msg . '</div>');
    //             redirect('/bcard-list');
    //         } else {
    //             userData('msg', '<div class="alert alert-danger">BCard not added, Server error..</div>');
    //             redirect('/bcard-list');
    //         }
    //     } else {
    //         $this->load->view('admin/add_course', $data);
    //     }
    // }
    // public function bcard_list($id = 0)
    // {
    //     $data['profile'] = $this->profile_data;
    //     $data['projectTitle'] = 'Open Technology';
    //     $data['menu_cat'] = 'Bcard';
    //     $data['menu_subcat'] = 'BCard list';
    //     $data['title'] = 'BCard list ';
    //     if ($id != 0) {
    //         $data['bcard_list'] = $this->CommonModal->getRowByIdInOrder('tbl_register', ['id' => $id], 'id', 'DESC');
    //     } else {
    //         if (sessionId('user_type') == '0') {
    //             $data['bcard_list'] = $this->CommonModal->getRowByIdInOrder('tbl_register', ['company_id' => sessionId('user_id')], 'id', 'DESC');
    //         } else {
    //             $data['bcard_list'] = $this->CommonModal->getAllRowsInOrder('tbl_register', 'id', 'DESC');
    //         }
    //     }
    //     $this->load->view('admin/bcard_list', $data);
    // }
    // public function bcard_delete($bid)
    // {
    //     $data = $this->CommonModal->getSingleRowById('tbl_register', 'id', $bid);
    //     if (file_exists("./uploads/bcard/'" . $data['logo'])) {
    //         unlink("./uploads/bcard/'" . $data['logo']);
    //     }
    //     if ($this->CommonModal->deleteRowById('tbl_register', array('id' => $bid))) {
    //         $this->session->set_userdata('msg', 'bcard Delete successfully');
    //         $this->session->set_userdata('msg_class', 'alert-success');
    //     } else {
    //         $this->session->set_userdata('msg', 'bcard not Delete, Please try again!!');
    //         $this->session->set_userdata('msg_class', 'alert-danger');
    //     }
    //     redirect('/bcard-list');
    // }

}
