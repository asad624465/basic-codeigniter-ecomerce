
<?php
class General_model extends CI_Model
{

	public function save_info($tbl_name,$data)
	{
		
		$this->db->insert($tbl_name,$data);
		$id = $this->db->insert_id();
		return $id;
		
	}
	//Start select_manu_info********
	 public function get_user($user_name)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$user_name);
        $query = $this->db->get();
        $result = $query->row();
        if ($result)
        {
         return TRUE;
        }
        else 
        {
            return FALSE;
        }

    }
     public function select_info($tbl_userdata,$username,$password)
    {
        $this->db->select('*');
        $this->db->from($tbl_userdata);
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get();
        $result = $query->row();
        return $result ;
      
    }
	//Start select_manu_info********
	public function all_product($id)
	{
		$this->db->select('tbl_product.product_id');
        $this->db->from('tbl_product');
        $this->db->where('cat_id',$id);
        $query = $this->db->get();
        $result = $query->result();
        return $result ;
	}
	/*//Start select_manu_info********
	public function select_product_info($tbl_product)
	{
		$result_query = $this->db->select('*')
		->from($tbl_product)
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
	}*/
}