
<?php
class Checkout_model extends CI_Model
{

	 public function select_customer_by_id($customer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id',$customer_id);
        $query = $this->db->get();
        $result = $query->row();
       return  $result;
    }
    public function save_order_info()
    {
        $order_data = array();
        $order_data['customer_id'] = $this->session->userdata('customer_id'); 
        $order_data['shiping_id'] = $this->session->userdata('shiping_id'); 
        $order_data['payment_id'] = $this->session->userdata('payment_id'); 
        $order_data['order_status'] = 0; 
        $order_data['order_total'] = $this->cart->total(); 
        $this->db->insert('tbl_order',$order_data ); 
       $order_id = $this->db->insert_id(); 
       //Start invoice Update
       $invoice_no ='inv-'.date('Y-').$order_id;
       $this->db->set('invoice_no',$invoice_no);
       $this->db->where('order_id',$order_id);
       $this->db->update('tbl_order');

       $order_details = array();
       $order_details['order_id'] =  $order_id;
       $contents = $this->cart->contents();

       foreach ($contents as $product_info) {
          $order_details['product_id'] =  $product_info['id'];
          $order_details['product_name'] =  $product_info['name'];
          $order_details['product_price'] =  $product_info['price'];
          $order_details['product_sels_quantity'] =  $product_info['qty'];
          
          $this->db->insert('tbl_order_details',$order_details); 
         
       }
      $sql = "UPDATE tbl_product,tbl_order_details SET 
          tbl_product.product_quantity=tbl_product.product_quantity-tbl_order_details.product_sels_quantity WHERE
          tbl_product.product_id=tbl_order_details.product_id AND 
          tbl_order_details.order_id='$order_id'";
           $this->db->query($sql);

    }
	
}
