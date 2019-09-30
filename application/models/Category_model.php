<?php

class Category_model extends CI_Model
{

	public function save_cat_info($tbl_cat,$data)
	{
		$tbl = $tbl_cat;
		return $this->db->insert($tbl,$data);
		
	}
	public function select_cat_info($tbl_cat)
	{
		$result_query = $this->db->select('*')
		->from($tbl_cat)
		->get();
		return $result_query->result();
	}
	public function publish_cat_info($tbl_cat,$cat_id)
	{
		$this->db->set('publication_status',0)->where('cat_id',$cat_id)->update($tbl_cat);
	}
	public function Un_publish_cat_info($tbl_cat,$cat_id)
	{
		return $this->db->set('publication_status',1)->where('cat_id',$cat_id)->update($tbl_cat);
	}
	public function select_cat_by_id($tbl_cat,$cat_id)
	{
		$result_query = $this->db->select('*')->from($tbl_cat)->where('cat_id',$cat_id)->get();
		return $result_query->row();
	}
	public function update_cate_info($tbl_cat,$data,$cat_id)
	{
		return $this->db->where('cat_id',$cat_id)->update($tbl_cat,$data);
	}
	public function dedlete_cat_by_id($tbl_cat,$cat_id)
	{
		return $this->db->where('cat_id',$cat_id)->delete($tbl_cat);
	}
	public function select_all_cat_info($tbl_cat)
	{
		$result_query = $this->db->select('*')->from($tbl_cat)
		->where('publication_status',1)->get();
		return $result_query->result();
	}
}