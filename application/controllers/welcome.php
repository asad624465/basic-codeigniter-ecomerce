<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data = array();
		$data['title'] = "Home Page";
		$data['home_content'] = 1;
		$config['base_url'] = base_url().'Welcome/index/';
		$config['total_rows'] = $this->db->count_all('tbl_product');
		$config['per_page'] ='4';
		$config['next_tag_open'] = '<div>';
		$config['next_tag_close'] = '</div>'; 
		$this->pagination->initialize($config);
		if($this->uri->segment(3))
		{
			$page =($this->uri->segment(3)); 
		}else{
			$page=1;
		} 
		$data['publish_product'] = $this->Welcome_model->all_publish_product($config['per_page'],$page);
		$data['home_content'] = $this->load->view('document/home_content',$data,true);
		$this->load->view('index',$data);
	}
	public function order_success()
	{
		$data = array();
		$data['title'] = "Home Page";
		$data['home_content'] = 1;	
		$data['home_content'] = $this->load->view('document/order_success',$data,true);
		$this->load->view('index',$data);
	}
	public function product_details($product_id)
	{
		
		$data = array();
		$data['title'] = "product detail";
		$data['home_content'] = 1;

		$data['product_detail'] = $this->Welcome_model->product_detail_by_id($product_id);
			 $model = $data['product_detail']->product_code;
			 $name = $data['product_detail']->product_name;
			 if ( $model or $name) {
			 	$data['releated_product'] = $this->Welcome_model->releated_product($model,$name);
			 }
		$data['product_imag'] = $this->Welcome_model->product_image_by_id($product_id);
		$data['other_shop'] = $this->load->view('document/document_file/product_detail',$data,true);
		$data['home_content'] = $this->load->view('document/home_woman',$data,true);
		$this->load->view('index',$data);
	}
	public function Woman()
	{
		$data = array();
		$data['title'] = "Woman House";
		$data['home_content'] = 1;
		//$cat_info = $this->Welcome_model->all_publish_product();
		//start pagination
		//$config['base_url'] = echo base_url().'Welcome/Woman/';
		$config['total_rows'] = 200;
		$config['per_page'] = 20;
		$this->pagination->initialize($config); 
		//echo $this->pagination->create_links();

		$data['woman_product'] = $this->Welcome_model->all_woman_product();
		$data['other_shop'] = $this->load->view('document/document_file/woman_shop',$data,true);
		$data['home_content'] = $this->load->view('document/home_woman',$data,true);
		$this->load->view('index',$data);
	}
	public function Man()
	{
		$data = array();
		$data['title'] = "Man House";
		$data['home_content'] = 1;
		$id="1";
		//Start Pagination here
		
		$data['woman_product'] = $this->Welcome_model->all_man_product();
		$data['other_shop'] = $this->load->view('document/document_file/man_shop',$data,true);
		$data['home_content'] = $this->load->view('document/home_woman',$data,true);
		$this->load->view('index',$data);
	}
	public function Sport()
	{
		$data = array();
		$data['title'] = "Sport House";
		$data['home_content'] = 1;
		$data['spot_product'] = $this->Welcome_model->all_Sport_product();
		$data['other_shop'] = $this->load->view('document/document_file/spot_shop',$data,true);
		$data['home_content'] = $this->load->view('document/home_woman',$data,true);
		$this->load->view('index',$data);
	}
	public function Hangbag()
	{
		$data = array();
		$data['title'] = "Hangbag House";
		$data['home_content'] = 1;
		$data['hangbag_product'] = $this->Welcome_model->all_hangbag_product();
		$data['other_shop'] = $this->load->view('document/document_file/hangbag_shop',$data,true);
		$data['home_content'] = $this->load->view('document/home_woman',$data,true);
		$this->load->view('index',$data);
	}
	public function best_seller()
	{
		$data = array();
		$data['title'] = "Hangbag House";
		$data['home_content'] = 1;
		$data['best_seller'] = $this->Welcome_model->best_seller();
		$data['other_shop'] = $this->load->view('document/document_file/best_seller',$data,true);
		$data['home_content'] = $this->load->view('document/home_woman',$data,true);
		$this->load->view('index',$data);
	}
	public function top_seller()
	{
		$data = array();
		$data['title'] = "Hangbag House";
		$data['home_content'] = 1;
		$data['top_seller'] = $this->Welcome_model->top_seller();
		$data['other_shop'] = $this->load->view('document/document_file/top_seller',$data,true);
		$data['home_content'] = $this->load->view('document/home_woman',$data,true);
		$this->load->view('index',$data);
	}
	public function add_contact()
	{
		$data = array();
		$data['title'] = "Contact us";
		$data['home_content'] = 1;
		$data['home_content'] = $this->load->view('document/contact',$data,true);
		$this->load->view('index',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */