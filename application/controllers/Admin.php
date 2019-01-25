<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url', 'text'));
		$this->load->model("Crud_model");
	}
	
	/******* LOGIN PAGE*******/
	public function login()
    {	if ($this->session->userdata('admin_login') == 1) {
			redirect("admin", 'refresh');
		} else {
			$data = array();
			$data['title'] = "CAPACITY BUILDING CONSISTENCY SERVICES PTE. LTD. (CBSC)";
			$data['message'] = ($this->session->userdata('message') == "" ? "NA":$this->session->userdata('message'));
			$this->load->view('admin/signin', $data);
		}
	}	
	
	/******* LOGOUT FUNCTION *******/
	function logout() {
        $sessionData = $this->session->userdata('cbsc');
        $this->session->sess_destroy();
        redirect("admin/login", 'refresh');
	}
	
	/******* LOGIN CHECK FUNCTION *******/
    public function login_check()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $result = $this->Crud_model->check_admin_info($email, $password);

        $sdata = array();
        if ($result) {
            $sdata['id'] = $result->id;
            $sdata['username'] = $result->username;
			$this->session->set_userdata('cbsc', $sdata);
			$this->session->set_userdata('admin_login', '1');
            redirect('/admin');

        } else {
            $sdata['message'] = "Your Email/Password Invalid";
			$this->session->set_userdata('cbsc', $sdata);
            redirect('/admin/login');
        }

    }

	public function index()
	{	
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Dashboard";
			$this->load->view('admin/index',$data);
		} else {
			redirect('admin/login');
		}
		
    }
    
    public function home_page(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Slider Images";
			$data['allImg'] = $this->Crud_model->getAll_limit('cbsc_slider','3');
			$this->load->view('admin/home_page',$data);
		} else {
			redirect('admin/login');
		}
	} 

    public function inner(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Inner Page Images";
			$data['allImg'] = $this->Crud_model->getAll_limit('cbsc_inner_img','20');
			$this->load->view('admin/inner_page',$data);
		} else {
			redirect('admin/login');
		}
	}
	
	public function home_page_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Slider Images";
			

			$inputdata = array(
				'head_one' 	=> $this->input->post('head_one',true),
				'head_two' 	=> $this->input->post('head_two',true)
			);
	
			$config = array(
				'upload_path'	=> './upload/',
				'allowed_types' => 'JPEG|PNG|JPG|jpg|png|jpeg',
				'max_size'		=> 1000,
				'max_width' 	=> 2000,
				'max_height' 	=> 500,
			);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('inputFile')) {
					$error =  $this->upload->display_errors();
					echo $error;
			}else {
					$img1 =  $this->upload->data();
					$inputdata['image'] = $img1['file_name'];
			}

			$this->Crud_model->insertData('cbsc_slider',$inputdata);
			redirect('admin/home_page');

		} else {
			redirect('admin/login');
		}
    }	
	public function inner_page_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Inner Page Images";
			

			$inputdata = array(
				'page_name' 	=> $this->input->post('page_name',true)
			);
	
			$config = array(
				'upload_path'	=> './upload/',
				'allowed_types' =>  'JPEG|PNG|JPG|jpg|png|jpeg',
				'max_size'		=> 1000,
				'max_width' 	=> 2000,
				'max_height' 	=> 500,
			);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('inputFile')) {
					$error =  $this->upload->display_errors();
					echo $error;
			}else {
					$img1 =  $this->upload->data();
					$inputdata['image'] = date("Y.m.dhms").$img1['file_name'];
			}

			$this->Crud_model->insertData('cbsc_inner_img',$inputdata);
			redirect('admin/inner');

		} else {
			redirect('admin/login');
		}
    }
    
    public function program_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$inputdata = array(
				'program_desc' 	=> $this->input->post('program',true)
			);
			$this->Crud_model->insertData('cbsc_program',$inputdata);
			redirect('admin/program');
		} else {
			redirect('admin/login');
		}
    }
	
	public function program(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Our task to conduct Training/Study Tour Program";
			$data['program_text'] = $this->Crud_model->getAll_limit('cbsc_program','1');
			$this->load->view('admin/program',$data);
		} else {
			redirect('admin/login');
		}
	}
    
    public function who_we_are(){
        if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Who We Are";
			$data['program_text'] = $this->Crud_model->getAll_limit('cbsc_wwa','1');
			$this->load->view('admin/who_we_are',$data);
		} else {
			redirect('admin/login');
		}
	}
	
	public function who_we_are_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$inputdata = array(
				'wwa_desc' 	=> $this->input->post('program',true)
			);
			$this->Crud_model->insertData('cbsc_wwa',$inputdata);
			redirect('admin/who_we_are');
		} else {
			redirect('admin/login');
		}
    }
    
    public function expertise(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Expertise";
			$data['program_text'] = $this->Crud_model->getAll_limit('cbsc_expertise','1');
			$this->load->view('admin/expertise',$data);
		} else {
			redirect('admin/login');
		}
	}
	
	public function expertise_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$inputdata = array(
				'expertise_desc' 	=> $this->input->post('program',true)
			);
			$this->Crud_model->insertData('cbsc_expertise',$inputdata);
			redirect('admin/expertise');
		} else {
			redirect('admin/login');
		}
    }
    
    public function approch(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Approch";
			$data['program_text'] = $this->Crud_model->getAll_limit('cbsc_approch','1');
			$this->load->view('admin/approch',$data);
		} else {
			redirect('admin/login');
		}
	}
	
	public function approch_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$inputdata = array(
				'approch_desc' 	=> $this->input->post('program',true)
			);
			$this->Crud_model->insertData('cbsc_approch',$inputdata);
			redirect('admin/approch');
		} else {
			redirect('admin/login');
		}
    }
    
    public function methods_media(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Methods & Media";
			$data['program_text'] = $this->Crud_model->getAll_limit('cbsc_mnm','1');
			$this->load->view('admin/methods_media',$data);
		} else {
			redirect('admin/login');
		}
	}
	
	public function methods_media_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$inputdata = array(
				'mnm_desc' 	=> $this->input->post('program',true)
			);
			$this->Crud_model->insertData('cbsc_mnm',$inputdata);
			redirect('admin/methods_media');
		} else {
			redirect('admin/login');
		}
    }
    
    public function mission_vision(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Mission & Vision";
			$data['program_text'] = $this->Crud_model->getAll_limit('cbsc_mnv','1');
			$this->load->view('admin/mission_vision',$data);
		} else {
			redirect('admin/login');
		}
	}
	
	public function mission_vision_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$inputdata = array(
				'mnv_mission' 	=> $this->input->post('mision',true),
				'mnv_vision' 	=> $this->input->post('vision',true)
			);
			$this->Crud_model->insertData('cbsc_mnv',$inputdata);
			redirect('admin/mission_vision');
		} else {
			redirect('admin/login');
		}
    }
    
    public function speciality(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Speciality";
			$data['program_text'] = $this->Crud_model->getAll_limit('cbsc_speciality','1');
			$this->load->view('admin/speciality',$data);
		} else {
			redirect('admin/login');
		}
	}
	
	public function speciality_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$inputdata = array(
				'speciality_desc' 	=> $this->input->post('program',true)
			);
			$this->Crud_model->insertData('cbsc_speciality',$inputdata);
			redirect('admin/speciality');
		} else {
			redirect('admin/login');
		}
    }  
    
    public function facilities(){
		if ($this->session->userdata('admin_login') == 1) {
			$data = array();
			$data['title'] = "Facilities";
			$data['program_text'] = $this->Crud_model->getAll_limit('cbsc_facilities','1');
			$this->load->view('admin/facilities',$data);
		} else {
			redirect('admin/login');
		}
	}
	
	public function facilities_save(){
		if ($this->session->userdata('admin_login') == 1) {
			$inputdata = array(
				'facilities_desc' 	=> $this->input->post('program',true)
			);
			$this->Crud_model->insertData('cbsc_facilities',$inputdata);
			redirect('admin/facilities');
		} else {
			redirect('admin/login');
		}
    }    
}
