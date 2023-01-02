                <!--breadcrumbs area start-->
                <div class="breadcrumbs_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_content">
                                <ul>
                                    <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li>Liên hệ</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!--breadcrumbs area end-->

                <!--contact area start-->
                <div class="contact_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="contact_message">
                                <h3>Liên hệ với chúng tôi</h3>
                                <form name="FormContact" method="POST" autocomplete="off" action="<?php echo BASE_URL ?>contact/contact_me">
                                    
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <label>Họ và tên <span>*</span></label>
                                            <input type="text" name="name" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Địa chỉ <span>*</span></label>
                                            <input type="text" name="diachi" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Số điện thoại <span>*</span></label>
                                            <input type="text" name="sodienthoai"required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Email <span>*</span></label>
                                            <input type="email" name="email" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="order-notes">
                                                <label for="order_note">Tin nhắn<span> *</span></label>
                                                <textarea id="order_note" name="noidung" placeholder="Vui lòng để lại tin nhắn" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <?php
        							if(!empty($_GET['msg'])){
        								$msg = unserialize(urldecode($_GET['msg']));
        								foreach ($msg as $key => $value){
        									echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
        								}
        							}
        							?> 
                                    </div>
                                        <div class="col-lg-4 login_submit">
                                            <br>
                                            <button type="submit" name="frmSubmit" id="frmSubmit" >Gửi liên hệ</button>
                                        </div>
                                    
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        <?php
                        foreach ($contact as $key => $value) {
                        ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="contact_message contact_info">
                                    <h3>Thông tin của chúng tôi</h3>
                                    <p><?php echo $value['title_contact'] ?></p>
                                    <ul>
                                        <li><i class="fa fa-fax"></i> <?php echo $value['address_contact'] ?></li>
                                        <li><i class="fa fa-phone"></i> <a href="#"><?php echo $value['phone_contact'] ?></a></li>
                                        <li><i class="fa fa-envelope-o"></i><?php echo $value['email_contact'] ?></li>
                                    </ul>

                                    <p><?php echo $value['working_time_contact'] ?></p>
                                </div>
                            </div>
                        <?php
                        } ?>

                    </div>
                </div>

                <!--contact area end-->

                <!--contact map start-->
                <?php
                foreach ($contact as $key => $value) {
                ?>
                    <div class="contact_map">
                        <div class="row">
                            <div class="col-12">
                            <?php echo $value['map_contact'] ?>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
                <!--contact map end-->


                </div>
                <!--pos page inner end-->
                </div>
                </div>