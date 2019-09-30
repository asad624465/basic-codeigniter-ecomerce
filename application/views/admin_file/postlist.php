
    <div class="box round first grid">
        <h2>Post List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Model</th>
					<th>Image</th>
					<th>Quantity</th>
					<th>Re-Order</th>
					<th>Description</th>
					<th>Status</th>
					<th>Action</th>
					<th>Publish or Up</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($product_info as $val){?>
				<tr class="odd gradeX">
					<td><?php echo $val->product_name;?></td>
					<td><?php echo $val->product_price;?></td>
					<td><?php echo $val->product_code;?></td>
					<td><?php echo $val->product_img;?></td>
					<td><?php echo $val->product_quantity;?></td>
					<td><?php echo $val->product_reorder;?></td>
					<td><?php echo $val->product_short_desc;?></td>
					<td><?php echo $val->publication_status;?></td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
					<td>Win 95+</td>
				</tr>
				<?php }?>
				
			</tbody>
		</table>

       </div>
    </div>

        