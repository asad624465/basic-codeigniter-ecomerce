
<?php
class Checkout_model extends CI_Model
{

	 public function get_user($user_name)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$user_name);
        $query = $this->db->get();
        $result = $query->row();
       return  $result;
    }
	
}