<?php
$name = '';
foreach ($detail_product as $key => $value) {
    $name_product = $value['title_product'];
    $name_category_product = $value['title_category_product'];
    $id_cate = $value['id_category_product'];
}
?>

<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><a href="<?php echo BASE_URL ?>sanpham/danhmuc/<?php echo $id_cate ?>"><?php echo $name_category_product ?></a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><?php echo $name_product ?></li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<?php

foreach ($detail_product as $key => $detail) {


?>

    <!--product wrapper start-->
    <div class="product_details">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="product_tab fix">
                    <div class="product_tab_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#p_tab1" role="tab" aria-controls="p_tab1" aria-selected="false"><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $detail['image_product'] ?>" alt=""></a>
                            </li>


                        </ul>
                    </div>
                    <div class="tab-content produc_tab_c">
                        <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                            <div class="modal_img">
                                <a href="#"><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $detail['image_product'] ?>" alt=""></a>
                             
                                <div class="view_img">
                                    <a class="large_view" href="<?php echo BASE_URL ?>public/uploads/product/<?php echo $detail['image_product'] ?>"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="product_d_right">
                    <h1><?php echo $name_product ?></h1>

                    <div class="product_desc">
                        <?php echo $detail['desc_product'] ?>
                    </div>

                    <div class="content_price mb-15">
                    <?php
											if($detail['discount']==0)
											{?>
												<span ><?php echo number_format($detail['price_product'], 0, ',', '.') . ' VNĐ' ?></span>
											<?php
											}
											?>
												<?php
											if($detail['discount']==1)
											{?>
												<span style="font-size: 15px;">Giá gốc: <del><?php echo number_format($detail['price_product'], 0, ',', '.') . ' VNĐ' ?></del></span><br>
												<span  style="color: red;">Giá khuyến mãi: <?php echo number_format($detail['price_product']-($detail['price_product']/100*$detail['price_discount']),0,',','.').' VNĐ'; ?></span>
											<?php
											}
											?>
												<?php
											if($detail['discount']==2)
											{?>
												<span style="font-size: 15px;" >Giá gốc:<del><?php echo number_format($detail['price_product'], 0, ',', '.') . ' VNĐ' ?></del></span><br>
												<span  style="color: red;">Giá khuyến mãi: <?php echo number_format($detail['price_product']-$detail['price_discount'], 0, ',', '.') . ' VNĐ' ?></span>
											<?php
											}
											?>
                        <!-- <span class="old-price">$130.00</span> -->
                    </div>
                    <div class="box_quantity mb-20">
                        <form action="<?php echo BASE_URL ?>cart/addtocart" method="post">



                            <input type="hidden" value="<?php echo $detail['id_product'] ?>" name="product_id">
                            <input type="hidden" value="<?php echo $detail['title_product'] ?>" name="product_title">
                            <input type="hidden" value="<?php echo $detail['image_product'] ?>" name="product_image">
                            <?php
											if($detail['discount']==0)
											{?>
												<input type="hidden" value="<?php echo $detail['price_product'] ?>" name="product_price">
											<?php
											}
											?>
												<?php
											if($detail['discount']==1)
											{?>
												<input type="hidden" value="<?php echo $detail['price_product']-($detail['price_product']/100*$detail['price_discount']) ?>" name="product_price">
												
											<?php
											}
											?>
												<?php
											if($detail['discount']==2)
											{?>
												<input type="hidden" value="<?php echo $detail['price_product']-$detail['price_discount'] ?>" name="product_price">
											<?php
											}
											?>
                            <input type="hidden" value="<?php echo $detail['quantity_product'] ?>" name="quantity_max">

                            <?php
                            if ($detail['quantity_product'] > 0) {

                            ?>
                                <label>Số lượng</label>
                                <input min="1" max="<?php echo $detail['quantity_product'] ?>" value="1" type="number" name="product_quantity">
                                <input type="hidden" value="<?php echo $detail['quantity_product'] ?>" name="quantity_max">

                                <button type="submit"><i class="fa fa-shopping-cart"></i>&nbsp; Thêm vào giỏ hàng</button>'

                                <div class="product_stock mb-20">
                                    <span>Còn hàng</span>
                                </div>

                            <?php
                            } else {
                            ?>
                                <div class="product_stock mb-20">
                                    <span>Hết hàng</span>
                                </div>
                            <?php
                            }
                            ?>

                        </form>


                    </div>



                
                    <div class="wishlist-share">

                        <ul>
                            <li> <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                    ?>
                                <div class="fb-share-button" data-href="<?php echo $actual_link ?>" data-layout="button_count" data-size="small"><a target="_blank" href="<?php echo $actual_link ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--product details end-->


    <!--product info start-->
    <div class="product_d_info">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Thông tin thêm</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Thông tin chi tiết</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <div class="product_info_content">
                                <?php echo $detail['content_product'] ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="sheet" role="tabpanel">
                            <div class="product_d_table">
                                <form action="#">
                                    <?php echo $detail['detail_product'] ?>
                                </form>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="product_info_content">
                                <h2>Đánh giá nổi bật</h2>
                            </div>
                            <?php
                            foreach ($comment as $key => $com) {


                            ?>
                                <div class="product_info_inner">
                                    <div class="product_ratting mb-10">

                                        <strong><?php echo $com['name_comment'] ?></strong>
                                        <p><?php echo date('d/m/Y', strtotime($com['createdDate'])); ?></p>
                                    </div>
                                    <div class="product_demo">

                                        <p><?php echo $com['comment'] ?></p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="product_review_form">
                                <?php
                                if (!empty($_GET['msg'])) {
                                    $msg = unserialize(urldecode($_GET['msg']));
                                    foreach ($msg as $key => $value) {
                                        // echo '<span style="color:blue;font-weight:bold">' . $value . '</span>';
                                        echo "<script type='text/javascript'>alert('$value');</script>";
                                    }
                                }
                                ?>
                                <br>
                                <form action="<?php echo BASE_URL ?>sanpham/insert_comment" method="POST" autocomplete="off">
                                    <input type="hidden" name="id_product_comment" value="<?php echo $detail['id_product'] ?>">
                                    <h2>Thêm đánh giá của bạn</h2>
                                    <p>Email của bạn sẽ không được công khai </p>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="review_comment">Nhận xét của bạn </label>
                                            <textarea name="comment" id="review_comment"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="author">Họ và tên</label>
                                            <input id="author" type="text" name="name">

                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="email">Email </label>
                                            <input id="email" type="text" name="email">
                                        </div>
                                    </div>
                                    <button type="submit">Đánh giá</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

<?php

}
?>
<!--new product area start-->
<div class="new_product_area product_page">
    <div class="row">
        <div class="col-12">
            <div class="block_title">
                <h3>SẢN PHẨM LIÊN QUAN</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="single_p_active owl-carousel">
            <?php
            foreach ($related as $key => $relate) {
        
            ?>
                <form action="<?php echo BASE_URL ?>cart/addtocart" method="post">
                    <input type="hidden" value="<?php echo $relate['id_product'] ?>" name="product_id">
                    <input type="hidden" value="<?php echo $relate['title_product'] ?>" name="product_title">
                    <input type="hidden" value="<?php echo $relate['image_product'] ?>" name="product_image">
                    <?php
											if($relate['discount']==0)
											{?>
												<input type="hidden" value="<?php echo $relate['price_product'] ?>" name="product_price">
											<?php
											}
											?>
												<?php
											if($relate['discount']==1)
											{?>
												<input type="hidden" value="<?php echo $relate['price_product']-($relate['price_product']/100*$relate['price_discount']) ?>" name="product_price">
												
											<?php
											}
											?>
												<?php
											if($relate['discount']==2)
											{?>
												<input type="hidden" value="<?php echo $relate['price_product']-$relate['price_discount'] ?>" name="product_price">
											<?php
											}
											?>
                    <input type="hidden" value="1" name="product_quantity">
                    <input type="hidden" value="<?php echo $relate['quantity_product'] ?>" name="quantity_max">
                    <div class="col-lg-3">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="<?php echo BASE_URL ?>sanpham/detail_product/<?php echo $relate['id_product'] ?>"><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $relate['image_product'] ?>" alt="" width="252px" height="367px"></a>
                                <?php
								if ($relate['product_hot'] == 0) {
								?>

									<div class="img_icone">
										<img src="<?php echo BASE_URL ?>public\frontend\assets\img\cart\span-new.png" alt="">
									</div>
								<?php
								} else {
								?>
									<div class="hot_img">
										<img src="<?php echo BASE_URL ?>public\frontend\assets\img\cart\span-hot.png" alt="">
									</div>
								<?php
								}
								?>
                               <?php
                   
                   if ($relate['quantity_product'] > 0) {
                               ?>

<div>
                                        
                                        <input type="submit" class="product_action"value="Thêm vào giỏ hàng" name="addcart">
                                          </div>
                               <?php
                               } ?>
                            </div>
                            <div class="product_content">
                            <?php
                            if ($relate['quantity_product'] > 0){
											if($relate['discount']==0)
											{?>
												<span ><?php echo number_format($relate['price_product'], 0, ',', '.') . ' VNĐ' ?></span>
											<?php
											}
											?>
												<?php
											if($relate['discount']==1)
											{?>
												<span  ><del><?php echo number_format($relate['price_product'], 0, ',', '.') . ' VNĐ' ?></del></span>
												<span  style="color: red;"> <?php echo number_format($relate['price_product']-($relate['price_product']/100*$relate['price_discount']),0,',','.').' VNĐ'; ?></span>
											<?php
											}
											?>
												<?php
											if($relate['discount']==2)
											{?>
												<span  ><del><?php echo number_format($relate['price_product'], 0, ',', '.') . ' VNĐ' ?></del></span>
												<span  style="color: red;"> <?php echo number_format($relate['price_product']-$relate['price_discount'], 0, ',', '.') . ' VNĐ' ?></span>
											<?php
											}
											?>
                                            <?php
                                            }else{
                                                
                                                ?>
                                                <span class="product_price" >Hết hàng</span>
                                                <?php
                                            }
                                                ?>



                                <h3 class="product_title"><a href="<?php echo BASE_URL ?>sanpham/detail_product/<?php echo $relate['id_product'] ?>"><?php echo $relate['title_product'] ?></a></h3>
                            </div>
                            <div class="product_info">
                                <ul>

                                    <li><a href="<?php echo BASE_URL ?>sanpham/detail_product/<?php echo $relate['id_product'] ?>">Xem thêm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!--new product area start-->
<br>

<!--new product area start-->

<!--new product area start-->

</div>
<!--pos page inner end-->
</div>
</div>