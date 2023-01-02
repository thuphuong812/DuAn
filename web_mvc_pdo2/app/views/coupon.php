                <!--breadcrumbs area start-->
                <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                        <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Mã giảm giá</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <div class="srrvices_gallery">
                                <div class="row">
                                    <?php
                                    foreach($coupon as $key=>$value){

                                    
                                    ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_services">
                                                <div class="services_thumb">
                                                <img src="<?php echo BASE_URL ?>public/uploads/coupon/<?php echo $value['coupon_image'] ?>" width="320px" height="240px">
                                                </div>
                                                <div class="services_content">
                                                   <h3><?php echo $value['coupon_name'] ?></h3>
                                                   <p><b>Mã giảm giá:  <?php echo $value['coupon_code'] ?></b></p>

                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                        ?>
                                       
                                    </div>
                           </div>


                    </div>
                    <!--pos page inner end-->
                </div>
            </div>