<?php 
	/**
	* 
	*/
	class Welcome_model extends CI_Model
	{
		public function all_publish_product($per_page,$offset)
		{
			if ($offset==NULL) {
				$offset==0;
			}
			$result_query = $this->db->select('tbl_product.*',FALSE)
			->select('tbl_spcial_price.product_spcial_price', FALSE)
			->select('tbl_spcial_price.start_date',FALSE)
			->select('tbl_spcial_price.end_date',FALSE)
			->select('tbl_product_img.product_image',FALSE)
			->from('tbl_product')
			->join('tbl_spcial_price','tbl_product.product_id = tbl_spcial_price.product_id','left')
			->join('tbl_product_img','tbl_product.product_id=tbl_product_img.product_id','left')
			->where('publication_status',1)
			->limit($per_page,$offset)
			->get();
			$result = $result_query->result();
			return $result;
			
		}
		public function all_woman_product()
		{

		$result_query = $this->db->select('tbl_product.*',FALSE)
		->select('tbl_spcial_price.product_spcial_price', FALSE)
		->select('tbl_spcial_price.start_date',FALSE)
		->select('tbl_spcial_price.end_date',FALSE)
		->select('tbl_product_img.product_image',FALSE)
		->from('tbl_product')
		->join('tbl_spcial_price','tbl_product.product_id = tbl_spcial_price.product_id','left')
		->join('tbl_product_img','tbl_product.product_id=tbl_product_img.product_id','left')
		->where('publication_status',1)
		->where('cat_id',2)
		->get();
		$result = $result_query->result();
		
		return $result;
		}
		public function all_man_product()
		{

		$result_query = $this->db->select('tbl_product.*',FALSE)
		->select('tbl_spcial_price.product_spcial_price', FALSE)
		->select('tbl_spcial_price.start_date',FALSE)
		->select('tbl_spcial_price.end_date',FALSE)
		->select('tbl_product_img.product_image',FALSE)
		->from('tbl_product')
		->join('tbl_spcial_price','tbl_product.product_id = tbl_spcial_price.product_id','left')
		->join('tbl_product_img','tbl_product.product_id=tbl_product_img.product_id','left')
		->where('publication_status',1)
		->where('cat_id',1)
		->get();
		$result = $result_query->result();
		return $result;
		}
		public function all_Sport_product()
		{
		$result_query = $this->db->select('tbl_product.*',FALSE)
		->select('tbl_spcial_price.product_spcial_price', FALSE)
		->select('tbl_spcial_price.start_date',FALSE)
		->select('tbl_spcial_price.end_date',FALSE)
		->select('tbl_product_img.product_image',FALSE)
		->from('tbl_product')
		->join('tbl_spcial_price','tbl_product.product_id = tbl_spcial_price.product_id','left')
		->join('tbl_product_img','tbl_product.product_id=tbl_product_img.product_id','left')
		->where('publication_status',1)
		->where('cat_id',3)
		->get();
		$result = $result_query->result();
		return $result;
		}
		public function all_hangbag_product()
		{

		$result_query = $this->db->select('tbl_product.*',FALSE)
		->select('tbl_spcial_price.product_spcial_price', FALSE)
		->select('tbl_spcial_price.start_date',FALSE)
		->select('tbl_spcial_price.end_date',FALSE)
		->select('tbl_product_img.product_image',FALSE)
		->from('tbl_product')
		->join('tbl_spcial_price','tbl_product.product_id = tbl_spcial_price.product_id','left')
		->join('tbl_product_img','tbl_product.product_id=tbl_product_img.product_id','left')
		->where('publication_status',1)
		->where('cat_id',4)
		->get();
		$result = $result_query->result();
		return $result;
		}
		public function product_detail_by_id($product_id)
		{
			$result_query=$this->db->select('tbl_product.*,tbl_product_img.product_image,tbl_spcial_price.product_spcial_price,tbl_spcial_price.start_date,tbl_spcial_price.end_date,product_manufactures.manufacture_name',FALSE)
			->from('tbl_product')
			->join('tbl_spcial_price','tbl_product.product_id=tbl_spcial_price.product_id','left')
			->join('tbl_product_img','tbl_product.product_id=tbl_product_img.product_id','left')
			->join('product_manufactures','tbl_product.manufacture_id=product_manufactures.manufacture_id','left')
			->where('tbl_product.product_id',$product_id)
			->get();
			$result = $result_query->row();
			return $result;	
		}
		public function releated_product($model,$name)
		{
			
			$result_query = $this->db->select('tbl_product.*',FALSE)
			->select('tbl_spcial_price.product_spcial_price', FALSE)
			->select('tbl_spcial_price.start_date',FALSE)
			->select('tbl_spcial_price.end_date',FALSE)
			->select('tbl_product_img.product_image',FALSE)
			->from('tbl_product')
			->join('tbl_spcial_price','tbl_product.product_id = tbl_spcial_price.product_id','left')
			->join('tbl_product_img','tbl_product.product_id=tbl_product_img.product_id','left')
			->where('product_name',$name)
			->get();
			$result = $result_query->result();
			return $result;
			
		}
		public function best_seller()
		{
			/*$sql="SELECT tbl_product.*,tbl_spcial_price.product_spcial_price,tbl_spcial_price.start_date,tbl_spcial_price.end_date,tbl_product_img.product_image,tbl_order_details.product_sels_quantity,tbl_order_details.product_name FROM tbl_product LEFT JOIN tbl_spcial_price ON tbl_product.product_id = tbl_spcial_price.product_id LEFT JOIN tbl_product_img ON tbl_product.product_id=tbl_product_img.product_id LEFT JOIN tbl_order_details ON tbl_product.product_id=tbl_order_details.product_id ORDER BY tbl_order_details.product_sels_quantity DESC LIMIT 9";*/
			$sql="SELECT tbl_order_details.product_sels_quantity,tbl_order_details.product_name,tbl_spcial_price.product_spcial_price,tbl_spcial_price.start_date,tbl_spcial_price.end_date,tbl_product_img.product_image,tbl_product.* FROM tbl_order_details RIGHT JOIN tbl_spcial_price ON tbl_order_details.product_id = tbl_spcial_price.product_id RIGHT JOIN tbl_product_img ON tbl_order_details.product_id=tbl_product_img.product_id RIGHT JOIN tbl_product ON tbl_order_details.product_id=tbl_product.product_id ORDER BY tbl_order_details.product_sels_quantity DESC LIMIT 9";
			$result_query=$this->db->query($sql);

			$result = $result_query->result();
			return $result;
			
		}
		public function top_seller()
		{
			$sql="SELECT tbl_order_details.product_sels_quantity,tbl_order_details.product_name,tbl_spcial_price.product_spcial_price,tbl_spcial_price.start_date,tbl_spcial_price.end_date,tbl_product_img.product_image,tbl_product.* FROM tbl_order_details RIGHT JOIN tbl_spcial_price ON tbl_order_details.product_id = tbl_spcial_price.product_id RIGHT JOIN tbl_product_img ON tbl_order_details.product_id=tbl_product_img.product_id RIGHT JOIN tbl_product ON tbl_order_details.product_id=tbl_product.product_id ORDER BY tbl_order_details.product_sels_quantity DESC LIMIT 1";
			$result_query=$this->db->query($sql);

			$result = $result_query->result();
			return $result;
			
		}
		public function product_image_by_id($product_id)
		{
			
			$result_query=$this->db->select('*')->from('tbl_product_img')->where('product_id',$product_id)->get();
			$result = $result_query->result();
			return $result;
		}
	}
?>