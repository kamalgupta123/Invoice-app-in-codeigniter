<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/Admin_model');
    }
	
	public function index()
	{
		$this->load->view('admin/includes/header.php');
		$this->load->view('admin/index1.php');
		$this->load->view('admin/includes/footer.php');
	}

	public function users(){
		$this->data['users'] = $this->Admin_model->get_users();
		$this->load->view('admin/includes/header.php');
		$this->load->view('admin/users.php', $this->data);
		$this->load->view('admin/includes/footer.php');
	}

	public function activate_user(){
		$this->Admin_model->activateUser();
	}

	public function deactivate_user(){
		$this->Admin_model->deactivateUser();
	}
}
