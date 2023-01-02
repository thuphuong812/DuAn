 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
     <div class="row">
         <div class="col-12">
             <div class="breadcrumb_content">
                 <ul>
                     <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                     <li><i class="fa fa-angle-right"></i></li>
                     <li>Đăng nhập</li>
                 </ul>

             </div>
         </div>
     </div>
 </div>
 <!--breadcrumbs area end-->

 <!-- customer login start -->
 <div class="customer_login"><?php
                if(!empty($_GET['msg'])){
                  $msg = unserialize(urldecode($_GET['msg']));
                  foreach ($msg as $key => $value){
                    echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
                  }
                }
                ?> 
     <div class="row">
          <!--register area start-->
          
          <div class="col-lg-6 col-md-6">
             <div class="account_form register">
           
                 <h2>Đăng ký</h2>
                
                 <form action="<?php echo BASE_URL ?>khachhang/insert_dangky" method="POST" autocomplete="off">
                     
                         <p>
                             <label>Họ và tên <span>*</span></label>
                             <input type="text" name="txtname" required>
                         </p>
                         <p>
                             <label>Địa chỉ <span>*</span></label>
                             <input type="text" name="txtdiachi" required>
                             </p>
                         <p>
                             <label>Số điện thoại <span>*</span></label>
                             <input type="text" name="txtsodienthoai" onkeydown="return checkIt(event)" required>
                             </p>
                         <p>
                             <label>Email <span>*</span></label>
                             <input type="email" name="txtemail" onchange="return KiemTraEmail(this);" required>
                             </p>
                         <p>
                             <label>Password <span>*</span></label>
                             <input type="Password" name="txtpassword" required>
                             </p>
                         

                         <div class="login_submit">
                         <button type="submit" name="frmSubmit">Đăng ký tài khoản</button>
                         <!-- <label for="remember">
                                                            <input id="remember" type="checkbox">
                                                            Remember me
                                                        </label>
                                                        <a href="#">Lost your password?</a> -->
                     </div>
                     
                 </form>
             </div>
         </div>
         <!--register area end-->
         <!--login area start-->
         <div class="col-lg-6 col-md-6">
             <div class="account_form">
                 <h2>Đăng nhập</h2>
                 <form action="<?php echo BASE_URL ?>khachhang/login_customer" method="POST" autocomplete="off">
                     <p>
                         <label>Email<span>*</span></label>
                         <input type="Email" name="username" required>
                     </p>
                     <p>
                         <label>Passwords <span>*</span></label>
                         <input type="password" name="password" required>
                     </p>
                     
                     <div class="login_submit">
                         <button type="submit" name="frmSubmit">Đăng nhập</button>
                         <!-- <label for="remember">
                                                            <input id="remember" type="checkbox">
                                                            Remember me
                                                        </label>
                                                        <a href="#">Lost your password?</a> -->
                     </div>

                 </form>
             </div>
         </div>
         <!--login area start-->

        
     </div>
 </div>
 <!-- customer login end -->

 </div>
 <!--pos page inner end-->
 </div>
 </div>