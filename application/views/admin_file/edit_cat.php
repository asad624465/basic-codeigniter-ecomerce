
		
<div class="box round first grid">
    <h2>Add New Category</h2>
   <div class="block copyblock"> 
     <form action="<?php echo base_url();?>Category_manage/update_category" method="post">
        <table class="form">					
            <tr>
                <td>
                    <input type="text" name ="category_name" value= "<?php echo $select_cat_id->category_name ?>" class="medium" />
                </td>
                <td>
                    <input type="hidden" name ="cat_id" value= "<?php echo $select_cat_id->cat_id ?>" class="medium" />
                </td>
            </tr>
             <tr>
                <td>
                    <?php $val = $select_cat_id->publication_status;
                    if($val==1){?>
                   <input type="radio" name="publication_status" value="1" checked/>Publish
                   <?php }else{ ?>
                   <input type="radio" name="publication_status" value="1">Publish
                   <?php }?>

                   <?php $val = $select_cat_id->publication_status;
                    if($val==0){ ?>
                   <input type="radio" name="publication_status" value="0" checked/>UnPublish
                   <?php }else{ ?>
                   <input type="radio" name="publication_status" value="0">UnPublish
                   <?php }?>
                </td>
            </tr>
			<tr> 
                <td>
                    <input type="submit" name="submit" Value="Update" />
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>
