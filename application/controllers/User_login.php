<?php
	 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_login extends CI_Controller 
{
	
	public function login()
	{
		$data = array();
		$data['title'] = "User login";
		$data['home_content'] = 1;
		$data['home_content'] = $this->load->view('document/register',$data,true);
		$this->load->view('index',$data);
	}
	public function user_registration()
	{
		$tbl_userdata='tbl_userdata';
		$sdata=array();
		$data = array(
			'username' => $this->input->post('username',true),
			'password' => md5($this->input->post('password',true)),
			'email' => $this->input->post('email',true)
		);
		$username_id = $this->General_model->save_info($tbl_userdata,$data);
		
		if ($customer_id) {
			$sdata['message'] = "Oops!!Registration insrey Failed...";
			$this->session->set_userdata($sdata);
			redirect("User_login/login");
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
    public function user_sign_in()
    {
    	$tbl_userdata='tbl_userdata';
    	$username = $this->input->post('username',true);
    	$password =md5($this->input->post('password',true));

    	$result = $this->General_model->select_info($tbl_userdata,$username,$password);
		
		if ($result) {
			$sdata['result'] =$result;
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