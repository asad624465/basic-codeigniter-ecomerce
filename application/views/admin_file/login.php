<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/assets/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<?php echo base_url();?>source/asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url();?>source/assets/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form action="<?php echo base_url();?>Admin_login/login_auth" class="form-signin" method="post">
          <div class="panel periodic-login">
              <span class="atomic-number">28</span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Mi</h1>
                  <p class="atomic-mass">
                    <?php echo date('d/m/Y');?>
                    </p>
                  <p class="element-name" style="color:green">
                     <?php $msg = $this->session->userdata('message');
                      if( $msg){
                        echo  $msg;
                        $this->session->unset_userdata('message');
                      }?>
                  </p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="admin_email" class="form-text" required>
                    <span class="bar"></span>
                    <label>Email Address</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="admin_password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <input type="submit" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="reg.html">| Signup</a>
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?php echo base_url();?>source/asset/js/jquery.min.js"></script>
      <script src="<?php echo base_url();?>source/<?php echo base_url();?>source/<?php echo base_url();?>source/asset/js/jquery.ui.min.js"></script>
      <script src="<?php echo base_url();?>source/<?php echo base_url();?>source/asset/js/bootstrap.min.js"></script>

      <script src="<?php echo base_url();?>source/asset/js/plugins/moment.min.js"></script>
      <script src="<?php echo base_url();?>source/asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="<?php echo base_url();?>source/asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>