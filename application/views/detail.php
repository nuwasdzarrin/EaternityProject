 <script src="bootstrap-3.3.6-dist/jquery-1.12.2.min.js"></script>
 <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

 <div class="container-fluid">
 <div class="row">
 	<div class="col-lg-12 text-center">
			  		<img class="headerfoto" src="<?php echo base_url();?>/assetsf/headerabu.jpg">
			  </div>
			</div>
			<?php foreach ($refer->result() as $mk) { ?>
			<div class="row">
 					<div class="col-lg-12 text-center">
			  		<img class="profilfoto" src="<?php echo base_url();?>/assets/uploads/<?php echo $mk->gambar; ?>">
			  </div>
			</div>

			<div class="row">
 					<div class="col-lg-12 text-center">
 					<h3><?php echo $mk->nama; ?></h3>
			  </div>
			</div>

			<div class="row">
 					<div class="col-lg-12 text-center">
 						
 					<h5 class="teksalamat"> <img class="pinfoto" src="<?php echo base_url();?>/assetsf/pin.png" width="20px" height="20px;" align="middle"><?php echo $mk->alamat; ?></h5>
			  </div>
			</div>
			

			<div class="row">
				<div class="col-lg-12 text-center">
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
			  </div>
			</div>
			<?php } ?>
		</div>

				<div class="container">
					<div class="row">
						<?php foreach ($blog->result() as $key) { ?>
						<div class="col-xs-4 text-center">
		          <div class="thumbnail" style="width: 280px; height: 350px;">

		            <a  href="#"><img class="fotomakanan" src="<?php echo base_url();?>/assets/produk/<?php echo $key->gambarp; ?>" style="width: 250px; height: 230px;" alt=""/></a>
		            <div style="text-align: center" class="caption">
		            <h3><?php echo $key->namaproduk; ?></h3>
		            <h4 class="descharga" style="color: green">Rp <?php echo $key->harga; ?></h4>
		            <div style="clear: left;"></div>
		            </div>
		          </div>
		           
				</div>
				<?php } ?>		
		        </div>
				</div>
