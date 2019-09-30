<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_manage extends CI_Controller 
{
	public function construct()
	{	
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('directory');
		//$this->load->library('upload');
	}
     //Start save_manufature********
	public function save_product()
	{
		
		$error=array();
		
		$data =array();
		$sdata = array();
		$tbl_product = "tbl_product";

		$data['product_name'] = $this->input->post('product_name',true);
		$data['cat_id']= $this->input->post('cat_id',true);
		$data['product_price'] =$this->input->post('product_price',true);
		$data['manufacture_id'] = $this->input->post('manufacture_id',true);

		$data['product_code'] = $this->input->post('product_code',true);
		$data['product_quantity'] = $this->input->post('product_quantity',true);
		$data['product_reorder'] = $this->input->post('product_reorder',true);
		$data['product_short_desc'] = $this->input->post('product_short_desc',true);
		$data['product_long_desc'] = $this->input->post('product_long_desc',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		//Start image Upload here
        $config['upload_path'] = 'product/woman/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('product_img',true))
		{
			$error = $this->upload->display_errors();
			echo $error;
			exit();
		}
		else
		{
			$fdata = $this->upload->data();
			$data['product_img'] = $config['upload_path'].$fdata['file_name'];

		}
		$result = $this->Product_model->save_product_info($tbl_product,$data);
		//Start image Upload here
		if($this->input->post('product_spcial_price',true))
		{
		$pdata = array();
			$pdata['product_spcial_price'] = $this->input->post('product_spcial_price',true);
			$pdata['start_date']=$this->input->post('start_date',true);
			$pdata['end_date']  = $this->input->post('end_date',true);
			$pdata['product_id'] = $result['product_id'];
		$this->Product_model->save_sp_product_info($pdata);
		}

		//Start Multple Image Upload
        $config['upload_path'] = 'product/woman/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2035';
		$config['max_width']  = '250';
		$config['max_height']  = '300';
		$error  = '';

		$fdata =array();
		$this->load->library('upload', $config);

		if (!$this->upload->do_multi_upload('product_image'))
		{
			$error = $this->upload->display_errors();
			echo $error;
			exit();
		}
		else
		{	$return = $this->upload->get_multi_upload_data();
			echo "<pre>";
			print_r($return);
			exit();
			foreach ($return as $value) {
			$data['product_img'] = $config['upload_path'].$value['file_name'];
			$data['product_id']  = $result['product_id'];
			$this->Product_model->save_product_image_info($data);
			}
			
		}
		if($result)
		{
			$sdata['message'] = "Product Category Successfully.....";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_post','refresh');
		}else
		{
			$sdata['message'] = "Oops!!Product inserteded Failed...";
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_post','refresh');
		}
	}

	 //Start publish_cat******
	public function publish_cat($proauct_id)
	{
		$sdata = array();
	    $tbl_pro = "tbl_product";
	    $this->Product_model->publish_proauct_info($tbl_pro,$proauct_id); 
	    redirect('Super_admin/product_list'); 
	}
	//Start un_publish_cat********
	public function un_publish_cat($product_id)
	{
		$sdata = array();
	    $tbl_pro = "tbl_product";
	   $this->Product_model->Un_publish_proauct_info($tbl_pro,$product_id); 
	   redirect('Super_admin/product_list');  
	}
	//Start edit_manu********
	/*public function edit_manu($manufacture_id)
	{
		$data = array();
		$data['title']="Edit category";
		  $tbl_manu = "product_manufactures";
		 $data['select_manu_id'] = $this->Manufature_model->select_manu_by_id($tbl_manu,$manufacture_id);
		$data['admin_content']=$this->load->view('admin_file/edit_manu',$data,true);
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
	}*/
}