<div class="container">
    <!-- === END HEADER === -->
    <!-- === BEGIN CONTENT === -->
    <div class="row margin-vert-30">
                            <!-- Main Column -->
                            <div class="col-md-9">
                                <!-- Blog Post -->
                                <?php foreach ($blog->result() as $key) { ?>
                                <div class="blog-post">
                                    <!-- Blog Item Header -->
                                    <div class="blog-item-header">
                                        <!-- Date -->
                                        <div class="blog-post-date pull-left">
                                            <span class="day">14</span>
                                            <span class="month">Dec</span>
                                        </div>
                                        <!-- End Date -->
                                        <!-- Title -->
                                        <h2>
                                            <a href="<?php echo base_url('index.php/blog/readmore/'.$key->id);?>">
                                                <?php echo $key->judul;?></a>
                                        </h2>
                                        <!-- End Title -->
                                        <div class="blog-post-details">
                                            <!-- Author Name -->
                                            <div class="blog-post-details-item blog-post-details-item-left user-icon">
                                                <i class="fa fa-user"></i>
                                                <a href="#"><?php echo $key->penulis;?></a>
                                            </div>
                                            <!-- End Author Name -->
                                            <!-- Tags -->
                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags tags-icon">
                                                <i class="fa fa-tag"></i>
                                                <a href="#">HTML</a>,
                                                <a href="#">CSS</a>,
                                                <a href="#">Grunt</a>
                                            </div>
                                            <!-- End Tags -->
                                            <!-- # of Comments -->
                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last comments-icon">
                                                <a href="">
                                                    <i class="fa fa-comments"></i>
                                                    3 Comments
                                                </a>
                                            </div>
                                            <!-- End # of Comments -->
                                        </div>
                                    </div>
                                    <!-- End Blog Item Header -->
                                    <!-- Blog Item Body -->
                                    <div class="blog">
                                        <div class="clearfix"></div>
                                        <div class="blog-post-body row margin-top-15">
                                            <div class="col-md-5">
                                                <img class="pull-left" src="<?php echo base_url('assets/uploads/'); echo $key->gambar;?>" alt="thumb1">
                                            </div>
                                            <div class="col-md-7">
                                                <p><?php echo substr($key->isi, 0,500);?>......</p>
                                            </div>
                                        </div>
                                        <div class="blog-item-footer">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <hr>
                                                </div>
                                                <div class="col-md-2">
                                                    <!-- Read More -->
                                                    <div class="blog-post-details-item blog-post-details-item-right pull-right">
                                                        <a href="<?php echo base_url('index.php/blog/readmore/'.$key->id);?>" class="btn btn-primary">
                                                            Read More
                                                            <i class="icon-chevron-right readmore-icon"></i>
                                                        </a>
                                                    </div>
                                                    <!-- End Read More -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Blog Item Body -->
                                </div>
                                <?php } ?>
                                <!-- End Blog Item -->
                               
                                <!-- Pagination -->
                                <ul class="pagination">
                                    <li>
                                        <a href="#">&laquo;</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="disabled">
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">&raquo;</a>
                                    </li>
                                </ul>
                                <!-- End Pagination -->
                            </div>
                            <!-- End Main Column -->
                            <!-- Side Column -->
                            <div class="col-md-3 margin-top-30">
                                <!-- Blog Tags -->
                                <div class="blog-tags">
                                    <h3>Tags</h3>
                                    <ul class="blog-tags">
                                        <li>
                                            <a href="#" class="blog-tag">HTML</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">CSS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">JavaScript</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">jQuery</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">PHP</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">Ruby</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">CoffeeScript</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">Grunt</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">Bootstrap</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">HTML5</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Blog Tags -->
                                <!-- Recent Posts -->
                                <div class="recent-posts">
                                    <h3>Recent Posts</h3>
                                    <ul class="posts-list margin-top-10">
                                        <li>
                                            <div class="recent-post">
                                                <a href="">
                                                    <img class="pull-left" src="<?php echo base_url();?>assetsvirtuoso/img/blog/thumbs/thumb1.jpg" alt="thumb1">
                                                </a>
                                                <a href="#" class="posts-list-title">Sidebar post example</a>
                                                <br>
                                                <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="recent-post">
                                                <a href="">
                                                    <img class="pull-left" src="<?php echo base_url();?>assetsvirtuoso/img/blog/thumbs/thumb2.jpg" alt="thumb2">
                                                </a>
                                                <a href="#" class="posts-list-title">Sidebar post example</a>
                                                <br>
                                                <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="recent-post">
                                                <a href="">
                                                    <img class="pull-left" src="<?php echo base_url();?>assetsvirtuoso/img/blog/thumbs/thumb3.jpg" alt="thumb3">
                                                </a>
                                                <a href="#" class="posts-list-title">Sidebar post example</a>
                                                <br>
                                                <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="recent-post">
                                                <a href="">
                                                    <img class="pull-left" src="<?php echo base_url();?>assetsvirtuoso/img/blog/thumbs/thumb4.jpg" alt="thumb4">
                                                </a>
                                                <a href="#" class="posts-list-title">Sidebar post example</a>
                                                <br>
                                                <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Recent Posts -->
                            </div>
                            <!-- End Side Column -->
    </div>
    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->
</div>