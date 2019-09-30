

<div class="span9">
	<h4 class="title">
	<span class="text"><strong>Shiping</strong> Details</span>
	</h4>
	<h4 class="title text-center">
	<a href="<?php echo base_url();?>Checkout/shiping_same_as_biling">
		<span class="text">
			<strong>Shiping Same As</strong> Billing
		</span>
	</a>
	</h4>
	<div class="accordion-inner">
		<form action="<?php echo base_url();?>Checkout/save_as_shiping" method="post">
		<div class="row-fluid">
			<div class="span6">
				<div class="control-group">
					<label class="control-label">Full Name</label>
					<div class="controls">
						<input type="text" name="full_name" placeholder="First Name" class="input-xlarge form-text">
					</div>
				</div>					  
				<div class="control-group">
					<label class="control-label">Email Address:</label>
					<div class="controls">
						<input type="text" name="email_add" placeholder="Email Address" class="input-xlarge"  id="username" onkeyup="makerequest(this.value,'msg')">
					</div>
					<span id="msg"></span>
				</div>
				<div class="control-group">
					<label class="control-label">Mobile:</label>
					<div class="controls">
						<input type="text" name="shiping_mobile" placeholder="Telephone" class="input-xlarge form-text"
						>
						
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><span class="required">*</span> City:</label>
					<div class="controls">
						<input type="text" name="shiping_city" placeholder="City:" class="input-xlarge form-text"
						 id="validate_firstname">
						 <span class="bar"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><span class="required">*</span> Post Code:</label>
					<div class="controls">
						<input type="text" name="shiping_postcode" placeholder="Post Code" class="input-xlarge form-text"
						id="validate_firstname">
						<span class="bar"></span>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="control-group">
					<label class="control-label"><span class="required">*</span> Address:</label>
					<div class="controls">
						<textarea type="text" name="shiping_address" class="input-xlarge" placeholder="Address" rows="8"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><span class="required">*</span> Country:</label>
					<div class="controls">
						<select class="input-xlarge crs-country" name="shiping_country" data-region-id="one">
							
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><span class="required">*</span> Region / State:</label>
					<div class="controls">
						<select name="zone_id" class="input-xlarge" name="shiping_state" id="one">
						</select>
					</div>
				</div>
				<div class="control-group">
					<button type ="submit"class="btn btn-inverse pull-right" id="rex_btn">Continue</button>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>			
	