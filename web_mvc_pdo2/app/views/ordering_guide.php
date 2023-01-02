                <!--breadcrumbs area start-->
                <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                        <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Hướng dẫn đặt hàng</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <!--contact area start-->
                        <?php
                        foreach($ordering_guide as $key=> $value){
                        ?>
                        <div class="contact_area">
                            <div class="row">
                                   <div class="col-lg-12 col-md-12">
                                       <div class="contact_message">
                                            
                                            <?php echo $value['content_ordering_guide']?>
                                        </div> 
                                   </div>
                                  
                                   
                               </div>
                        </div>
  <?php
                        }
  ?>
                       
                       


                    </div>
                    <!--pos page inner end-->
                </div>
            </div>