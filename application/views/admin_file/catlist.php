
<div class="box round first grid">
    <h2>Category List</h2>
    <div style="color:green;font-size:15px;font-weidth:bold; margin-botttom:15px;" >
                <?php 
                    $msg = $this->session->userdata('message');
                    if(isset($msg))
                    {
                        echo $msg;
                        $this->session->unset_userdata('message');
                        
                    }
                ?>
    </div>
    <div class="block">        
        <table class="data display datatable" id="example">
		<thead>
			<tr>
				<th>Serial No.</th>
				<th>Category Name</th>
				<th>publicationstatus</th>
				<th>Action</th>
				<th>Publish or Un_publish</th>
			</tr>
		</thead>
		<tbody>
		<?php $i=0;
		 foreach($cat_info as $val)
			{ 
				$i = $i+1; ?>
			<tr class="odd gradeX">
				<td><?php echo $i;?></td>
				<td><?php echo $val->category_name;?></td>
				<td>
					<?php 
					 $pub = $val->publication_status;
					 if( $pub=='1')
					 {
					 	echo "Published";
					 }else
					 {
					 	echo "UnPublished";
					 }

					?>
				</td>
				<td>
					<a href="<?php echo base_url();?>Category_manage/edit_cat/<?php echo $val->cat_id;?>">Edit</a> || 

					<a href="<?php echo base_url();?>Category_manage/delete_cat/<?php echo $val->cat_id;?>" onclick=" return checkDelete();">Delete</a>
				</td>
				<td>
					<?php $pub = $val->publication_status;
					if( $pub=='1') {?>
					<a href="<?php echo base_url();?>Category_manage/publish_cat/<?php echo $val->cat_id;?>">UnPublish</a>

					<?php }else{?>

					<a href="<?php echo base_url();?>Category_manage/un_publish_cat/<?php echo $val->cat_id;?>">Publish</a>
					<?php }?>
				</td>
			</tr>
			<?php }?>
		</tbody>
	</table>
   </div>
</div>
