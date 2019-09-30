<?php
	 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_manage extends CI_Controller 
{

	public function add_to_cart($product_id)
	{
		
		$product_detail = $this->Welcome_model->product_detail_by_id($product_id);
		$qty = $this->input->post('qty',true);
		if($product_detail->product_spcial_price)
		{
			$price = $product_detail->product_spcial_price;
		}else
		{
			$price = $product_detail->product_price;
		}
		
			$data = array(
	               'id'      => $product_detail->product_id,
	               'qty'     =>$qty,
	               'price'   =>$price,
	               'name'    => $product_detail->product_name,
	               'image'  =>  $product_detail->product_img
	            );
			$this->cart->insert($data);
			redirect("Cart_manage/show_cart");
		
	}
	public function update_cart($drowid=NULL)
	{	
		//$product_id = $this->input->post('id',true);
		$product_detail = $this->Welcome_model->product_detail_by_id($product_id);

		$qty = $this->input->post('qty',true);
		$rowid = $this->input->post('rowid',true);
		//$product=$product_detail->product_quantity;
		
		if(isset($drowid)){
			$data = array(
               'rowid' =>$drowid,
               'qty'   =>0
            );

		$this->cart->update($data);
		}else{
		$data = array(
               'rowid' =>$rowid,
               'qty'   =>$qty
            );

		$this->cart->update($data);
		} 
		redirect("Cart_manage/show_cart");
	}
	public function show_cart()
	{
		$data = array();
		$data['title'] = "product Cart";
		$data['home_content'] = 1;
		
		//$data['product_imag'] = $this->Welcome_model->product_image_by_id($product_id);
		$data['other_shop'] = $this->load->view('document/document_file/cart_view',$data,true);
		$data['home_content'] = $this->load->view('document/home_woman',$data,true);
		$this->load->view('index',$data);
	}
	
}	