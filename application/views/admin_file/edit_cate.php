<div class="outer">
    <div class="inner bg-light lter">
        <div class="col-lg-12">
            <h2>Edite Category</h2>
         <form class="cmxform" id="signupForm" action="<?php echo base_url();?>Category_manage/update_category" method="post">
        <div class="col-md-12">
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" id="validate_firstname" value= "<?php echo $select_cat_id->category_name?>" name="category_name" required>
                <span class="bar"></span>
                <label>Category Name</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="hidden" value= "<?php echo $select_cat_id->cat_id?>" name="cat_id">
                <span class="bar"></span>
                <label>Category Name</label>
            </div>
        </div>
        </div>
            <div class="col-md-12">
                 <?php $val = $select_cat_id->publication_status;
                    if($val==1){?>
                <div class="checkbox">
                    <label>
                        <input class="uniform" type="radio" name="publication_status" value="1" checked>Publish
                    </label>
                </div>
                 <?php }else{ ?>
                <div class="checkbox">
                    <label>
                        <input class="uniform" type="radio" name="publication_status" value="1">Publish
                    </label>
                </div>
                 <?php }?>
                    <?php $val = $select_cat_id->publication_status;
                    if($val==1){?>
                <div class="checkbox">
                    <label>
                        <input class="uniform" type="radio" name="publication_status" value="0" checked>UnPublish
                    </label>
                </div>
                 <?php }else{ ?>
                <div class="checkbox">
                    <label>
                        <input class="uniform" type="radio" name="publication_status" value="0" checked>UnPublish
                    </label>
                </div>
                 <?php }?>
                <input class="submit btn btn-danger" type="submit" value="Submit">
            </div>
            </form>
        </div>
    </div>
</div>