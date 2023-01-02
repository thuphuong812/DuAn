            <!--breadcrumbs area start-->
            <div class="breadcrumbs_area">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li>Giỏ hàng</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs area end-->



            <!--shopping cart area start -->

            <div class="shopping_cart_area">

                <?php
                if (!empty($_GET['msg'])) {
                    $msg = unserialize(urldecode($_GET['msg']));
                    foreach ($msg as $key => $value) {
                        echo '<span style="color:blue;font-weight:bold">' . $value . '</span>';
                    }
                }
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">

                                <table>

                                    <thead>
                                        <tr>

                                            <th class="product_thumb">Hình ảnh</th>
                                            <th class="product_name">Tên sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_quantity">Số lượng</th>
                                            <th class="product_total">Tổng tiền</th>
                                            <th class="product_total"></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $total = 0;
                                        if (isset($_SESSION['shopping_cart'])) {

                                        ?>
                                            <form action="<?php echo BASE_URL ?>cart/updategiohang" method="POST">
                                                <?php

                                                foreach ($_SESSION['shopping_cart'] as $key => $values) {
                                                    $subtotal = $values['product_quantity'] * $values['product_price'];
                                                    $max = $values['max_quantity'];
                                                    $total += $subtotal;
                                                ?>
                                                    <tr>
                                                        <!-- <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i>   <i class="fa fa-edit"></i></a></td> -->
                                                        <td class="product_thumb"><a href="#"><img src="<?php echo BASE_URL ?>public\uploads\product\<?php echo $values['product_image'] ?>" alt=""></a></td>
                                                        <td class="product_name"><a href="#"><?php echo $values['product_title'] ?></a></td>
                                                        <td class="product-price"><?php echo number_format($values['product_price'], 0, ',', '.') . ' VNĐ' ?></td>
                                                        <td class="product_quantity"><input min="1" max="<?php echo $max ?>" type="number" name="qty[<?php echo $values['product_id'] ?>]" style="color: black;" value="<?php echo $values['product_quantity'] ?>"></td>
                                                        <td class="product_total"><?php echo number_format($subtotal, 0, ',', '.') . ' VNĐ' ?></td>
                                                        <td class="product_remove">

                                                            <button type="submit" style="box-shadow: none;" value="<?php echo $values['product_id'] ?>" name="delete_cart" class="btn btn-sm btn-warning"><i class="fa fa-trash-o"></i></button>

                                                            <button type="submit" style="box-shadow: none;" value="<?php echo $values['product_id'] ?>" name="update_cart" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                                        </td>

                                                    </tr>


                                                <?php
                                                }

                                                ?>
                                            </form>
                                        <?php
                                        } else {
                                        ?>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="sum_price_all">
                                                        <span class="text_price">Giỏ hàng trống</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="tr_last">
                                            <td colspan="7">
                                                <a href="<?php echo BASE_URL ?>" class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                                                <div class="clear"></div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <!-- <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code">
                                    <h3>Coupon</h3>
                                    <div class="coupon_inner">
                                        <p>Enter your coupon code if you have one.</p>
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div> -->
                <!--coupon code area end-->
                <!--Checkout page section-->
                <div class="Checkout_section"><?php
  if (isset($_SESSION['shopping_cart'])) {
      

                                ?>
                    <div class="checkout_form">




                              

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                
                                    <div class="coupon_code">
                                        <h3>Giỏ hàng</h3>
                                        <div class="coupon_inner">
                                            <div class="cart_subtotal">
                                                <p>Tổng tiền hàng</p>
                                                <p class="cart_amount"><?php echo number_format($total, 0, ',', '.') . ' VNĐ' ?></p>
                                            </div>
                                            <?php
                                            if ($total == 0) {

                                                $ship = 0;
                                            } else {
                                                $ship = 30000;
                                            } ?>

                                            <div class="cart_subtotal ">
                                                <p>Phí giao hàng</p>
                                                <p class="cart_amount"><?php echo number_format($ship, 0, ',', '.') . ' VNĐ' ?></p>
                                            </div>

                                            <?php
                                            if(isset($coupon)){
                                            foreach ($coupon as $key => $cou) {

                                                if ($cou['coupon_condition'] == 1) {
                                                    $total_coupon = ($total * $cou['coupon_amount']) / 100;
                                                    $total_order=$total + $ship - $total_coupon;
                                            ?>
                                                    <div class="cart_subtotal">
                                                        <p>Mã giảm giá</p>
                                                        <p class="cart_amount"><?php echo $cou['coupon_code'] ?></p>
                                                    </div>
                                                    <div class="cart_subtotal">

                                                        <p>Tổng số tiền giảm</p>
                                                        <p class="cart_amount"><?php echo number_format($total_coupon, 0, ',', '.') . ' VNĐ' ?></p>
                                                    </div>
                                                    <div class="cart_subtotal">

                                                        <p>Tổng số tiền phải thanh toán</p>
                                                        <p class="cart_amount"><?php echo number_format($total_order, 0, ',', '.') . ' VNĐ' ?></p>
                                                    </div>
                                                <?php
                                                } elseif ($cou['coupon_condition'] == 2) {
                                                    $total_coupon = $cou['coupon_amount']; ?>
                                                    $total_order=$total + $ship - $total_coupon;

                                                    <div class="cart_subtotal">
                                                        <p>Mã giảm giá</p>
                                                        <p class="cart_amount"><?php echo $cou['coupon_code'] ?></p>
                                                    </div>
                                                    <div class="cart_subtotal">

                                                        <p>Tổng số tiền giảm</p>
                                                        <p class="cart_amount"><?php echo number_format($cou['coupon_amount'], 0, ',', '.') . ' VNĐ' ?></p>
                                                    </div>

                                                    <div class="cart_subtotal">
                                                        <p>Tổng số tiền phải thanh toán</p>
                                                        <p class="cart_amount"><?php echo number_format($total_order, 0, ',', '.') . ' VNĐ' ?></p>
                                                    </div>
                                                    
                                            <?php
                                                }
                                            }}

                                            ?>
                                        </div>


                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
<form action="<?php echo BASE_URL ?>cart/usecoupon" method="POST">

                                                    <div class="coupon_code">
                                                        <h3>Sử dụng mã giảm giá</h3>
                                                        <div class="coupon_inner">
                                                            <p>Nhập mã phiếu giảm giá của bạn nếu bạn có</p>
                                                            <input placeholder="Coupon code" type="text" name="coupon_code">
                                                            <button type="submit" name="use_coupon">Sử dụng mã</button>
                                                            <!-- <button type="submit" name="delete_coupon">Xóa mã</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                    
                            </div>
                            </div>






                            
                            

                                        <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <form name="FormDatHang" method="POST" autocomplete="off" action="<?php echo BASE_URL ?>cart/dathang">
                                           
                                            <?php
                                            if(isset($coupon)){
                                                
                                            foreach ($coupon as $key => $cou) {
                                                 
                                                if ($cou['coupon_condition'] == 1) {
                                                   
                                                    
                                            ?>
                                             <input type="hidden" value="<?php echo $cou['coupon_id'] ?>" name="coupon_id">
                                             <input type="hidden" value="<?php echo $cou['coupon_code'] ?>" name="coupon_code">
                                             <input type="hidden" value="<?php echo $cou['coupon_number'] ?>" name="coupon_number">
                                           
                                             <?php
                                                } elseif ($cou['coupon_condition'] == 2) {
                                                   ?>
                                                    
                                                    <input type="hidden" value="<?php echo $cou['coupon_id'] ?>" name="coupon_id">
                                             <input type="hidden" value="<?php echo $cou['coupon_code'] ?>" name="coupon_code">
                                             <input type="hidden" value="<?php echo $cou['coupon_number'] ?>" name="coupon_number">
                                                    
                                                    <?php
                                                }
                                            }
                                        }

                                            ?>
                                            
                                           
                                            
                                                <h3>Thông tin đặt hàng</h3>
                                                <div class="row">

                                                    <div class="col-lg-12 mb-30">
                                                        <label>Họ và tên <span>*</span></label>
                                                        <input type="text" name="name" required>
                                                    </div>
                                                    <div class="col-lg-12 mb-30">
                                                        <label>Địa chỉ <span>*</span></label>
                                                        <input type="text" name="diachi" required>
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <label>Số điện thoại <span>*</span></label>
                                                        <input type="text" name="sodienthoai" onkeydown="return checkIt(event)" required>
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <label>Email <span>*</span></label>
                                                        <input type="email" name="email" onchange="return KiemTraEmail(this);" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="order-notes">
                                                            <label for="order_note">Lưu ý khi giao hàng</label>
                                                            <textarea id="order_note" placeholder="Vui lòng ghi lưu ý giao hàng nếu có" name="noidung"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 login_submit">
                                                        <br>
                                                        <button type="submit" name="guidonhang" id="guidonhang" value="<?php echo $cou['coupon_code'] ?>">Gửi đơn hàng</button>
                                                    </div>
                                                    <div class="col-lg-8 login_submit">
                                                        <br>
                                                        <button type="reset">Nhập lại</button>
                                                    </div>
                                                </div>
                                             
                                            </form>
                                        </div>


                                        </div>
                                        <?php }?>
                                    </div>
                            </div>
                            <!--Checkout page section end-->

                        </div>
                        <!--shopping cart area end -->

                    </div>
                    <!--pos page inner end-->
                </div>
            </div>