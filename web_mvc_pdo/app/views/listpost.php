    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Tất cả tin tức</li>
                        <!-- <li><i class="fa fa-angle-right"></i></li> -->
                        <!-- <li> <?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                           ?>
                           <div class="fb-share-button" data-href="<?php echo $actual_link ?>" data-layout="button_count" data-size="small"><a target="_blank" href="<?php echo $actual_link ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div></li> -->
                       

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    
    <!--blog area start-->
    <div class="blog_area">
        <div class="col-12">
            <div class="block_title">
                <h3> TẤT CẢ TIN TỨC</h3>

            </div>
           
        </div>
       

        <div class="row"> <?php
                            foreach ($list_post as $key => $post) {
                            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog">
                        <div class="blog_thumb">
                            <a href="<?php echo BASE_URL ?>tintuc/detail_post/<?php echo $post['id_post'] ?>"><img src="<?php echo BASE_URL ?>public/uploads/post/<?php echo $post['image_post'] ?>" width="320px" height="240px"></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_post">
                                <ul>
                                    <li>
                                        <a href="<?php echo BASE_URL ?>tintuc/danhmuc/<?php echo $post['id_category_post'] ?>"><?php echo $post['title_category_post'] ?></a>
                                    </li>
                                </ul>
                            </div>
                            <h3><a href="<?php echo BASE_URL ?>tintuc/detail_post/<?php echo $post['id_post'] ?>"></a><?php echo $post['title_post'] ?></h3>
                            <p><?php echo $post['desc_post'] ?></p>
                            <div class="post_footer">
                                <div class="post_meta">
                                    <ul>
                                        <li><?php echo date('d/m/Y',strtotime($post['created_at'])); ?> </li>

                                    </ul>
                                </div>
                                <div class="Read_more">
                                    <a href="<?php echo BASE_URL ?>tintuc/detail_post/<?php echo $post['id_post'] ?>">Đọc tiếp <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                            }
            ?>
        </div>

    </div>

    <!--blog area end-->

    <!--pagination style start-->
    <div class="blog_pagination">
        <div class="row">
            <div class="col-12">
                <div class="page_number">
                    <span>Pages: </span>
                    <ul>
                        <li>«</li>
                        <li class="current_number">1</li>
                        <li><a href="#">2</a></li>
                        <li>»</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--pagination style end-->

    <!--brand logo strat-->

    <!--brand logo end-->
    <br>
    <!--pos page inner end-->
    </div>
    </div>