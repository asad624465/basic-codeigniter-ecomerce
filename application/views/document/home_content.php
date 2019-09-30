<div id="top-bar" class="container"></div>
<section  class="homepage-slider" id="home-slider">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="<?php echo base_url();?>source/themes/images/carousel/banner-1.jpg" alt="" />
			</li>
			<li>
				<img src="<?php echo base_url();?>source/themes/images/carousel/banner-2.jpg" alt="" />
				<div class="intro">
					<h1>Mid season sale</h1>
					<p><span>Up to 50% Off</span></p>
					<p><span>On selected items online and in stores</span></p>
				</div>
			</li>
		</ul>
	</div>			
</section>
<section class="header_text">
	We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
	<br/>Don't miss to use our cheap abd best bootstrap templates.
</section>
<div class="span12">										
	<div class="row">
		<div class="span12">
			<h4 class="title">
				<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
				<span class="pull-right">
					<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
				</span>
			</h4>
			<div id="myCarousel" class="myCarousel carousel slide">
				<div class="carousel-inner">
					<div class="active item">
						<ul class="thumbnails">	
						<?php 
							foreach ($publish_product as $value) {
							?>							
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<p style="max-height: 200px">
									<a href="<?php echo base_url();?>Welcome/product_details/<?php echo $value->product_id;?>"><img src="<?php echo base_url().$value->product_img;?>" alt="" /></a>
									</p>
									<a href="<?php echo base_url();?>Welcome/product_details/<?php echo $value->product_id;?>" class="title">
									<?php echo mb_substr( $value->product_name, 0,25); ?>
									</a><br/>
									<a href="products.html" class="category"><?php echo mb_substr($value->product_short_desc,0,10); ?>
									</a>
									<?php if($value->product_spcial_price){?>
									<p class="price">$
										<?php echo $value->product_spcial_price; ?>

									</p>
									<?php } else {?>
									<p class="price">
										$<?php echo $value->product_price; ?>
									</p>
									<?php }?>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>							
			</div>
		</div>						
	</div>
	<?php echo $this->pagination->create_links();?>
	<br/>
	<div class="row">
		<div class="span12">
			<h4 class="title">
				<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
				<span class="pull-right">
					<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
				</span>
			</h4>
			<div id="myCarousel-2" class="myCarousel carousel slide">
				<div class="carousel-inner">
					<div class="active item">
						<ul class="thumbnails">								
						<?php 
							 
							foreach ($publish_product as $value) {


								$date = date('d-m-Y' , strtotime($value->date_time));

								$today = date('d-m-Y', strtotime('-10 days'))
								;
								if($today < $date){
									
							?>			
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<p style="max-height: 200px">
									<a href="<?php echo base_url();?>Welcome/product_details/<?php echo $value->product_id;?>"><img src="<?php echo base_url().$value->product_img;?>" alt="" />
									</a>
									</p>
									<a href="<?php echo base_url();?>Welcome/product_details/<?php echo $value->product_id;?>" class="title">
										<?php echo $value->product_name;?></a><br/>
									<a href="products.html" class="category"><?php echo mb_substr($value->product_short_desc,0,25); ?></a>
									<p class="price">$<?php echo $value->product_price;?></p>

								</div>
							</li>
							<?php }} ?>
						</ul>
					</div>
				</div>							
			</div>
		</div>						
	</div>
	<?php echo $this->pagination->create_links();?>
	<div class="row feature_box">						
		<div class="span4">
			<div class="service">
				<div class="responsive">	
					<img src="<?php echo base_url();?>source/themes/images/feature_img_2.png" alt="" />
					<h4>MODERN <strong>DESIGN</strong></h4>
					<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
				</div>
			</div>
		</div>
		<div class="span4">	
			<div class="service">
				<div class="customize">			
					<img src="<?php echo base_url();?>source/themes/images/feature_img_1.png" alt="" />
					<h4>FREE <strong>SHIPPING</strong></h4>
					<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="service">
				<div class="support">	
					<img src="<?php echo base_url();?>source/themes/images/feature_img_3.png" alt="" />
					<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
					<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
				</div>
			</div>
		</div>	
	</div>		
</div>	

