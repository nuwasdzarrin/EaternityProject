<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($refer->result() as $mk) { ?>
                            <h1 class="page-head-line">Rumah Makan: <?php echo $mk->nama; ?></h1>                        
                        <?php } ?>
                        
                        <h1 class="page-subhead-line">Data Menu Makanan </h1>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Produk
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                        <?php foreach ($blog->result() as $key) { ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><img src="<?php echo base_url('assets/produk/'); echo $key->gambarp;?>" alt="thumb1" style="width: 80px; height: 80px;"></td>
                                            <td><?php echo $key->namaproduk;?></td>
                                            <td><?php echo $key->deskripsi;?></td>
                                            <td><?php echo $key->harga;?></td>
                                            <td><a href="<?php echo base_url('index.php/admin1/c_admin/editpage/'.$key->id);?>" class="btn btn-primary">
                                                            Edit
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </a>
                                            <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <a href="http://localhost/eaternity/index.php/admin1/c_admin/loadAddProduk/<?php echo $key->id ?>" class="btn btn-success"><i class="glyphicon glyphicon-home"></i>Tambah Produk</a>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
            </div>
        </div>
    </div>