<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
	function __construct() {
        parent::__construct();
	}
	
	function insertData($table = FALSE, $data = FALSE){
        $this->db->insert($table, $data);

        if($this->db->affected_rows() > 0){
          $insertID = $this->db->insert_id();
          return $insertID; 
        }else
            return false;
	}
	
	function updateData($table = FALSE, $data = FALSE,$id = FALSE){
        $this->db->where('id',$id);
        $this->db->update($table,$data);
        
        if($this->db->affected_rows() > 0)
            return $id;
        else
            return false;
    }

    function get_type_name_by_id($type, $type_id = '', $field = 'full_name') {
        return $this->db->get_where($type, array('ID' => $type_id))->row()->$field;
	}
	
	function getAll($table, $array = NULL, $ordercol = NULL) {
		if($ordercol != NULL){
			$this->db->order_by($ordercol, "ASC");
		}
		$query = $this->db->get_where($table, $array);

		return $query->result();
	}
	
	function getAll_limit($table, $limit) {
		$this->db->order_by("id","DESC");
		$this->db->limit($limit);
		$query = $this->db->get_where($table);
		return $query->result();
	}

	public function check_admin_info($email,$password)
	{
		$this->db->select('*');
		$this->db->from('cbsc_users');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

}
