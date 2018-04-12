<div class="container">
          <div class="row">  
            <div class="col-lg-12 text-center">
          <h3 class="judulhasil" style="margin-top: 130px">Your search result</h3>
          </div>
        </div>
        </div>
        		
				<div class="container">
					<div class="row">
						<?php foreach ($data->result() as $key){?>
						<div class="col-xs-4 text-center">
		          <div class="thumbnail" style="width: 300px; height: 450px">

		          <a  href="#"><img class="fotomakanan" src="<?php echo base_url();?>/assets/produk/<?php echo $key->gambarp;?>" alt="" style="width: 280px; height: 300px" /></a>
		          <div style="text-align: center" class="caption">
		           
                <h4><?php echo $key->namaproduk;?></h4>
		            <h5 class="teksalamat"> <img class="pinfoto" src="<?php echo base_url();?>/assetsf/uang.png" width="20px" height="20px;" align="middle" ;>  Rp. <?php echo $key->harga;?></h5>
		          <div style="clear: left;"></div>
              <div class="row">
        <div class="col-lg-12 text-center">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          </div>
          </div>
		            </div>
		          </div>
				</div>
				<?php } ?>
			</div>
		</div>	
		
        