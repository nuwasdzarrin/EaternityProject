<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eaternity Admin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="<?php echo base_url();?>/assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?php echo base_url();?>/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Eaternity</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="http://localhost/codeigniter/index.php/logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?php echo base_url();?>/assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Nanda Brillianto
                            <br />
                                <small>Status: Online </small>
                            </div>
                        </div>

                    </li>
                    <li>
                        <a href="http://localhost/eaternity/index.php/admin1/c_admin" class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                   
                    <li>
                                <a href="http://localhost/eaternity/index.php/admin1/c_admin"><i class="fa fa-desktop "></i>Tampilkan Rumah Makan </a>
                            </li>
                             <li>
                                <a href="http://localhost/eaternity/index.php/admin1/c_admin/addpage"><i class="fa fa-code "></i>Tambah Rumah Makan</a>
                            </li>
                    
                    
                </ul>

            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <?php echo $contents;?>

    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>/assets/js/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>/assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>/assets/js/custom.js"></script>
    


</body>
</html>
