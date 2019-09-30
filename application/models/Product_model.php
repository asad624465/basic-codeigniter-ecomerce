<?php

class Product_model extends CI_Model
{

	public function save_product_info($tbl_product,$data)
	{
		

		$this->db->insert($tbl_product,$data);
		$sql=$this->db->query("SELECT MAX(product_id) as product_id FROM $tbl_product");
		return $id = $sql->row_array();
		
	}
	
	//Start select_manu_info********
	public function get_lates_id($tbl_product)
	{
		
	}
	//Start select_manu_info********
	public function save_product_image_info($data)
	{
		return $this->db->insert('tbl_product_img',$data);
	}
	//Start select_manu_info********
	public function save_sp_product_info($pdata)
	{
		return $this->db->insert('tbl_spcial_price',$pdata);
	}
	//Start select_manu_info********
	public function select_product_info($tbl_product)
	{
		$result_query = $this->db->select('*')
		->from($tbl_product)
		->get();
		return $result_query->result();
	}
	public function select_all_product_info($per_page,$offset)
	{
		if($offset==NULL)
		{
			$offset==0;
		}
		$sql ="SELECT tbl_product.*,tbl_product_img.product_image,tbl_spcial_price.product_spcial_price,tbl_spcial_price.start_date,tbl_spcial_price.end_date FROM tbl_product LEFT JOIN tbl_product_img ON tbl_product.product_id=tbl_product_img.product_id LEFT JOIN tbl_spcial_price ON tbl_product.product_id=tbl_spcial_price.product_id LIMIT $offset,$per_page";
		$stmt = $this->db->query($sql);
		$result = $stmt->result();
		return $result;
	}
	//Start publish_manu_info********
	public function publish_proauct_info($tbl_pro,$product_id)
	{
		$this->db->set('publication_status',0)->where('product_id',$product_id)->update($tbl_pro);
	}
	//Start Un_publish_manu_info********
	public function Un_publish_proauct_info($tbl_pro,$product_id)
	{
		return $this->db->set('publication_status',1)->where('product_id',$product_id)->update($tbl_pro);
	}
	/*//Start select_manu_by_id********
	public function select_manu_by_id($tbl_manu,$manufacture_id)
	{
		$result_query = $this->db->select('*')->from($tbl_manu)->where('manufacture_id',$manufacture_id)->get();
		return $result_query->row();
	}
	public function update_manu_info($tbl_manu,$data,$manufacture_id)
	{
		return $this->db->where('manufacture_id',$manufacture_id)->update($tbl_manu,$data);
	}
	public function delete_cat_by_id($tbl_manu,$manufacture_id)
	{
		return $this->db->where('manufacture_id',$manufacture_id)->delete($tbl_manu);
	}*/
}