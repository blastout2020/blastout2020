<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets/admin/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/bo.png">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo form_open(base_url() . 'Admin');?>
            <h1>Login Admin</h1>
            <?php
            echo validation_errors();
            echo $login_failed;
            ?>
            <div>
                <input type="text" class="form-control" placeholder="Username" name="username"  required="" />
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Password" name="password"  required="" />
            </div>
            <div>
                <input type="submit" class="btn btn-default submit" name="submit_login" value="Log In">
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <br />
            <div><?php echo form_close()?>
                <h1><i class="fa fa-paw"></i> BlastOut 2019</h1>
                <p>©2019 All Rights Reserved Balairung Klass UGM</p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>


               