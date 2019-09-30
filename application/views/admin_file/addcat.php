<div class="outer">
    <div class="inner bg-light lter">
        <div class="col-lg-12">
            <h2>Add New Category</h2>
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
         <form class="cmxform" id="signupForm" action="<?php echo base_url();?>Category_manage/save_category" method="post">
        <div class="col-md-12">
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" id="validate_firstname" name="validate_firstname" required>
                <span class="bar"></span>
                <label>Category Name</label>
            </div>
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
                <input class="submit btn btn-danger" type="submit" value="Submit">
            </div>
            </form>
        </div>
    </div>
</div>