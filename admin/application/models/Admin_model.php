<?php
class Admin_model extends CI_Model 
{	
	function get_users(){
		$query = $this->db->get("register");
		return $query->result_array();
	}

	function activateUser(){
		$data = [
			'status' => 1,
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('register', $data); 
	}

	function deactivateUser(){
		$data = [
			'status' => 0,
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('register', $data); 
	}
}