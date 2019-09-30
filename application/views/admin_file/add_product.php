
<div class="outer">
    <div class="inner bg-light lter">
        <div class="col-lg-12">
            <h2>Add New Manuficture</h2>
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
             <form class="cmxform"   id="signupForm" action="<?php echo base_url();?>Product_manage/save_product" method="post" enctype="multipart/form-data">

                <div class="col-md-12 tabs-area">
                     <ul id="tabs-demo3" class="nav nav-tabs nav-tabs-v2" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#tabs-demo3-area1" id="tabs-demo3-1" role="tab" data-toggle="tab" aria-expanded="true">Menu 1</a>
                      </li>
                      <li role="presentation" class="">
                        <a href="#tabs-demo3-area2" role="tab" id="tabs-demo3-2" data-toggle="tab" aria-expanded="false">Menu 2</a>
                      </li>
                      <li role="presentation">
                        <a href="#tabs-demo3-area3" id="tabs-demo3-3" role="tab" data-toggle="tab" aria-expanded="false">Menu 3</a>
                      </li>
                      <li role="presentation" class="">
                        <a href="#tabs-demo3-area4" role="tab" id="tabs-demo3-4" data-toggle="tab" aria-expanded="false">Menu 4</a>
                      </li>
                    </ul>
                    <div id="tabsDemo3Content" class="tab-content tabs-content-v2">
                        <div role="tabpanel" class="tab-pane fade active in" id="tabs-demo3-area1" aria-labelledby="tabs-demo3-area1">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <div class="col-md-8">
                                    <input type="hidden" name="product_id" >
                                </div>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <label for="text2" class="control-label col-md-12">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-text" id="validate_firstname" name="product_name" required>
                                    <span class="bar"></span>
                                 </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Product Category</label>
                                <div class="col-md-8">
                                    <select class="form-control chzn-select-deselect" tabindex="7" name="cat_id">
                                    <option>Category Name</option>
                                        <?php 
                                             foreach($all_cat_info as $val) { ?>
                                        <option value="<?php echo $val->cat_id;?>"> <?php echo $val->category_name; ?></option>
                                        <?php }?>      
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <label for="text2" class="control-label col-md-12">Product Price</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-text" id="validate_firstname" name="product_price" required>
                                    <span class="bar"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Mamuficture Name</label>
                                <div class="col-md-8">
                                    <select class="form-control chzn-select-deselect" tabindex="7" name="manufacture_id">
                                    <option> Manufacture name </option>
                                        <?php 
                                             foreach($all_manu_info as $val) { ?>
                                        <option value="<?php echo $val->manufacture_id;?>"> <?php echo $val->manufacture_name; ?></option>
                                        <?php }?>      
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <label for="text2" class="control-label col-md-12">Product Model </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-text" id="validate_firstname" name="product_code" required>
                                    <span class="bar"></span>
                                </div>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <label for="text2" class="control-label col-md-12">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file"" class="form-control form-text" id="validate_firstname" name="product_img" required>
                                    <span class="bar"></span>
                                </div>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <label for="text2" class="control-label col-md-12">Product Quantity</label>
                                    <div class="col-md-8">
                                    <input type="text" class=" form-control form-text" id="validate_firstname" name="product_quantity" required>
                                    <span class="bar"></span>
                                </div>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <label for="text2" class="control-label col-md-12">Product Re-Order</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-text" id="validate_firstname" name="product_reorder" required>
                                    <span class="bar"></span>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="limiter" class="control-label col-md-12">Product Short Desctiption</label>
                                <div class="col-md-10">
                                    <textarea  class="form-text form-control" id="validate_lastname" name="product_short_desc" rows="4" required></textarea>
                                       <span class="bar"></span>
                                     <label></label>
                                </div>
                             </div>
                             <div class="form-group" >
                                <label for="limiter" class="control-label col-md-12">Product Jong Desctiption</label>
                                <div class="col-md-10">
                                    <textarea  class="form-text form-control" id="validate_lastname" name="product_long_desc" rows="5" required></textarea>
                                       <span class="bar"></span>
                                     <label></label>
                                </div>
                             </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input class="uniform" type="radio" name="publication_status" value="1">Publish
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="uniform" type="radio" name="publication_status" value="0">UnPublish
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-demo3-area2" aria-labelledby="tabs-demo3-area2">
                        <div id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                            <div id="drop">
                                Multiple Image

                                <a>Add More</a>
                                <input type="file" name="product_image[]" multiple />
                            </div>

                            <ul>
                                <!-- The file uploads will be shown here -->
                            </ul>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-demo3-area3" aria-labelledby="tabs-demo3-area3">
                       <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <label for="text2" class="control-label col-md-12">Product Spcial price</label>
                            <div class="col-md-8">
                            <input type="text" class=" form-control form-text" name="product_spcial_price">
                            </div>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                             <label for="text2" class="control-label col-md-12">Start Date: </label>
                            <div class="col-md-8">
                            <input type="text" name="start_date" id="datepicker">
                            </div>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                             <label for="text2" class="control-label col-md-12">End Date: </label>
                            <div class="col-md-8">
                            <input type="text" name="end_date" id="enddate">
                            </div>
                        </div>
                        <div class="col-md-12">
                              <div class="form-group form-animate-checkbox">
                                  
                              </div>
                              <input class="submit btn btn-danger" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div> 
                 
            </form>
        </div>
    </div>
</div>
