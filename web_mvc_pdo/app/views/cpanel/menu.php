    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
     
        <ul class="nav">
        <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-image">
                  <img src="<?php echo BASE_URL ?>public/admin/assets/images/faces/face1.jpg" alt="profile">
                  
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text">
                  <span class="mb-1 text-black">   
                    <?php
                        echo isset($_SESSION["login"])? $_SESSION["username"]:"";
                    ?>
                  </span>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?php echo BASE_URL ?>index"style="color: black;">
                  <i class="mdi mdi-cached mr-2 text-success" ></i> Website </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo BASE_URL ?>login/logout" style="color: black;">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Đăng xuất </a>
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL ?>login/dashboard">
              <span class="menu-title">Trang chủ</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL ?>contact/edit_contact/3">
              <span class="menu-title">Thông tin cửa hàng</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Danh mục bài viết</span>
              <i class="menu-arrow"></i>
              <i class="
              mdi mdi-file-document-box  menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" id="themdmbv" href="<?php echo BASE_URL ?>post/add_category_post"> Thêm </a></li>
                <li class="nav-item"> <a class="nav-link" id="lietkedmbv" href="<?php echo BASE_URL ?>post/list_category_post"> Liệt kê </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
              <span class="menu-title">Bài viết</span>
              <i class="menu-arrow"></i>
              <i class="
              mdi mdi mdi-border-color menu-icon"></i>
            </a>
            <div class="collapse" id="post">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" id="thembv" href="<?php echo BASE_URL ?>post/add_post"> Thêm </a></li>
                <li class="nav-item"> <a class="nav-link" id="lietkebv" href="<?php echo BASE_URL ?>post/list_post"> Liệt kê </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
              <span class="menu-title">Danh mục sản phẩm</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" id="themdmsp" href="<?php echo BASE_URL ?>category/add_category_product"> Thêm </a></li>
                <li class="nav-item"> <a class="nav-link" id="lietkedmsp" href="<?php echo BASE_URL ?>category/list_category_product"> Liệt kê </a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
              <span class="menu-title">Sản phẩm</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-package menu-icon"></i>
            </a>
            <div class="collapse" id="product">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" id="themsp" href="<?php echo BASE_URL ?>product/add_product"> Thêm </a></li>
                <li class="nav-item"> <a class="nav-link" id="lietkesp" href="<?php echo BASE_URL ?>product/list_product"> Liệt kê </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="slider">
              <span class="menu-title">Slider</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-image menu-icon"></i>
            </a>
            <div class="collapse" id="slider">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" > <a class="nav-link"  href="<?php echo BASE_URL ?>slider/add_slider"> Thêm </a></li>
                <li class="nav-item" > <a class="nav-link"  href="<?php echo BASE_URL ?>slider/list_slider"> Liệt kê </a></li>
              </ul>
            </div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#order" aria-expanded="false" aria-controls="order">
              <span class="menu-title">Đơn hàng</span>
              <i class="menu-arrow"></i>
              <i class=" mdi mdi-cart-outline menu-icon"></i>
            </a>
            <div class="collapse" id="order">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>order/order_new"> Đơn hàng mới </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>order/order_processed"> Đơn hàng đã xử lý</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#customer_contact" aria-expanded="false" aria-controls="customer_contact">
              <span class="menu-title">Liên hệ khách hàng</span>
              <i class="menu-arrow"></i>
              <i class=" mdi mdi-message menu-icon"></i>
            </a>
            <div class="collapse" id="customer_contact">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>contact/contact_customer_new"> Tin nhắn mới</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>contact/contact_customer_processed">Tin nhắn đã phản hồi</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#question" aria-expanded="false" aria-controls="question">
              <span class="menu-title">Câu hỏi thường gặp</span>
              <i class="menu-arrow"></i>
              <i class=" mdi mdi-checkbox-multiple-marked-outline menu-icon"></i>
            </a>
            <div class="collapse" id="question">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>question/add_question"> Thêm </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>question/list_question"> Liệt kê </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guide" aria-expanded="false" aria-controls="guide">
              <span class="menu-title">Hướng dẫn</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-file menu-icon"></i>
            </a>
            <div class="collapse" id="guide">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>guide/edit_ordering_guide/1"> Hướng dẫn đặt hàng </a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#policy" aria-expanded="false" aria-controls="policy">
              <span class="menu-title">Chính sách</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-book menu-icon"></i>
            </a>
            <div class="collapse" id="policy">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>policy/edit_privacy_policy/2"> Chính sách bảo mật </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>policy/edit_return_policy/2"> Chính sách đổi trả </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>policy/edit_warrantly_policy/2"> Chính sách bảo hành </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#coupon" aria-expanded="false" aria-controls="coupon">
              <span class="menu-title">Mã giảm giá</span>
              <i class="menu-arrow"></i>
              <i class=" mdi mdi-alarm menu-icon"></i>
            </a>
            <div class="collapse" id="coupon">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>coupon/add_coupon"> Thêm </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL ?>coupon/list_coupon"> Liệt kê </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>