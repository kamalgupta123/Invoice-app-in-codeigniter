<?php
class Invi_model extends CI_Model 
{
	function insert($data)
	{
          $this->db->insert('otp',$data);
          return $this->db->insert_id();
	}
	
	function get_last_row(){
		$row = $this->db->select("*")->limit(1)->order_by('id',"DESC")->get("otp")->row();
		return $row->otp;
	}

	function insert_gst($data)
	{
          $this->db->insert('gst',$data);
          return $this->db->insert_id();
	}

	function insert_register_info($data){
		$this->db->insert('register',$data);
	}

	function getUserDetails($phone_number){
		$this->db->select('phone_number,password,status');
		$this->db->where('phone_number',$phone_number);
		$this->db->from('register');
		return $this->db->get()->result();
	}

	function get_template_preview(){
		$this->db->select('*');
		$this->db->from('template_preview');
		return $this->db->get()->result();
	}

	function getTemplatePathById(){
		$this->db->select('template_path');
		$this->db->where('id',$this->input->post('selectedTemplateId'));
		$this->db->from('template_preview');
		return $this->db->get()->result();
	}

	function insertSelectedTemplate($path){
		$this->db->select('*');
		$this->db->where('selected_template_preview_id',$this->input->post('selectedTemplateId'));
		$this->db->from('template_selected');
		$selected_template = $this->db->get();
		if($selected_template->num_rows()>0){
			$data = array(
				'selected_template_preview_id'=>$this->input->post('selectedTemplateId'),
				'template_path'=>$path
			);
			$this->db->where("selected_template_preview_id",$this->input->post('selectedTemplateId'));
			$this->db->update("template_selected",$data);
		}
		else{
			$data = array(
				'selected_template_preview_id'=>$this->input->post('selectedTemplateId'),
				'template_path'=>$path
			);
			$this->db->insert('template_selected',$data);
		}
		
	}

	function registerSubUser($mobile_number,$password){
		$data = array(
			'phone_number'=>$mobile_number,
			'password'=>$password
		);
		$this->db->insert('register',$data);
	}

	function gst_exists($gst)
	{
		$this->db->where('gst',$gst);
		$query = $this->db->get('gst');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function phone_exists($phone)
	{
		$this->db->where('phone_number',$phone);
		$query = $this->db->get('register');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function email_exists($email)
	{
		$this->db->where('email_address',$email);
		$query = $this->db->get('register');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
}