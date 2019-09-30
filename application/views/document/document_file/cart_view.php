
<div class="span9">
		
		<?php 
			$contents=$this->cart->contents();
			$coun = count($contents);
			
			if($coun<=0){ ?>
			<h4 class="title"><span class="text"><strong> The Cart is</strong> Empty</span>

			<?php }else{ ?>			
		<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Remove</th>
					<th>Image</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Sub Total</th>
				</tr>
			</thead>
			<?php 
			foreach ($contents as $val) {
				$product_id=$val['id'];
			
				}
			?>		
			<form action="<?php echo base_url();?>Cart_manage/update_cart" method="post">
			<tbody>
			<?php 
				 
				foreach ($contents as $value) {
				?>
				<tr>
					<td>
						<a href="<?php echo base_url();?>Cart_manage/update_cart/<?php echo $value['rowid']; ?>">
						x</a>
					</td>
					<td><a href="<?php echo base_url();?>Cart_manage/add_to_cart/<?php echo $value['id'];?>"><img alt="" src="<?php echo base_url().$value['image'] ;?>"></a>
					</td>
					<td><?php echo $value['name']; ?></td>
					<td>
						<input type="text" name ="qty" value="<?php echo $value['qty']; ?>" class="input-mini">
						<input type="hidden" name ="rowid" value="<?php echo $value['rowid']; ?>" class="input-mini">
					</td>
					<td>$<?php echo $value['price']; ?></td>
					<td>$<?php echo $value['subtotal']; ?></td>
				</tr>	
				<?php }?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					
					<td>Grand Total</td>
					<td>
						<strong>$<?php echo $this->cart->total(); ?></strong>
					</td>
				</tr>		  
			</tbody>

		</table>
		<h4>What would you like to do next?</h4>
		<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		<label class="radio">
			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
			Use Coupon Code
		</label>
		<label class="radio">
			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			Estimate Shipping &amp; Taxes
		</label>
		<hr>
		<p class="cart-total right">
			<strong>Sub-Total</strong>:	$100.00<br>
			<strong>Eco Tax (-2.00)</strong>: $2.00<br>
			<strong>VAT (17.5%)</strong>: $17.50<br>
			<strong>Total</strong>: $119.50<br>
		</p>
		<hr/>
			<p class="buttons center">		
			<button class="btn" type="submit">Update</button>
		</form>
			
			<a  href="<?php echo base_url();?>Welcome/index" class="btn btn-inverse" type="submit">Continue</a>
			<?php 
			$customer_id = $this->session->userdata('customer_id');
			
			$shiping_id = $this->session->userdata('shiping_id');
			if($customer_id==NULL)
			{
			?>
			<a  href="<?php echo base_url();?>Checkout/check_out" class="btn btn-inverse" type="submit" id="checkout">Checkout</a>
			<?php }if($customer_id!=NULL && $shiping_id==NULL)
				{
				$this->load->view('document/document_file/shiping_from');
				}
				if($customer_id!=NULL && $shiping_id!=NULL)
				{
				$this->load->view('document/document_file/payment_from');
				}
			?>
		</p>
		<?php } ?>
	
</div>				