		
<div class="span5">					
	<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
	<form action="<?php echo base_url();?>User_login/user_sign_in" method="post">
		<input type="hidden" name="next" value="/">
		<fieldset>
			<div class="control-group">
				<label class="control-label">Username</label>
				<div class="controls">
					<input type="text" name="username" placeholder="Enter your username" id="username" class="input-xlarge">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge">
				</div>
			</div>
			<div class="control-group">
				<input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
				<hr>
				<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
			</div>
		</fieldset>
	</form>				
</div>
<div class="span7">					
	<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
	<form action="<?php echo base_url();?>User_login/user_registration" method="post" class="form-stacked">
		<fieldset>
			<div class="control-group">
				<label class="control-label">Username</label>
				<div class="controls">
					<input type="text" name="username" placeholder="Enter your username" class="input-xlarge">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password:</label>
				<div class="controls">
					<input type="password" name="password" placeholder="Enter your email" class="input-xlarge">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Email address :</label>
				<div class="controls">
					<input type="text" name="email" placeholder="Enter your password" class="input-xlarge">
				</div>
			</div>							                            
			<div class="control-group">
				<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
			</div>
			<hr>
			<div class="actions">
			<input tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
		</fieldset>
	</form>					
</div>						