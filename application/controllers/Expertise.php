
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expertise extends CI_Controller {

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
		$data['title'] = "Expertise";
		$data['program'] = $this->Crud_model->getAll_limit('cbsc_expertise','1');
		$this->db->select('image');
		$this->db->from('cbsc_inner_img');
		$this->db->where('page_name','expertise');
		$reault_array = $this->db->get()->result_array();
		$data['img'] = $reault_array[0]['image'];
		$this->load->view('expertise',$data);
	}
}
