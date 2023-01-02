<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Sally Shop</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL ?>public\frontend\assets\img\favicon.png">

	<!-- all css here -->
	<link rel="stylesheet" href="<?php echo BASE_URL ?>public\frontend\assets\css\bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>public\frontend\assets\css\plugin.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>public\frontend\assets\css\bundle.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>public\frontend\assets\css\style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>public\frontend\assets\css\responsive.css">
	<link href="<?php echo BASE_URL ?>public/frontend/paginationjs/dist/pagination.css" rel="stylesheet" type="text/css">
	<script src="<?php echo BASE_URL ?>public\frontend\assets\js\vendor\modernizr-2.8.3.min.js"></script>

	<meta property="og:url" content="<?php

										$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
										echo $actual_link;

										?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $this->title ?>" />
	<meta property="og:description" content="<?php echo $this->desc ?>" />
	<meta property="og:image" content="<?php echo $this->image ?>" />
</head>

<body>
	<!-- Add your site or application content here -->

	<!--pos page start-->
	<div class="pos_page">
		<div class="container">
			<!--pos page inner-->
			<div class="pos_page_inner">
				<!--header area -->
				<div class="header_area">
					<!--header top-->
					<div class="header_top">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<div class="switcher">
									<ul>
										<!-- <li class="languages"><a href="#"><img src="<?php echo BASE_URL ?>public\frontend\assets\img\logo\fontlogo.jpg" alt=""> English <i class="fa fa-angle-down"></i></a>
											<ul class="dropdown_languages">
												<li><a href="#"><img src="<?php echo BASE_URL ?>public\frontend\assets\img\logo\fontlogo.jpg" alt=""> English</a></li>
												<li><a href="#"><img src="<?php echo BASE_URL ?>public\frontend\assets\img\logo\fontlogo2.jpg" alt=""> French </a></li>
											</ul>
										</li> -->

										<!-- <li class="currency"><a href="#"> Currency : $ <i class="fa fa-angle-down"></i></a>
											<ul class="dropdown_currency">
												<li><a href="#"> Dollar (USD)</a></li>
												<li><a href="#"> Euro (EUR) </a></li>
											</ul>
										</li> -->
									</ul>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="header_links">
									<ul>
										<!-- <?php
												if (Session::get('customer') == true) {
												?>
											<li class=''><a href='<?php echo BASE_URL ?>khachhang/dangxuat'>Đăng xuất</a></li>
											<li><a href="<?php echo BASE_URL ?>cart" title="My cart">Giỏ hàng</a></li>
										<?php
												} else {
										?>
											<li class=''><a href='<?php echo BASE_URL ?>khachhang/dangnhap'>Đăng nhập</a></li>
										<?php
												}
										?>
										<li><a href="<?php echo BASE_URL ?>khachhang/dangky" title="Login">Đăng ký</a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--header top end-->

					<!--header middel-->
					<div class="header_middel">
						<div class="row align-items-center">
							<!--logo start-->
							<div class="col-lg-3 col-md-3">
								<div class="logo">
									<a href="<?php echo BASE_URL ?>index"><img src="<?php echo BASE_URL ?>public\frontend\assets\img\logo\logo.png" alt=""></a>
								</div>
							</div>
							<!--logo end-->
							<div class="col-lg-9 col-md-9">
								<div class="header_right_info">
									<div class="search_bar">
										<form action="<?php echo BASE_URL ?>search/timkiem">
											<input placeholder="Tìm kiếm..." type="text" name="tukhoa">
											<button type="submit" name="searchproduct"><i class="fa fa-search"></i></button>
										</form>
									</div>

									<div class="shopping_cart">

										<?php

										$total = 0;
										if (isset($_SESSION['shopping_cart'])) {
											foreach ($_SESSION['shopping_cart'] as $key => $values) {
												$subtotal = $values['product_quantity'] * $values['product_price'];
												$max = $values['max_quantity'];
												$total += $subtotal;

										?>


											<?php


											}
										}
										if ($total != 0) {
											?>
											<a href="#"><i class="fa fa-shopping-cart"></i>&nbsp; Tổng tiền hàng: <?php echo number_format($total, 0, ',', '.') . ' VNĐ' ?> &nbsp;<i class="fa fa-angle-down"></i></a>
										<?php
										}
										?>
										<?php
										if ($total == 0) {
										?>
											<a href="#"><i class="fa fa-shopping-cart"></i>&nbsp; Tổng tiền hàng: <?php echo number_format(0, 0, ',', '.') . ' VNĐ' ?> &nbsp;<i class="fa fa-angle-down"></i></a>
										<?php
										}
										?>




										<!--mini cart-->
										<div class="mini_cart">
											<?php

											$total = 0;
											if (isset($_SESSION['shopping_cart'])) {
												foreach ($_SESSION['shopping_cart'] as $key => $values) {
													$subtotal = $values['product_quantity'] * $values['product_price'];
													$max = $values['max_quantity'];
													$total += $subtotal;

											?>
													<div class="cart_item">
														<div class="cart_img">
															<a href="#"><img src="<?php echo BASE_URL ?>public\uploads\product\<?php echo $values['product_image'] ?>" alt=""></a>
														</div>
														<div class="cart_info">
															<a href="#"><?php echo $values['product_title'] ?></a>
															<span class="cart_price"><?php echo number_format($values['product_price'], 0, ',', '.') . ' VNĐ' ?></span>
															<span class="quantity"><?php echo $values['product_quantity'] ?></span>
														</div>

													</div>
											<?php
												}
											}

											?>

											<div class="shipping_price">
												<span> Phí Ship </span>

												<?php
												if ($total == 0) {

													$ship = 0;
												} else {
													$ship = 30000;
												} ?>
												<span> <?php echo number_format($ship, 0, ',', '.') . ' VNĐ' ?></span>
											</div>

											<div class="total_price">
												<span> Tổng tiền đơn hàng</span>
												<span class="prices"> <?php echo number_format($total + $ship, 0, ',', '.') . ' VNĐ' ?> </span>
											</div>
											<div class="cart_button">
												<a href="<?php echo BASE_URL ?>cart"> Kiểm tra và đặt hàng</a>
											</div>
										</div>
									</div>
									<!--mini cart end-->



								</div>
							</div>
						</div>
					</div>
				
					<div class="header_bottom">
						<div class="row">
							<div class="col-12">
								<div class="main_menu_inner">
									<div class="main_menu d-none d-lg-block">
										<nav>
											<ul>
												<li class="active"><a href="<?php echo BASE_URL ?>index">TRANG CHỦ</a>
												</li>


												<li><a href="<?php echo BASE_URL ?>sanpham/tatcatruyen">DANH MỤC TRUYỆN</a>
													<div class="mega_menu jewelry">
														<div class="mega_items jewelry">
															<ul>
																<?php
																foreach ($category as $key => $cate) {
																?>
																	<li><a href="<?php echo BASE_URL ?>sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></a></li>
																<?php
																}
																?>
															</ul>
														</div>
													</div>
												</li>
												<li><a href="<?php echo BASE_URL ?>sanpham/tatcatruyen">Tất cả truyện</a></li>

												<li><a href="<?php echo BASE_URL ?>tintuc/tatcatintuc">Tin tức</a>
													<div class="mega_menu jewelry">
														<div class="mega_items jewelry">
															<ul>
																<?php
																foreach ($category_post as $key => $cate_post) {
																?>
																	<li><a href="<?php echo BASE_URL ?>tintuc/danhmuc/<?php echo $cate_post['id_category_post'] ?>"><?php echo $cate_post['title_category_post'] ?></a></li>
																<?php
																}
																?>
															</ul>
														</div>
													</div>
												</li>

												<li><a href="<?php echo BASE_URL ?>index/contact">Liên hệ </a></li>

											</ul>
										</nav>
									</div>
									<div class="mobile-menu d-lg-none">
										<nav>
											<ul>
												<li><a href="<?php echo BASE_URL ?>index">TRANG CHỦ</a></li>
													
												
												<li><a href="#">DANH MỤC TRUYỆN</a>
													<div>
														<div>
														<ul>
																<?php
																foreach ($category as $key => $cate) {
																?>
																	<li><a href="<?php echo BASE_URL ?>sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></a></li>
																<?php
																}
																?>
														</ul>
														</div>
													</div>
												</li>

												<li><a href="#">Tất cả truyện</a></li>

												<li><a href="#">Tin tức</a>
													<div>
														<div>
															<ul>
																<?php
																foreach ($category_post as $key => $cate_post) {
																?>
																	<li><a href="<?php echo BASE_URL ?>tintuc/danhmuc/<?php echo $cate_post['id_category_post'] ?>"><?php echo $cate_post['title_category_post'] ?></a></li>
																<?php
																}
																?>
															</ul>
														</div>
													</div>
												</li>

												<li><a href="<?php echo BASE_URL ?>index/contact">Liên hệ </a></li>


											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				<!--header end -->