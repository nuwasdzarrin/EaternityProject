<div id="page-wrapper">
    <div class="row">
        <div class="col-md-4">
            <h3 style="color: black; font-weight: bold;">Tambah Rumah Makan</h3>
        </div>
    </div>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-9">
                <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url('index.php/admin1/c_admin/addhome')?>">
                    <div class="form-group">
                        <label>Nama Rumah Makan:</label>
                        <input class="form-control" type="text" name="nama" style="width: 500px;">
                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" type="text" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telp:</label>
                        <input class="form-control" type="text" name="telp" style="width: 250px">
                    </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Gambar
                    </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url();?>/assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="gambar"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
            <button type="submit" class="btn btn-info">Simpan </button>
                </form>
                    
       
</div>