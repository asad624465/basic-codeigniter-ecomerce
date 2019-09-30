
<div class="box round first grid">
	<h2>Add New Post</h2>
	<span style="color:green;font-size:15px;font-weidth:bold;">
			<?php 
				$message = $this->session->userdata('message');
				if(isset($message))
				{
						echo $message;
						$this->session->unset_userdata('message');
								
				}
			?>
	</span>
	<div class="block">               
	 <form action="<?php echo base_url();?>Manufac_manage/update_manufature" method="post" enctype="multipart/form-data">
		<table class="form">
			<tr>
				<td>
					<label>Title</label>
				</td>
				<td>
					<input name ="manufacture_name" type="text" value="<?php echo $select_manu_id->manufacture_name ;?>" class="medium" />
					
					<input name ="manufacture_id" type="hidden" value="<?php echo $select_manu_id->manufacture_id ;?>" class="medium" />
				</td>
			</tr>
			<tr>
				<td style="vertical-align: top; padding-top: 9px;">
					<label>manufacture description</label>
				</td>
				<td>
					<textarea name ="manufacture_description" style="width:500px;height:150px; border:1px solid #ddd" ><?php echo $select_manu_id->manufacture_description;?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td style="vertical-align: top; padding-top: 9px;">
					<label>status</label>
				</td>
				<td>
					<?php $manu = $select_manu_id->manufacture_status;
						if($manu == '1'){ ?>
						<input type="radio" name="manufacture_status" value="1" checked>Published
						<?php }else { ?>
						<input type="radio" name="manufacture_status" value="1">Published
					<?php }?>

					<?php $manu = $select_manu_id->manufacture_status;
						if($manu ==0){
						?>
						<input type="radio" name="manufacture_status" value="1"checked>UnPublished
						<?php }else{ ?>
						<input type="radio" name="manufacture_status" value="1">UnPublished
					<?php }?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" Value="Save" />
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>
  <script src="<?php echo base_url();?>admin_source/js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>