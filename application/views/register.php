 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <script type="text/javascript">
        
    function cekform(from){
        if(form.Username.value== ""){
            alert("maaf Username harus diisi");
            form.Username.focus();
            return (false);
        }
        if(form.password.value== ""){
            alert("maaf Username harus diisi");
            form.password.focus();
            return (false);
        }
        var mincar=5;
        if(form.password.value.length<mincar){
            alert("maaf password harus ebih dari 5 karakter");
            form.password.focus();
            return (false);
        }
        return(true);
    }

    </script>

</head>
<body style="background-color: #E2E2E2;">
    <div class="container" style="margin-top: -70px;">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="<?php echo base_url();?>/assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <div class="panel panel-danger">
    <div class="panel-heading">
        SINGUP FORM
    </div>
    <div class="panel-body">
        <?php echo form_open('register');?>
     <p>Nama:</p>
     <p>
     <input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
     </p>
     <p> <?php echo form_error('name'); ?> </p>
 
     <p>Username:</p>
     <p>
     <input type="text" name="username" value="<?php echo set_value('username'); ?>"/> 
     </p>
     <p> <?php echo form_error('username'); ?> </p>
 
     <p>Email:</p>
     <p>
     <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
     </p>
     <p> <?php echo form_error('email'); ?> </p>
 
     <p>Password:</p>
     <p>
     <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p>Password Confirm:</p>
     <p>
     <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
     </p>
     <p> <?php echo form_error('password_conf'); ?> </p>
 
     <p>
     <input type="submit" name="btnSubmit" value="Daftar" />
     </p>
 
     <?php echo form_close();?>
 
     <p>
    </div>
</div>
                            </div>
                           
                </div>
        </div>
    </div>

</body>
</html>




                          