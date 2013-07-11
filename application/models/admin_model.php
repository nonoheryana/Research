<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {
	public function index(){
 	
 }	public function get_sections(){				$result = $this->db->get("sections");		return $result->result_array();	}	public function get_categories(){				$result = $this->db->get("categories");		return $result->result_array();	}
 
}