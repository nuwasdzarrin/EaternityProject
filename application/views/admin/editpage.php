<div id="page-wrapper">
    <div class="row">
        <div class="col-md-4">
            <h3 style="color: black; font-weight: bold;">Update Post</h3>
        </div>
    </div>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-9">
                <?php foreach ($blog as $key) { ?>
                <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url('index.php/admin1/c_admin/addpage')?>">
                    
                    <div class="form-group">
                        <label>Judul:</label>
                        <input class="form-control" type="text" name="judul" value="<?php echo $key->judul?>">
                        
                    </div>
                    <div class="form-group">
                        <label>Content:</label>
                        <textarea rows="25" id="post_content" name="content" class="form-control ckeditor" value="<?php echo $key->isi?>"></textarea>
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
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="gambar" value="<?php echo $key->gambar?>"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Kategori
                    </div>
                <div class="panel-body">
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="<?php echo $key->kategori?>" name="kategori"><?php echo $key->kategori?>
                        </label>
                    </div>
                </div>
            </div>
            </div>
            <?php } ?>
            <button type="submit" class="btn btn-info">Update </button>
                </form>
                    
       
</div> 
