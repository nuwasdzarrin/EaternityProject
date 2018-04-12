<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Eaternity Admin</h1>
                        <h1 class="page-subhead-line">Data Rumah Makan</h1>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            eaternity
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Rumah Makan</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $no=1; 
                                        foreach ($blog->result() as $key) { ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><img src="<?php echo base_url('assets/uploads/'); echo $key->gambar;?>" alt="thumb1" style="width: 80px; height: 80px;"></td>
                                            <td><?php echo $key->nama;?></td>
                                            <td><?php echo $key->alamat;?></td>
                                            <td><?php echo $key->telp;?></td>
                                            <td><a href="<?php echo base_url('index.php/admin1/c_admin/editpage/'.$key->id);?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>Edit</a>
                                            <a href="<?php echo base_url('index.php/admin1/c_admin/seeproduk/'.$key->id);?>" class="btn btn-success"><i class="glyphicon glyphicon-home"></i>Produk</a>
                                            <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                    </div>
                </div>

                <!-- /. ROW  -->
                
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->