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
         <form class="cmxform" id="signupForm" action="<?php echo base_url();?>Manufac_manage/save_manufature" method="post">
        <div class="col-md-12">
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" id="validate_firstname" name="manufacture_name" required>
                <span class="bar"></span>
                <label>Manuficture Name</label>


            </div>
        </div>
        <div class="form-group" >
                <label for="limiter" class="control-label col-md-12">Manuficture Desctiption</label>
                <div class="col-md-10">
                   <textarea  class="form-text form-control" id="validate_lastname" name="manufacture_description" required></textarea>
                   <span class="bar"></span>
                   <label></label>
                </div>
         </div>
        </div>
            <div class="col-md-12">
                <div class="checkbox">
                    <label>
                        <input class="uniform" type="radio" name="manufacture_status" id="validate_agree" value="1">Publish
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input class="uniform" type="radio" name="manufacture_status" value="0">UnPublish
                    </label>
                </div>
                <input class="submit btn btn-danger" type="submit" value="Submit">
            </div>
            </form>
        </div>
    </div>
</div>