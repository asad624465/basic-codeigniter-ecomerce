<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufac_manage extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
         $this->load->model('Manufature_model');
     }

     //Start save_manufature********
	public function save_manufature()
	{
		
		$sdata = array();
		$product_manu = "product_manufactures";
		$data = array(
			'manufacture_name' => $this->input->post('manufacture_name',true),
			'manufacture_description' => $this->input->post('manufacture_description',true),

			'manufacture_status' => $this->input->post('manufacture_status',true)
			);
		$result = $this->Manufature_model->save_manu_info($product_manu,$data);
		if($result)
		{
			$sdata['message'] = "Inset Manufature Successfully.....";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_manufacture','refresh');
		}else
		{
			$sdata['message'] = "Oops!!Manufature insrey Failed...";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_manufacture','refresh');
		}
	}
	 //Start publish_cat********
	public function publish_cat($manufacture_id)
	{
		$sdata = array();
	    $tbl_manu = "product_manufactures";
	    $this->Manufature_model->publish_manu_info($tbl_manu,$manufacture_id); 
	    redirect('Super_admin/manufacture_list'); 
	}
	//Start un_publish_cat********
	public function un_publish_cat($manufacture_id)
	{
		$sdata = array();
	    $tbl_manu = "product_manufactures";
	   $this->Manufature_model->Un_publish_manu_info($tbl_manu,$manufacture_id); 
	   redirect('Super_admin/manufacture_list');  
	}
	//Start edit_manu********
	public function edit_manu($manufacture_id)
	{
		$data = array();
		$data['title']="Edit category";
		  $tbl_manu = "product_manufactures";
		 $data['select_manu_id'] = $this->Manufature_model->select_manu_by_id($tbl_manu,$manufacture_id);
		$data['admin_content']=$this->load->view('admin_file/edit_manuficture',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	public function update_manufature()
	{
		$tbl_manu = "product_manufactures";
		$manufacture_id = $this->input->post('manufacture_id',true);
		$data = array(
			'manufacture_name'=>$this->input->post('manufacture_name',true),
			'manufacture_description'=>$this->input->post('manufacture_description',true),
			'manufacture_status'=>$this->input->post('manufacture_status',true)
			);
		$result = $this->Manufature_model->update_manu_info($tbl_manu,$data,$manufacture_id);
		if($result)
		{
			$sdata['message'] = "Manuficture Updated Successfully.....";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manufacture_list');
		}else
		{
			$sdata['message'] = "Oops!!Manuficture Updated Failed...";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manufacture_list');
		}
	}
	public function delete_manu($manufacture_id)
	{
		$data = array();
		 $tbl_manu = "product_manufactures";
		 $this->Manufature_model->delete_cat_by_id($tbl_manu,$manufacture_id);
		 redirect('Super_admin/manufacture_list'); 
	}
}