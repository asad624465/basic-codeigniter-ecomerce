<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_manage extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
         $this->load->model('Category_model');
     }


	public function save_category()
	{
		
		$sdata = array();
		$tbl_cat = "tbl_category";
		$data = array(
			'category_name' => $this->input->post('category_name',true),
			'publication_status' => $this->input->post('publication_status',true)
			);
		$result = $this->Category_model->save_cat_info($tbl_cat,$data);
		if($result)
		{
			$sdata['message'] = "Inset Category Successfully.....";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_category','refresh');
		}else
		{
			$sdata['message'] = "Oops!!Category insrey Failed...";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_category','refresh');
		}
	}
	public function publish_cat($cat_id)
	{
		$sdata = array();
	    $tbl_cat = "tbl_category";
	    $this->Category_model->publish_cat_info($tbl_cat,$cat_id); 
	    redirect('Super_admin/cat_list'); 
	}
	public function un_publish_cat($cat_id)
	{
		$sdata = array();
	    $tbl_cat = "tbl_category";
	   $this->Category_model->Un_publish_cat_info($tbl_cat,$cat_id); 
	   redirect('Super_admin/cat_list');  
	}
	public function edit_cat($cat_id)
	{
		$data = array();
		$data['title']="Edit category";
		 $tbl_cat = "tbl_category";
		 $data['select_cat_id'] = $this->Category_model->select_cat_by_id($tbl_cat,$cat_id);
		$data['admin_content']=$this->load->view('admin_file/edit_cate',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	public function update_category()
	{
		$tbl_cat = "tbl_category";
		$cat_id = $this->input->post('cat_id',true);
		$data = array(
			'category_name'=>$this->input->post('category_name',true),
			'publication_status'=>$this->input->post('publication_status',true)
			);
		$result = $this->Category_model->update_cate_info($tbl_cat,$data,$cat_id);
		if($result)
		{
			$sdata['message'] = "Category Updated Successfully.....";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/cat_list');
		}else
		{
			$sdata['message'] = "Oops!!Category Updated Failed...";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/cat_list');
		}
	}
	public function delete_cat($cat_id)
	{
		$data = array();
		 $tbl_cat = "tbl_category";
		 $this->Category_model->dedlete_cat_by_id($tbl_cat,$cat_id);
		 redirect('Super_admin/cat_list'); 
	}
}