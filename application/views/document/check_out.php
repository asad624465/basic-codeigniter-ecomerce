
<div class="span12">
	<div class="accordion" id="accordion2">
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
			</div>
			<div id="collapseOne" class="accordion-body in collapse">
				<div class="accordion-inner">
					<div class="row-fluid">
						<div class="span6">
							<h4>New Customer</h4>
							<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
							<form action="#" method="post">
								<fieldset>
									<label class="radio" for="register">
										<input type="radio" name="account" value="register" id="register" checked="checked">Register Account
									</label>
									<label class="radio" for="guest">
										<input type="radio" name="account" value="guest" id="guest">Guest Checkout
									</label>
									<br>
									<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Continue</button>
								</fieldset>
							</form>
						 </div>
						 <div class="span6">
							<h4>Returning Customer</h4>
							<p>I am a returning customer</p>
							<form action="#" method="post">
								<fieldset>
									<div class="control-group">
										<label class="control-label">Username</label>
										<div class="controls">
											<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Password</label>
										<div class="controls">
										<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
										</div>
									</div>
									<button class="btn btn-inverse">Continue</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
				<?php $msg = $this->session->userdata('message');
					if($msg){
						echo $msg;
						$this->session->unset_userdata('message');
					}
				?>
			</div>
			<div id="collapseTwo" class="accordion-body collapse">
			<form action="<?php echo base_url()?>Checkout/customer_registration" method="post">
				<div class="accordion-inner">
					<div class="row-fluid">
						<div class="span6">
							<h4>Your Personal Details</h4>
							<div class="control-group">
								<label class="control-label">First Name</label>
								<div class="controls">
									<input type="text" name="first_name" placeholder="First Name" class="input-xlarge form-text">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Last Name</label>
								<div class="controls">
									<input type="text" name="last_name" placeholder="Last Name" class="input-xlarge form-text"
									id="validate_firstname">
									<span class="bar"></span>
								</div>
							</div>					  
							<div class="control-group">
								<label class="control-label">Email Address</label>
								<div class="controls">
									<input type="text" name="email_address" placeholder="Email Address" class="input-xlarge"  id="username" onkeyup="makerequest(this.value,'msg')">
								</div>
								<span id="msg"></span>
							</div>
							<div class="control-group">
								<label class="control-label">Telephone</label>
								<div class="controls">
									<input type="text" name="customer_telephone" placeholder="Telephone" class="input-xlarge form-text"
									>
									
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Fax</label>
								<div class="controls">
									<input type="text" name="customer_fax" placeholder="Fax" class="input-xlarge form-text"
									>
								</div>
							</div>
						</div>
						<div class="span6">
							<h4>Your Address</h4>
							<div class="control-group">
								<label class="control-label">Company</label>
								<div class="controls">
									<input type="text" name="customer_company" placeholder="Company" class="input-xlarge form-text"
									>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Company ID:</label>
								<div class="controls">
									<input type="text" name="customer_company_id" placeholder="Company ID:" class="input-xlarge form-text" id="validate_firstname">
									<span class="bar"></span>
								</div>
							</div>					  
							<div class="control-group">
								<label class="control-label"><span class="required">*</span> Address 1:</label>
								<div class="controls">
									<input type="text" name="customer_address_one" placeholder="Address 1" class="input-xlarge form-text" id="validate_firstname">
									<span class="bar"></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Address 2:</label>
								<div class="controls">
									<input type="text" name="customer_address_two" placeholder="Address 2" class="input-xlarge form-text" id="validate_firstname">
									<span class="bar"></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label"><span class="required">*</span> City:</label>
								<div class="controls">
									<input type="text" name="customer_city" placeholder="City:" class="input-xlarge form-text"
									 id="validate_firstname">
									 <span class="bar"></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label"><span class="required">*</span> Post Code:</label>
								<div class="controls">
									<input type="text" name="customer_postcode" placeholder="Post Code" class="input-xlarge form-text"
									id="validate_firstname">
									<span class="bar"></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label"><span class="required">*</span> Country:</label>
								<div class="controls">
									<select class="input-xlarge crs-country" name="customer_country" data-region-id="one">
										
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label"><span class="required">*</span> Region / State:</label>
								<div class="controls">
									<select name="zone_id" class="input-xlarge" name="customer_region" id="one">
									</select>
								</div>
							</div>
							<div class="control-group">
								<button class="btn btn-inverse pull-right" id="rex_btn">Registation</button>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
			</div>
			<div id="collapseThree" class="accordion-body collapse">
				<div class="accordion-inner">
					<div class="row-fluid">
						<div class="control-group">
							<label for="textarea" class="control-label">Comments</label>
							<div class="controls">
								<textarea rows="3" id="textarea" class="span12"></textarea>
							</div>
						</div>									
						<button class="btn btn-inverse pull-right">Confirm order</button>
					</div>
				</div>
			</div>
		</div>
	</div>				
</div>


