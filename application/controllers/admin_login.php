<?php 
session_start();
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id!=NULL){
			redirect('Super_admin','refresh');
		}
	}

	public function index()
	{
	 $this->load->view('admin_file/login');
	}

	public function login_auth()
	{
		$tbl_admin="tbl_admin_login";

		$admin_email = $this->input->post('admin_email',true);
		$admin_password = md5($this->input->post('admin_password',true));
			

		$result = $this->admin_model->select_admin_info($tbl_admin,$admin_email,$admin_password);
		if($result)
		{
			$sdata['admin_name'] = $result->admin_name;
			$sdata['admin_image'] = $result->admin_image;
			$sdata['admin_id'] = $result->admin_id;
			$this->session->set_userdata($sdata);
			redirect('Super_admin','refresh');
		}else{
			$sdata['message']="Oops!!Your Email or Password are Not Match";
			$this->session->set_userdata($sdata);
			redirect('Admin_login','refresh');
		}
		
	}
}