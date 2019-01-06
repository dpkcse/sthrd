<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Who extends CI_Controller {

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
	
	public function index()
	{
		$data = array();
		$data['title'] = "WHO WE ARE";
		$data['program'] = $this->Crud_model->getAll_limit('cbsc_wwa','1');
		$this->load->view('who',$data);
	}
}
