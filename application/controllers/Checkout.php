<?php
	 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Checkout extends CI_Controller 
{
	
	public function check_out()
	{
		$data = array();
		$data['title'] = "Customer Checkout";
		$data['home_content'] = 1;
		
		$data['home_content'] = $this->load->view('document/check_out',$data,true);
		$this->load->view('index',$data);
	}
	public function customer_registration()
	{
		$tbl_customer='tbl_customer';
		$sdata=array();
		$data = array(
			'first_name' => $this->input->post('first_name',true).' '.$this->input->post('last_name',true),
			'last_name' => $this->input->post('last_name',true),
			'email_address' => $this->input->post('email_address',true),
			'customer_telephone' => $this->input->post('customer_telephone',true),
			'customer_fax' => $this->input->post('customer_fax',true),
			'customer_company' => $this->input->post('customer_company',true),
			'customer_company_id' => $this->input->post('customer_company_id',true),
			'customer_address_one' => $this->input->post('customer_address_one',true),
			'customer_address_two' => $this->input->post('customer_address_two',true),
			'customer_city' => $this->input->post('customer_city',true),
			'customer_postcode' => $this->input->post('customer_postcode',true),
			'customer_country' => $this->input->post('customer_country',true),
			'customer_region' => $this->input->post('customer_region',true),
			'active_status' =>1
		);

		$customer_id = $this->General_model->save_info($tbl_customer,$data);
		if($customer_id==NULL){
			redirect("Checkout/check_out");
		}
		if ($customer_id) {
			$sdata['customer_id'] = $customer_id;
			$sdata['full_name'] = $data['last_name'];
			$this->session->set_userdata($sdata);
			redirect("Cart_manage/show_cart");
		}else
		{
			$sdata['message'] = "Oops!!Registration insrey Failed...";
			$this->session->set_userdata($sdata);
			redirect("Checkout/check_out");
		}
		
	}
	public function valid_user_name($email_address)
    { 

           $result = $this->General_model->get_user($email_address);
           if ($result === TRUE)
            {
               echo 'Email Already Use';
            }
               else
            {
                echo 'Email available';
            }
    } 
    public function shiping_same_as_biling()
    {
    	$tbl_shiping='tbl_shiping';
    	$customer_id = $this->session->userdata('customer_id');
    	$customer_info = $this->Checkout_model->select_customer_by_id($customer_id);
    	$data = array(
    			'customer_id'=>$customer_id,
    			'full_name'=>$customer_info->first_name.' '.$customer_info->last_name,
    			'email_add'=>$customer_info->email_address,
    			'shiping_mobile'=>$customer_info->customer_telephone,
    			'shiping_city'=>$customer_info->customer_city,
    			'shiping_postcode'=>$customer_info->customer_postcode,
    			'shiping_address'=>$customer_info->customer_address_one.' '.$customer_info->customer_address_two,
    			'shiping_country'=>$customer_info->customer_country,
    			'shiping_state'=>$customer_info->customer_region
    		);
    	$shiping_id = $this->General_model->save_info($tbl_shiping,$data);
		
		if ($shiping_id) {
			$sdata['shiping_id'] = $shiping_id;
			$this->session->set_userdata($sdata);
			redirect("Cart_manage/show_cart");
		}else
		{
			$sdata['message'] = "Oops!!Registration insrey Failed...";
			$this->session->set_userdata($sdata);
			redirect("Checkout/check_out");
		}
    }
     public function save_as_shiping()
    {
    	$tbl_shiping='tbl_shiping';
    	$customer_id = $this->session->userdata('customer_id');

		$data = array(
			'customer_id'=>$customer_id,
			'full_name'=> $this->input->post('full_name',true),
			'email_add'=> $this->input->post('email_add',true),
			'shiping_mobile'=> $this->input->post('shiping_mobile',true),
			'shiping_city'=> $this->input->post('shiping_city',true),
			'shiping_postcode'=> $this->input->post('shiping_postcode',true),
			'shiping_address'=> $this->input->post('shiping_address',true),
			'shiping_country'=> $this->input->post('shiping_country',true),
			'shiping_state'=> $this->input->post('shiping_state',true)
			);
    	$shiping_id = $this->General_model->save_info($tbl_shiping,$data);
		
		if ($shiping_id) {
			$sdata['shiping_id'] = $shiping_id;
			$this->session->set_userdata($sdata);
			redirect("Cart_manage/show_cart");
		}else
		{
			$sdata['message'] = "Oops!!Registration insrey Failed...";
			$this->session->set_userdata($sdata);
			redirect("Checkout/check_out");
		}
    }
    public function confirm_order()
    {
    	$data= array();
    	$sdata= array();
    	$tbl_payment="tbl_payment";
    	$payment_type= $this->input->post('payment_type');
    	if ($payment_type=='Cash On Delivery') {
    		$data['payment_type'] = $payment_type;
    		$data['payment_status'] = 0;
    		$payment_id = $this->General_model->save_info($tbl_payment,$data);
    		$sdata['payment_id'] = $payment_id;
    		$this->session->set_userdata($sdata);
    		$this->Checkout_model->save_order_info();
    		redirect('Welcome/order_success');

    	} else {
    		# code...
    	}
    	
    }
   	public function log_out()
    { 

       $this->session->unset_userdata('full_name');
        $this->session->unset_userdata('customer_id');
        $this->cart->destroy();
        redirect('welcome');
       
   } 
}	