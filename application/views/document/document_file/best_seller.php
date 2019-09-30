<ul class="thumbnails listing-products">

		<?php foreach ($best_seller as $value){?>
		<li class="span3">
			<div class="product-box">
				<span class="sale_tag"></span>												
				<a href="<?php echo base_url();?>Welcome/product_details/<?php echo $value->product_id;?>"><img alt="" src="<?php echo base_url().$value->product_img;?>" style="max-height: 200px">
				</a><br/>
				<a href="<?php echo base_url();?>Welcome/product_details/<?php echo $value->product_id;?>" class="title"><?php echo mb_substr( $value->product_name, 0,15); ?>
				</a>
				<br/>
				<a href="#" class="category"><?php echo mb_substr($value->product_short_desc,0,25); ?></a>
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
		<?php }?>
	</ul>								
	<hr>
	<div class="pagination pagination-small pagination-centered">
		<ul>
			<li><a href="#">Prev</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">Next</a></li>
		</ul>
	</div>