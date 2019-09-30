<?php
	session_start();
	 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Manufature_model');
		$this->load->library('pagination');
		$admin = $this->session->userdata('admin_id');
		if($admin==NULL)
		{
			redirect('Admin_login','refresh');
		}
	}
	public function index()
	{
		$data = array();
		$data['title']="Dashbord";
		$data['admin_content']=$this->load->view('admin_file/dash_bord','',true);
		$this->load->view('admin_file/index',$data);
	}
	public function Slowgan()
	{
		$data = array();
		$data['title']="Slowgan";
		$data['admin_content']=$this->load->view('admin_file/titleslogan','',true);
		$this->load->view('admin_file/index',$data);
	}
	public function Social()
	{
		$data = array();
		$data['title']="Social Media";
		$data['admin_content']=$this->load->view('admin_file/social','',true);
		$this->load->view('admin_file/index',$data);
	}
	public function copy_wright()
	{
		$data = array();
		$data['title']="Social Media";
		$data['admin_content']=$this->load->view('admin_file/copyright','',true);
		$this->load->view('admin_file/index',$data);
	}
	public function add_category()
	{
		$data = array();
		$data['title']="Add category";
		$data['admin_content']=$this->load->view('admin_file/addcat','',true);
		$this->load->view('admin_file/index',$data);
	}
	// Start cat_list***********
	public function cat_list()
	{
		$data = array();
		$tbl_cat = "tbl_category";
		$data['title']="category list";
		$data['cat_info']=$this->Category_model->select_cat_info($tbl_cat);
		$data['admin_content']=$this->load->view('admin_file/cat_list',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	// Start add_manufacture***********
	public function add_manufacture()
	{
	
		$data = array();
		$data['title']="Add post";
		$data['admin_content']=$this->load->view('admin_file/add_manuficture','',true);
		$this->load->view('admin_file/index',$data);
	}
	// Start cat_list***********
	public function manufacture_list()
	{
		$data = array();
		$product_manu = "product_manufactures";
		$data['title']="category list";
		$tbl_cat = "tbl_category";
		$data['manu_info']=$this->Manufature_model->select_manu_info($product_manu);
		$data['admin_content']=$this->load->view('admin_file/manuficture_list',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	// Start cat_list***********
	public function add_post()
	{
		$data = array();
		$data['title']="Add Product";
		$product_manu = "product_manufactures";
		$tbl_cat = "tbl_category";
		$data['all_manu_info'] = $this->Manufature_model->select_all_manu_info($product_manu);
		$data['all_cat_info']=$this->Category_model->select_all_cat_info($tbl_cat);
		$data['admin_content']=$this->load->view('admin_file/add_product',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	// Start cat_list***********
	public function product_list()
	{
		$data = array();
		$data['title']="category list";
		$config['base_url'] = base_url().'Super_admin/product_list/';
		$config['total_rows'] = $this->db->count_all('tbl_product');
		$config['per_page'] ='5';
		$config['next_tag_open'] = '<div>';
		$config['next_tag_close'] = '</div>'; 
		$this->pagination->initialize($config);
		if($this->uri->segment(3))
		{
			$page =($this->uri->segment(3)); 
		}else{
			$page=1;
		} 
		$data['product_info']=$this->Product_model->select_all_product_info($config['per_page'],$page);
		
		$data['admin_content']=$this->load->view('admin_file/product_list',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	// Start post_list***********
	public function post_list()
	{
		$data = array();
		$data['title']="Product List";
		$tbl_product = "tbl_product";
		$data['product_info']= $this->Product_model->select_product_info($tbl_product);
		$data['admin_content']=$this->load->view('admin_file/postlist',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	// Start cat_list***********
	public function order_management()
	{
		$data = array();
		$data['title']="order list";
		$tbl_order = "tbl_order";

		$config['base_url'] = base_url ().'Super_admin/order_management/';
		$config['total_rows'] = $this->db->count_all($tbl_order);
		$config['per_page'] = '3';
		//$config['full_tag_open'] = '<div>';
		//$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config); 
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			}
			else{
			$page = 1;
			}
		$data['order_info']=$this->Supuer_model->select_order_info($config['per_page'], $page);

		//$data['order_info']=$this->Supuer_model->select_order_info($tbl_customer,$tbl_order);
		$data['admin_content']=$this->load->view('admin_file/order_list',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	public function order_search()
	{
		$data = array();
		$data['title']="order list";
		$tbl_order = "tbl_order";

		$search_text = $this->input->post('search_text',true);
		$config['base_url'] = base_url ().'Super_admin/order_management/';
		$config['total_rows'] = $this->db->count_all($tbl_order);
		$config['per_page'] = '5';
		//$config['full_tag_open'] = '<div>';
		//$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config); 
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			}
			else{
			$page = 1;
			}
		$data['order_info']=$this->Supuer_model->search_order_info($config['per_page'], $page,$search_text);
		$data['admin_content']=$this->load->view('admin_file/order_list',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	// Start cat_list***********
	public function product_detials($order_id)
	{
		$data = array();
		$data['title']="Order Detials";
		$tbl_order = "tbl_order";
		$tbl_customer = "tbl_customer";
		$tbl_shiping = "tbl_shiping";
		$order_details = "tbl_order_details";

		$data['order_info_id']=$this->Supuer_model->select_order_info_by_id($tbl_order,$order_id);

		$customer_id = $data['order_info_id']->customer_id;
		$shiping_id = $data['order_info_id']->shiping_id;

		$data['billing_info']=$this->Supuer_model->select_customer_info_by_id($tbl_customer,$customer_id);
		$data['shiping_info']=$this->Supuer_model->select_shiping_info_by_id($tbl_shiping,$shiping_id);
		$data['order_details']=$this->Supuer_model->select_order_details($order_details,$order_id);
		$data['admin_content']=$this->load->view('admin_file/order_invoice',$data,true);
		$this->load->view('admin_file/index',$data);
	}
	// Start add_image***********
	public function add_image()
	{
		$data = array();
		$data['title']="Add post";
		$data['admin_content']=$this->load->view('admin_file/add_image','',true);
		$this->load->view('admin_file/index',$data);
	}
	// Start add_image***********
	public function spcial_price()
	{
		$data = array();
		$data['title']="Add post";
		$data['admin_content']=$this->load->view('admin_file/add_sp_price','',true);
		$this->load->view('admin_file/index',$data);
	}
	
	public function change_password()
	{
		$data = array();
		$data['title']="Add post";
		$data['admin_content']=$this->load->view('admin_file/changepassword','',true);
		$this->load->view('admin_file/index',$data);
	}

	public function log_out()
	{
		$sdata = array();
		$this->session->unset_userdata('admin_image');
		$this->session->unset_userdata('admin_name');
		$this->session->unset_userdata('admin_id');

		$sdata['message'] = "Logout successfully";
		$this->session->set_userdata($sdata);
		redirect('Admin_login','refresh');
	}
}
	