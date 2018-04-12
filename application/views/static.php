<!DOCTYPE html>
<html lang="en">

  <head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsf/Eaternitycss.css">
  <title>Eaternity</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>/assetsf/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>/assetsf/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsf/profil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
<nav style="background-color: #3f3f3f" style="opacity: 0.4" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a style="color:white" class="navbar-brand" href="http://localhost/eaternity">
                      <img src="<?php echo base_url();?>/assetsf/logo.png" width="90px" height="40px" style="margin-top: -7px; margin-left: -20px;">
                      </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">
            <li><a style="color:black" href="http://localhost/eaternity"><img src="<?php echo base_url();?>/assetsf/home.png" width="20x" height="20px"> </a></li>
          <li><a style="color:white" href="#rek"><img src="<?php echo base_url();?>/assetsf/about.png" width="25x" height="25px"></a></li>
            <li><a style="color:white" href="http://localhost/eaternity/index.php/detail/faq"><img src="<?php echo base_url();?>/assetsf/question.png" width="25x" height="25px"></a></li>
                    </ul>

                    <form class="navbar-form navbar-right" role="form" method="post" action="http://localhost/eaternity/index.php/detail/search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Masukkan Harga (e.g: 1000)" name="pencarian">
      </div>
      <button type="submit" class="button buttoncari">CARI</button>
    </form>
                </div>
            </div>
        </nav>

          <?php echo $contents;?>

        <div style="background-color: #353535; margin-top: 80px" class="container-fluid ft">
          <div class="row">
            <div style="margin-top: 10px; margin-right:30px" class="col-xs-2">
                  <h4 style="color: #ffffff">Tentang Eaternity</h4>
                  <h6 style="color: #edeaea; margin-top: 20px">Sekilas Eaternity</h6>
                  <h6 style="color: #edeaea">Kenapa Eaternity</h6>

            </div>

             <div style="margin-top: 10px;" class="col-xs-2">
                  <h4 style="color: #ffffff;">Insight</h4>
                  <h6 style="color: #edeaea; margin-top: 20px">Ngobrol Makananan</h6>
                  <h6 style="color: #edeaea">Tips Makanan</h6>
            </div>
            </div>

            <hr style="margin-top: 40px;">

            <div class="row">
              <div class="col-xs-12 text-center">
                <h5 style="color:#b6b6ba; margin-top: -10px;"> Eaternity 2017 </h5>
              </div>
            </div>
        </div>
  </body>
