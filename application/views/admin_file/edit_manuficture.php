<div class="outer">
    <div class="inner bg-light lter">
        <div class="col-lg-12">
            <h2>Edit Manuficture</h2>
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
         <form class="cmxform" id="signupForm" action="<?php echo base_url();?>Manufac_manage/update_manufature" method="post">
        <div class="col-md-12">
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" id="validate_firstname" value="<?php echo $select_manu_id->manufacture_name ;?>" name="manufacture_name" required>
                <span class="bar"></span>
                <label>Manuficture Name</label>
            </div>
             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="hidden" value="<?php echo $select_manu_id->manufacture_id ;?>" name="manufacture_id">
            </div>
        </div>
        <div class="form-group" >
                <label for="limiter" class="control-label col-md-12">Manuficture Desctiption</label>
                <div class="col-md-10">
                   <textarea  class="form-text form-control" id="validate_lastname" name="manufacture_description" required><?php echo $select_manu_id->manufacture_description;?></textarea>
                   <span class="bar"></span>
                   <label></label>
                </div>
         </div>
        </div>
            <div class="col-md-12">
                <div class="checkbox">
                    <?php $manu = $select_manu_id->manufacture_status;
                        if($manu == '1'){ ?>
                        <label>
                            <input class="uniform" type="radio" name="manufacture_status" id="validate_agree" value="1" checked>Publish
                        </label>
                        Published
                        <?php }else { ?>
                        <label>
                            <input class="uniform" type="radio" name="manufacture_status" id="validate_agree" value="1">Publish
                        </label>
                    <?php }?>
                </div>
                <div class="checkbox">
                    <?php $manu = $select_manu_id->manufacture_status;
                        if($manu == '0'){ ?>
                        <label>
                            <input class="uniform" type="radio" name="manufacture_status" id="validate_agree" value="0" checked>UnPublish
                        </label>
                        <?php }else { ?>
                        <label>
                            <input class="uniform" type="radio" name="manufacture_status" id="validate_agree" value="0">UnPublish
                        </label>
                    <?php }?>
                </div>
                <input class="submit btn btn-danger" type="submit" value="Submit">
            </div>
            </form>
        </div>
    </div>
</div>