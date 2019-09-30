	
<div class="span9">
    <div class="row">
		<div class="span4">
			<a href="themes/images/ladies/1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1">
			<img alt="" src="<?php echo base_url().$product_detail->product_img;?>">
			</a>
			<ul class="thumbnails small"><?php foreach($product_imag as $value) {?>
					<li class="span1">
						<a href="themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?php echo base_url().$value->product_image;?>" alt=""></a>
					</li>
					<?php }?>								
				</ul>
		</div>
			<div class="span5">
				<address>
					<strong>Brand:</strong> 
					<span>
					<?php echo $product_detail->manufacture_name;?>
					</span><br>
					<strong>Product Code:</strong> <span>
					<?php echo $product_detail->product_code;?></span><br>
					<strong>Reward Points:</strong> <span>0</span><br>
					<strong>Availability:</strong> 
					<span>
					<?php echo $product_detail->product_quantity;?></span><br>								
				</address>									
				<h4><strong>Price:</strong>
				<?php if($product_detail->product_spcial_price){?>
						<?php echo $product_detail->product_spcial_price; ?>
					<?php } else {?>
						<?php echo $product_detail->product_price; ?>
				<?php }?>
				</h4>
			</div>
			<div class="span5">
				<form action="<?php echo base_url();?>Cart_manage/add_to_cart/<?php echo $product_detail->product_id;?>" method="post" class="form-inline">
					
					<label>Qty:</label>
					<input type="text" name="qty" class="span1" placeholder="1">

					<button class="btn btn-inverse" type="submit">Add to cart</button>
				</form>
			</div>							
		</div>
		<div class="row">
			<div class="span9">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#home">Description</a></li>
					<li class=""><a href="#profile">Additional Information</a></li>
				</ul>							 
				<div class="tab-content">
					<div class="tab-pane active" id="home">
						<?php echo $product_detail->product_short_desc;?>
					</div>
					<div class="tab-pane" id="profile">
						<table class="table table-striped shop_attributes">	
							<tbody>
								<tr class="">
									<th>Size</th>
									<td>Large, Medium, Small, X-Large</td>
								</tr>		
								<tr class="alt">
									<th>Colour</th>
									<td>Orange, Yellow</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>							
			</div>						
			<div class="span9">	
				<br>
				<h4 class="title">
					<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
					<span class="pull-right">
						<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
					</span>
				</h4>
				<div id="myCarousel-1" class="carousel slide">
					<div class="carousel-inner">
						<div class="active item">
							<ul class="thumbnails listing-products">
							<?php foreach($releated_product as $value){?>
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>												
										<a href="product_detail.html"><img alt="" src="<?php echo base_url().$value->product_img;?>"></a><br/>
										<a href="product_detail.html" class="title"><?php echo $value->product_name;?></a><br/>
										<a href="#" class="category"><?php echo $value->product_name;?></a>
										<?php if($value->product_spcial_price){?>
										<p class="price">$<?php echo $value->product_spcial_price; ?></pvalue										
											<?php } else {?>
												<p class="price">$<?php echo $value->product_price; ?></p>
										<?php }?>
										</h4>
										
									</div>
								</li>
								<?php }?>										
							</ul>
						</div>
						<div class="item">
							<ul class="thumbnails listing-products">
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>												
										<a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
										<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
										<a href="#" class="category">Phasellus consequat</a>
										<p class="price">$341</p>
									</div>
								</li>       
								<li class="span3">
									<div class="product-box">												
										<a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
										<a href="product_detail.html">Praesent tempor sem</a><br/>
										<a href="#" class="category">Erat gravida</a>
										<p class="price">$28</p>
									</div>
								</li>
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>												
										<a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
										<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
										<a href="#" class="category">Suspendisse aliquet</a>
										<p class="price">$341</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
							
		<script src="<?php echo base_url();?>source/themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>