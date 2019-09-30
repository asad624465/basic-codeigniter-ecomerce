
<div class="outer">
  <div class="inner bg-light lter">
                            <!--Begin Datatables-->
<div class="row">
  <div class="col-lg-12">
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
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Dynamic Table</h5>
            </header>
            <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
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
                     foreach($cat_info as $val){ 
                            $i = $i+1; ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $val->category_name;?></td>
                            <td><?php 
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
    </div>
</div>
<!-- /.row -->
<!--End Datatables-->



<div class="row">
    <!-- .col-lg-6 -->
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Default styles</h5>
                <div class="toolbar">
		                <div class="btn-group">
                    <a href="#defaultTable" data-toggle="collapse" class="btn btn-sm btn-default minimize-box">
                        <i class="fa fa-angle-up"></i>
                    </a>
                    <a class="btn btn-danger btn-sm close-box"><i class="fa fa-times"></i></a>
                  </div>
                </div>
            </header>
            <div id="defaultTable" class="body collapse in">
                <table class="table responsive-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                        </tr>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->

    <!-- .col-lg-6 -->
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Table Striped</h5>
                <div class="toolbar">
                    <div class="btn-group">
                        <a href="#stripedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                            <i class="fa fa-angle-up"></i>
                        </a>
                        <a class="btn btn-danger btn-sm close-box"><i class="fa fa-times"></i></a>
                    </div>


                </div>
            </header>
            <div id="stripedTable" class="body collapse in">
                <table class="table table-striped responsive-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->
</div>


<div class="row">
    <!-- .col-lg-6 -->
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Table Bordered</h5>
                <div class="toolbar">
                    <div class="btn-group">
                        <a href="#borderedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                            <i class="fa fa-angle-up"></i>
                        </a>
                        <a class="btn btn-danger btn-sm close-box"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </header>
            <div id="borderedTable" class="body collapse in">
                <table class="table table-bordered responsive-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                        </tr>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->

    <!-- .col-lg-6 -->
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Table Condensed</h5>
                <div class="toolbar">
                    <div class="btn-group">
                        <a href="#condensedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                            <i class="fa fa-angle-up"></i>
                        </a>
                        <a class="btn btn-danger btn-sm close-box"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </header>
            <div id="condensedTable" class="body collapse in">
                <table class="table table-condensed responsive-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                        </tr>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->
</div>

<div class="row">
    <!-- .col-lg-6 -->
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Optional row classes</h5>
                <div class="toolbar">
                    <div class="btn-group">
                        <a href="#optionalTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                            <i class="fa fa-angle-up"></i>
                        </a>
                        <a class="btn btn-danger btn-sm close-box"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </header>
            <div id="optionalTable" class="body collapse in">
                <table class="table responsive-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                        </tr>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <
    </div>
    <!-- /.col-lg-6 -->
</div>

                        </div>
                        <!-- /.inner -->
                    </div>
                