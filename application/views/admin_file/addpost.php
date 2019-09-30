     <script language="javascript">
        var i = 1;
        function changeIt() {
            if(i>4){
                alert('Maximum 5 product is allowed');
            }else 
            {
            my_div.innerHTML = my_div.innerHTML+"<br/> <input type ='file' name='sub_image[]'/>"
            }

            i++;

        }
        $('[data-toggle=tab]').click(function(){
            if($(this).parent.().hasClass('active')){
                 ($(this).attr.('href').toggleClass('active'));
            }
        });
    </script>
<div class="box round first grid">
    <h2>Add New Product</h2>
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
        <form action="<?php echo base_url();?>Product_manage/save_product" method="post" enctype="multipart/form-data">
            <div id="tab-container" class='tab-container'>
             <ul class='etabs'>
               <li class='tab'><a href="#tabs1-html">Product info</a></li>
               <li class='tab'><a href="#tabs1-js">Image</a></li>
               <li class='tab'><a href="#tabs1-css">Spcial Price</a></li>
             </ul>
                <div class='panel-container'>
                    <div id="tabs1-html">

                    <table class="form">
                        <tr>
                            <td>
                                <label>Product Name</label>
                            </td>
                            <td>
                                <input type="text" name="product_name" placeholder="Enter Product name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat_id">
                                <option>Category name</option>
                                    <?php 
                                     foreach($all_cat_info as $val) { ?>
                                    <option value="<?php echo $val->cat_id;?>">
                                     <?php echo $val->category_name; ?>
                                    </option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>
                       <tr>
                            <td>
                                <label>Product Price</label>
                            </td>
                            <td>
                                <input type="text" name="product_price" placeholder="Enter Product name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Mamuficture Name</label>
                            </td>
                            <td>
                                <select id="select" name="manufacture_id">
                                <option value="selected">Manufacture name</option>
                                    <?php 
                                     foreach($all_manu_info as $val) { ?>
                                    <option value="<?php echo $val->manufacture_id?>">
                                        <?php echo $val->manufacture_name?>
                                    </option>
                                    <?php }?>
                                    
                                </select>
                            </td>
                        </tr> 
                         <tr>
                            <td>
                                <label>Product Model</label>
                            </td>
                            <td>
                                <input type="text" name="product_code" placeholder="Enter Product name..." class="medium" />
                            </td>
                        </tr>  
                        <tr>
                            <td>
                                <label>Product Image</label>
                            </td>
                            <td>
                                <input type="file" name="product_img" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Product Quantity</label>
                            </td>
                            <td>
                                <input type="text" name="product_quantity" id="validate_firstname" placeholder="Enter Product name..." class="medium" />
                            </td>
                            <span class="bar"></span>
                        </tr>  
                        <tr>
                            <td>
                                <label>Product Re-Order</label>
                            </td>
                            <td>
                                <input type="text" name="product_reorder" id="validate_firstname" placeholder="Enter Product name..." class="medium" />
                            </td>
                        </tr>  
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Product Short Description</label>
                            </td>
                            <td>
                                <textarea name="product_short_desc" class="tinymce" cols="30" rows="5"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Product Long Description</label>
                            </td>
                            <td>
                                <textarea name="product_long_desc" class="tinymce" cols="50" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Publication Status</label>
                            </td>
                            <td>
                                <input type="radio" name="publication_status" value="1" />Publish
                                 <input type="radio" name="publication_status" value="0" />UnPublish
                            </td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </div>
              
               <div id="tabs1-js">

               <table class="table table-stripped">
    <tbody>
        
        <tr>
            <td>Display</td>
            <td>
                <input class="form-control" type="file" name="userfile[]" id="multiple" multiple="" />    
            </td>
        </tr>
        <tr>
            <td>Description</td>
            <td>
                <div class="textarea textarea-editor">
                    <textarea name="ket" cols="50" rows="5" class="form-control"></textarea>
                </div>                                  
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-outline btn-block pull-right"><span>Save</span></button>
            </td>
        </tr>
    </tbody>
</table>
            


            <script type="text/javascript">
                jQuery(document).ready(function($){
                   $(document).on('click','button#addfile',function(event){
                    event.preventDefault();
                    $("div#submit").css("display","block");
                    addFileinput(); 
                });
                function addFileinput()
                {
                    var html= '';
                    html += '<div class="alaer alert-info">';
                    html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    html += '<strong>Upload File</strong>';
                    html += '<input type ="file" name="sub_image[]"/>';
                    html +='</div>';
                    $('div#uploadfile').append(html);
                }

                });
                
            </script>

              </div>
              <div id="tabs1-css">
                <table class="form">
                    <tr>
                        <td>
                            <label>Product Name</label>
                        </td>
                        <td>
                            <input type="text" name="product_spcial_price" placeholder="Enter Product name..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Start Date</label>
                        </td>
                        <td>
                            <input type="text" name="start_date" placeholder="Enter Product name..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>End Date</label>
                        </td>
                        <td>
                            <input type="text" name="end_date" placeholder="Enter Product name..." class="medium" />
                        </td>
                    </tr>
                </table>
              </div>
                </div>
            </div>
        </form>
    </div>
</div>
