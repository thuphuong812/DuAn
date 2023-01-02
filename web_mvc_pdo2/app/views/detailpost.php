<?php
$name = '';
foreach ($detail_post as $key => $value) {
    $name_post = $value['title_post'];
    $name_category_post = $value['title_category_post'];
    $id_cate = $value['id_category_post'];
}
?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><a href="<?php echo BASE_URL ?>tintuc/danhmuc/<?php echo $id_cate ?>"><?php echo $name_category_post ?></a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><?php echo $name_post ?></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    
                </ul>

            </div>
        </div>
    </div>
</div>
                        <!--breadcrumbs area end-->
                        
                       <!--blog area start-->
                        <div class="main_blog_area blog_details">
                            <div class="row">

                            <?php
                                        foreach ($detail_post as $key => $detail) {


                                        ?>
                                    <div class="col-lg-9 col-md-12">
                                        <div class="blog_details_left">
                                            <div class="blog_gallery">   
                                                <div class="blog_header">
                                                <span>
                                <a href="<?php echo BASE_URL ?>tintuc/danhmuc/<?php echo $detail['id_category_post'] ?>"><?php echo $detail['title_category_post'] ?></a>
                            </span>
                                                    <h2><a href="#"><?php echo $detail['title_post'] ?></a></h2>
                                                    <div class="blog__post">
                                                        <ul>
                                                            <li class="post_author">Đăng bởi : Sally</li>
                                                            <?php
                                                            $date=$detail['created_at'];
                                                            ?>
                                                            <li class="post_date"> <?php echo date('d/m/Y',strtotime($date)); ?>	</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="blog_active owl-carousel">
                                                   <div class="blog_thumb blog__hover">
                                                   <a href=""><img src="<?php echo BASE_URL ?>public\uploads\post\<?php echo $detail['image_post'] ?>" alt="" width="200px" height="450px"></a>
                                                    </div>
                                                   
                                                </div>   

                                                <div class="blog_entry_content">
                                                <p><?php echo $detail['content_post'] ?></p>
                                                </div>
                                             
                                                <div class="wishlist-share">
                                           
                                                <ul>
                                                <li> <?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                           ?>
                           <div class="fb-share-button" data-href="<?php echo $actual_link ?>" data-layout="button_count" data-size="small"><a target="_blank" href="<?php echo $actual_link ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div></li>    
                                                </ul>      
                                            </div>
                                            </div> 
                                             <!--services img area-->
                                             
                                            <div class="comments_area">
                                                <div class="comments__title">
                                                    <h3>Để lại bình luận </h3>
                                                </div>
                                                <div class="comments__notes">
                                                    <p>Email của bản sẽ không được chia sẻ</p>
                                                </div>
                                                 <div class="product_review_form blog_form">
                                                 <?php
                                        if (!empty($_GET['msg'])) {
                                            $msg = unserialize(urldecode($_GET['msg']));
                                            foreach ($msg as $key => $value) {
                                                // echo '<span style="color:blue;font-weight:bold">' . $value . '</span>';
                                                echo "<script type='text/javascript'>alert('$value');</script>";
                                            }
                                        }
                                        ?>
                                                    <form action="<?php echo BASE_URL ?>tintuc/insert_comment" method="POST" autocomplete="off">
                                             <input type="hidden" name="id_post_comment" value="<?php echo $detail['id_post'] ?>">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="review_comment">Bình luận </label>
                                                                <textarea name="comment" id="review_comment" required></textarea>
                                                            </div> 
                                                            <div class="col-lg-6 col-md-4">
                                                                <label for="author">Họ và tên</label>
                                                                <input id="author" type="text" name="name" required>

                                                            </div> 
                                                            <div class="col-lg-6 col-md-4">
                                                                <label for="email">Email </label>
                                                                <input id="email" type="text" name="email" required>
                                                            </div>
                                                            
                                                        </div>
                                                        <button type="submit" name="binhluan">Bình luận</button>
                                                     </form>   
                                                </div> 
                                            </div>     
                                            

                                        </div>
                                    </div>

                                    <?php
                                        }


                                        ?>


                                    <div class="col-lg-3 col-md-8 offset-md-2 offset-lg-0">
                                    <?php
                                        foreach ($related as $key => $relate) {


                                        ?>
                                       <div class="blog_details_right">
                                            <!-- <div class="blog_widget search_widget mb-30">
                                               <h3>Search</h3>
                                               <form action="#">
                                                   <input placeholder="search.." type="text">
                                                   <button type="submit"><i class="fa fa-search"></i></button>
                                               </form>
                                            </div>
                                            -->
                                            
                                            <div class="blog_widget widget_recent  mb-30">
                                               <h3>Bài viết liên quan</h3> 
                                                <div class="widget_recent_inner">   
                                                    <div class="single_posts">
                                                        <div class="posts_thumb">
                                                            <a href="<?php echo BASE_URL ?>tintuc/detail_post/<?php echo $relate['id_post']?>"><img src="<?php echo BASE_URL ?>public\uploads\post\<?php echo $relate['image_post'] ?>" alt=""></a>
                                                        </div>
                                                        <div class="post_content">
                                                            <span>
                                                                <a class="tweet_author" href="<?php echo BASE_URL ?>tintuc/detail_post/<?php echo $relate['id_post']?>"><?php echo $relate['title_post'] ?> </a>
                                                            </span>
                                                            <a href="#"> <?php echo date('d/m/Y',strtotime($relate['created_at'])); ?> </a>
                                                        </div>
                                                    </div>
                                                           
                                            </div>
                                            
                                       </div>
                                       <?php
                                    }
                                    ?>
                                   
                                       <div class="blog_widget widget_recent  mb-30">
                                               <h3>Comments</h3> 
                                                <div class="widget_recent_inner">   
                                                
                                                <?php
                                                $i=0;
                                         foreach ($comment as $key => $com) {
                                            $i++;

                                        ?>
                                           <div class="blog_entry_meta">
                                                   <ul>
                                                       <li><a href="#"><?php echo $i?> Bình luận</a></li>
                                                       
                                                   </ul>
                                                </div>
                                                    <div class="single_posts">
                                                        <div class="posts_thumb">
                                                            <a href="#"><img src="<?php echo BASE_URL?>\public\frontend\assets\img\blog\blog12.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post_content">
                                                        <a href="#"> <?php echo $com['name_comment']?> </a>
                                                            <span>
                                                                <a class="tweet_author" href="#"><?php echo $com['comment']?> </a>
                                                            </span>
                                                            <a href="#"><?php echo date('d/m/Y',strtotime($com['createdDate'])); ?></a>
                                                        </div>
                                                    </div>
                                                    <?php
                                            }?>
                                                   
                                                </div>         
                                            </div>
                                            
                                    </div>
                                   
                                </div>
                        </div>
                        <!--blog area end-->
 
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>