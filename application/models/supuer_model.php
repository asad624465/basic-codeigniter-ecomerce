<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supuer_model extends CI_Model 
{
	/*
		
	public function index()
	{
	 $this->load->view('admin_file/login');
	}

	public function login_auth()
	{
		$tbl_admin="tbl_admin_login";
		$data = array(
			'admin_email'=>$this->input_>post('admin_password',true),
			'admin_password'=> $this->input_>post('admin_password',true),
		);
		$result = $this->Admin_model->select_admin_info($tbl_admin,$data);
		echo "<pre>";
		print_r($result);
		exit();
	}
	*/
	public function select_order_info($per_page,$offset)
	{	
		if ($offset==NULL) {
			$offset==0;
		}
		
		/*$query ="SELECT tbl_order.order_id,tbl_order.invoice_no, tbl_order.order_total, tbl_order.order_status,tbl_customer.first_name FROM tbl_order INNER JOIN tbl_customer ON tbl_order.customer_id=tbl_customer.customer_id AND order_id='$search_text' LIMIT $offset,
			$per_page";	*/

	$query ="SELECT o.order_id, o.invoice_no, o.order_total, o.order_status,c.first_name FROM tbl_order as o, tbl_customer as c WHERE o.customer_id=c.customer_id LIMIT $offset,$per_page";
		$result=$this->db->query($query);
		$result=$result->result();
		return $result;
	}
	public function search_order_info($per_page,$offset,$search_text)
	{	
	if ($offset==NULL) {
			$offset==0;
		}	
	$query ="SELECT tbl_order.order_id,tbl_order.invoice_no, tbl_order.order_total, tbl_order.order_status,tbl_customer.first_name FROM tbl_order INNER JOIN tbl_customer ON tbl_order.customer_id=tbl_customer.customer_id AND (order_id ='$search_text' OR invoice_no LIKE '%$search_text%' OR first_name LIKE '%$search_text%' OR order_total LIKE '%$search_text%')LIMIT $offset,$per_page";
		$result=$this->db->query($query);
		$result=$result->result();
		return $result;

		
	}
	public function select_order_info_by_id($tbl_order,$order_id)
	{
		$query ="SELECT * FROM $tbl_order WHERE order_id=$order_id";
		$result=$this->db->query($query);
		$result=$result->row();
		return $result;
	}
	public function select_customer_info_by_id($tbl_customer,$customer_id)
	{
		$query ="SELECT * FROM $tbl_customer WHERE customer_id=$customer_id";
		$result=$this->db->query($query);
		$result=$result->row();
		return $result;
	}
	public function select_shiping_info_by_id($tbl_shiping,$shiping_id)
	{
		$query ="SELECT * FROM $tbl_shiping WHERE shiping_id=$shiping_id";
		$result=$this->db->query($query);
		$result=$result->row();
		return $result;
	}
	public function select_order_details($order_details,$order_id)
	{
		$query ="SELECT * FROM $order_details WHERE order_id=$order_id";
		$result=$this->db->query($query);
		$result=$result->result();
		
		return $result;
	}
}