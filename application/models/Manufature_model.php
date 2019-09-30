<?php

class Manufature_model extends CI_Model
{

	public function save_manu_info($product_manu,$data)
	{
		
		return $this->db->insert($product_manu,$data);
		
	}
	//Start select_manu_info********
	public function select_manu_info($table_name)
	{
		$result_query = $this->db->select('*')
		->from($table_name)
		->get();
		return $result_query->result();
	}
	//Start publish_manu_info********
	public function publish_manu_info($tbl_manu,$manufacture_id)
	{
		$this->db->set('manufacture_status',0)->where('manufacture_id',$manufacture_id)->update($tbl_manu);
	}
	//Start Un_publish_manu_info********
	public function Un_publish_manu_info($tbl_manu,$manufacture_id)
	{
		return $this->db->set('manufacture_status',1)->where('manufacture_id',$manufacture_id)->update($tbl_manu);
	}
	//Start select_manu_by_id********
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
	}
	public function select_all_manu_info($product_manu)
	{
		$result_query = $this->db->select('*')
		->from($product_manu)->where('manufacture_status',1)->get();
		return $result_query->result();
	}
}