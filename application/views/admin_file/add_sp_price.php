
		
<div class="box round first grid">
    <h2>Add spcial price</h2>
    <div style="color:white;font-size:15px;font-weidth:bold; background:#000;margin-botttom:15px;" >
                <?php 
                    $msg = $this->session->userdata('message');
                    if(isset($msg))
                    {
                        echo $msg;
                        $this->session->unset_userdata('message');
                        
                    }
                ?>
            </div>
   <div class="block copyblock"> 
     <form action="<?php echo base_url();?>Category_manage/save_category" method="post">
        <table class="form">					
            <tr>
                <td>
                    <input type="text" name ="product_spcial_price" placeholder="Enter product spcial price..." class="medium" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name ="start_date" placeholder ="Enter Start date..." class="medium" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name ="end_date" placeholder ="Enter End date..." class="medium" />
                </td>
            </tr>
             <tr>
                <td>
                   <input type="radio" name="publication_status" value="1">Publish
                   <input type="radio" name="publication_status" value="0">UnPublish
                </td>
            </tr>
			<tr> 
                <td>
                    <input type="submit" name="submit" Value="Save" />
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>
