  <div class="container-fluid background1">
        <h2 class="descbg1">Makan itu bikin kenyang <br>Bukan bikin pusing</h2>
</div>
</div>

      <div class="container-fluid bg1">
        <div class="row">
          <div class="col-lg-12 text-center" >
            <h2> Kenapa Eaternity?</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 text-center">
            <img class="mie" src="assetsf/noodles.png">
            <h3> Banyak Pilihan Tempat Makan</h3>
            <h5 style="color:#7f7f7f"> Kamu ga akan bingung cari tempat makan karena Eaternity mencarikan banyak pilihan!</h5>
          </div>

          <div class="col-sm-4 text-center">
            <img class="uang" src="assetsf/money.png">
             <h3> Nggak Bikin Tekor</h3>
              <h5 style="color:#7f7f7f"> Isi dompetmu akan selalu terjaga karena Eaternity akan mencarikanmu tempat makan yang murah!</h5>
          </div>

          <div class="col-sm-4 text-center">
            <img class="senang" src="assetsf/happy.png">
              <h3> Asoy!</h3>
               <h5 style="color:#7f7f7f"> Banyak pilihan tempat makan dan murah akan membuatmu enjoy dan asoy!</h5>
          </div>
        </div>
      </div>

<!--  -->

              <div class="container-fluid" id="rek">
          <div class="row">
            <div class="col-xs-12 text-center">
              <h2 style="margin-bottom: 50px; margin-top: 60px;"> Rekomendasi Untukmu!</h2>
            </div>
          </div>
          
          <div class="row">

          <?php 
          $tmp=0;
            foreach ($blog as $key) if ($tmp++ < 8) { 

            ?> 
           
      <div class="col-xs-3">
        
          <div class="thumbnail" style="width: 280px; height: 330px;">

          <a  href="product_details.html"><img src="<?php echo base_url();?>assets/uploads/<?php echo $key->gambar;?>" style="width: 250px; height: 150px;" alt="" /></a>
          <div style="text-align: center" class="caption">
            <h4><?php echo $key->nama;?></h4>

               <h6 style="text-align: center;"> <img class="pin" style="width: 20px; height: 20px" src="<?php echo base_url();?>/assetsf/pin.png"> 
            <h6 class="desc1"><?php echo $key->alamat;?></h6>
          <div style="clear: left;"></div>
            </h6>
            <a href="<?php echo base_url('index.php/detail/profil/'.$key->id);?>" class="btn btn-primary lengkap"></i>Selengkapnya</a>
           </div>
          </div>
          
        </div>
        <?php } ?>


          </div>
        </div>


        