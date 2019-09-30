<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd"
>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<title>
			<?php echo $title ;?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo base_url();?>source/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?php echo base_url();?>source/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="<?php echo base_url();?>source/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?php echo base_url();?>source/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<?php echo base_url();?>source/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?php echo base_url();?>source/themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?php echo base_url();?>source/bootstrap/js/bootstrap.min.js"></script>				
		<script src="<?php echo base_url();?>source/themes/js/superfish.js"></script>	
		<script src="<?php echo base_url();?>source/themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		<!--Use Country Picker-->
		 <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
		<script src="<?php echo base_url();?>source/lib/jquery.crs.min.js"></script>
		<!-- Validation scripts -->
        <script src="<?php echo base_url();?>source/lib/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>source/lib/validation.js"></script>
        <!-- ajax_utility scripts -->
        <script src="<?php echo base_url();?>source/lib/ajax_utility.js"></script>

	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li>
							 <a href="<?php echo base_url();?>Cart_manage/add_to_cart">Your Cart</a>
							</li>
							<?php 
							$customer_id = $this->session->userdata('customer_id');

							if($customer_id!=NULL)
							{
							?>
							<li>
							<?php echo $this->session->userdata('full_name');?>
								<a href="<?php echo base_url();?>Checkout/log_out">Logout</a>
							</li>
							<?php }else{ ?>	
							<li>
								<a href="<?php echo base_url();?>Checkout/check_out">Checkout</a>
							</li>			
							<li>
								<a href="<?php echo base_url();?>User_login/login">
								Login
								</a>
							</li>
							<?php }?>	
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?php echo base_url();?>Welcome/index.php" class="logo pull-left"><img src="<?php echo base_url();?>source/themes/images/logo.png" class="site_logo" alt="">
					</a>
					<nav id="menu" class="pull-right">
						<ul>
							<li>
								<a href="<?php echo base_url();?>Welcome/Woman.php">Woman</a>	
							</li>															
							<li>
								<a href="<?php echo base_url();?>Welcome/Man.php">Man</a>
							</li>			
							<li>
								<a href="<?php echo base_url();?>Welcome/Sport.php">Sport</a>
							</li>							
							<li>
								<a href="<?php echo base_url();?>Welcome/Hangbag.php">Hangbag</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>Welcome/best_seller">Best Seller</a>
							</li>
							<li><a href="<?php echo base_url();?>Welcome/top_seller">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section class="main-content">
				<div class="row">
					<?php echo $home_content;?>
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url();?>source/themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url();?>source/themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url();?>source/themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url();?>source/themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url();?>source/themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url();?>source/themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="<?php echo base_url();?>Welcome/index.php">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li>
								<a href="<?php echo base_url();?>Welcome/add_contact">Contac Us</a>
							</li>
							<li> 
							<a href="<?php echo base_url();?>Cart_manage/add_to_cart">Your Cart</a></li>
							<li>
							<a href="<?php echo base_url();?>User_login/login">
								Login
								</a>
							</li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="<?php echo base_url();?>source/themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="<?php echo base_url();?>source/themes/js/common.js"></script>
		<script src="<?php echo base_url();?>source/themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>