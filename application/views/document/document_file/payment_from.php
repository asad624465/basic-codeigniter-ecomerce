
<div class="span9">
		<h4 class="title">
		<h4 class="title text-center">
			<span class="text">
				<strong>Payment </strong> System
			</span>
		</h4>
		<div class="accordion-inner">
			<div class="row-fluid">
			<form action="<?php echo secure_base_url();?>Checkout/confirm_order" method="post">
				<div class="span6">				  
					<div class="control-group">
						<label class="control-label">Chose offtion</label>
                        <div class="controls">
                            <div class="col-sm-12 padding-0">
                              <input type="radio" name="payment_type" value="Bicash Payment">Bicash Payment
                            </div>
                            <div class="col-sm-12 padding-0">
                              <input type="radio" name="payment_type" value="Cash On Delivery">Cash On Delivery 
                            </div>
                            <div class="col-sm-12 padding-0">
                              <input type="radio" name="payment_type" value="Credit Card Payment">Credit Card Payment
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
						<button class="btn btn-inverse pull-right">Continue</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	
</div>			
	